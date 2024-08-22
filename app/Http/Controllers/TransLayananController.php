<?php

namespace App\Http\Controllers;

use App\Models\trans_layanan;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class TransLayananController extends Controller
{
    public function index(){
        $layan= trans_layanan::all();
        $formattedData = $layan->map(function($layanan){
            return[
                'Id' => $layanan->id,
                'Judul' => $layanan->Judul_Halaman,
                'Deskripsi' => $layanan->Keterangan_Umum,
                'Phone' => $layanan->Wa,
                'Total' => $layanan->Total_Pelanggan,
                'TotalTerlayani' => $layanan->Total_Pelanggan_Terlayani,
                'GambarSampul' => $layanan->Gambar,
                'GambarIsian' => $layanan->Gambar1,
                'GambarDetail' => $layanan->Gambar2
            ];
        });
        return response()->json($formattedData);
    }

    public function store(Request $request) {
        $validateData = $request->validate([
            'Judul_Halaman' => 'required|string|max:255',
            'Keterangan_Umum' => 'nullable|string',
            'Wa' => [
                'required',
                'regex:/^\+62[0-9]{9,11}$/',
                'string',
                'unique:Trans_Layanan,Wa',
                function($attribute, $value, $fail) {
                    $digits = strlen(preg_replace('/^\+62/', '', $value));
                    if ($digits < 9 || ($digits > 11 && $digits != 12)) {
                        $fail('Nomor WhatsApp harus antara 9 sampai 12 digit setelah kode negara +62.');
                    }
                }
            ],
            'Total_Pelanggan' => 'required|integer|min:0',
            'Total_Pelanggan_Terlayani' => 'required|integer|min:0',
            'Gambar' => 'required|image|mimes:jpeg,png,jpg|max:1024',
            'Gambar1' => 'required|image|mimes:jpeg,png,jpg|max:1024',
            'Gambar2' => 'required|image|mimes:jpeg,png,jpg|max:1024',
        ]);
    
        $validateData['Wa'] = preg_replace('/^\+62/', '0', $validateData['Wa']);
    
        $folderName = Str::slug($validateData['Judul_Halaman'], '-');
        $folderPath = public_path('assets/upload/' . $folderName);
    
        // Buat folder jika belum ada
        if (!file_exists($folderPath)) {
            mkdir($folderPath, 0755, true);
        }
    
        // Simpan file ke folder yang ditentukan
        $gambar = $request->file('Gambar')->hashName();
        $gambar1 = $request->file('Gambar1')->hashName();
        $gambar2 = $request->file('Gambar2')->hashName();
    
        $request->file('Gambar')->move($folderPath, $gambar);
        $request->file('Gambar1')->move($folderPath, $gambar1);
        $request->file('Gambar2')->move($folderPath, $gambar2);
    
        $layanan = new trans_layanan();
        $layanan->Judul_Halaman = htmlspecialchars($validateData['Judul_Halaman'], ENT_QUOTES, 'UTF-8');
        $layanan->Keterangan_Umum = htmlspecialchars($validateData['Keterangan_Umum'], ENT_QUOTES, 'UTF-8');
        $layanan->Wa = $validateData['Wa'];
        $layanan->Total_Pelanggan = htmlspecialchars($validateData['Total_Pelanggan'], ENT_QUOTES, 'UTF-8');
        $layanan->Total_Pelanggan_Terlayani = htmlspecialchars($validateData['Total_Pelanggan_Terlayani'], ENT_QUOTES, 'UTF-8');
        $layanan->Gambar = $gambar;
        $layanan->Gambar1 = $gambar1;
        $layanan->Gambar2 = $gambar2;
        $layanan->save();
    
        return response()->json(['success' => 'Data berhasil disimpan']);
    }
    

    
    public function update(Request $request, $id) {
        // Validasi input
        $validateData = $request->validate([
            'Judul_Halaman' => 'required|string|max:255',
            'Keterangan_Umum' => 'nullable|string',
            'Wa' => ['required', 'regex:/^\+62[0-9]{9,11}$/'],
            'Total_Pelanggan' => 'required|integer|min:0',
            'Total_Pelanggan_Terlayani' => 'required|integer|min:0',
            'Gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
            'Gambar1' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
            'Gambar2' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
        ]);
    
        // Temukan entitas berdasarkan ID
        $layan = trans_layanan::find($id);
        if (!$layan) {
            return response()->json(['message' => 'Data Tidak Ada'], 404);
        }
    
        // Konversi nomor telepon
        $validateData['Wa'] = preg_replace('/^\+62/', '0', $validateData['Wa']);
        
        // Tentukan nama folder baru
        $newFolderName = Str::slug($validateData['Judul_Halaman'], '-');
        $newFolderPath = 'assets/upload/' . $newFolderName;
    
        // Jika Judul_Halaman berubah, buat folder baru dan hapus folder lama
        if ($layan->Judul_Halaman !== $validateData['Judul_Halaman']) {
            $oldFolderPath = 'assets/upload/' . Str::slug($layan->Judul_Halaman, '-');
    
            // Buat folder baru jika belum ada
            if (!Storage::disk('public')->exists($newFolderPath)) {
                Storage::disk('public')->makeDirectory($newFolderPath);
            }
    
            // Pindahkan gambar dari folder lama ke folder baru jika ada
            $this->moveImages($oldFolderPath, $newFolderPath, $layan);
    
            // Hapus folder lama jika kosong
            if (Storage::disk('public')->exists($oldFolderPath) && count(Storage::disk('public')->files($oldFolderPath)) == 0) {
                Storage::disk('public')->deleteDirectory($oldFolderPath);
            }
        }
    
        // Update informasi gambar jika ada file baru
        if ($request->hasFile('Gambar')) {
            $validateData['Gambar'] = $request->file('Gambar')->store($newFolderPath, 'public');
        } else {
            $validateData['Gambar'] = $layan->Gambar; // Tetap gunakan gambar lama jika tidak ada file baru
        }
    
        if ($request->hasFile('Gambar1')) {
            $validateData['Gambar1'] = $request->file('Gambar1')->store($newFolderPath, 'public');
        } else {
            $validateData['Gambar1'] = $layan->Gambar1;
        }
    
        if ($request->hasFile('Gambar2')) {
            $validateData['Gambar2'] = $request->file('Gambar2')->store($newFolderPath, 'public');
        } else {
            $validateData['Gambar2'] = $layan->Gambar2;
        }
    
        // Update data entitas
        $layan->Judul_Halaman = $validateData['Judul_Halaman'];
        $layan->Keterangan_Umum = $validateData['Keterangan_Umum'];
        $layan->Wa = $validateData['Wa'];
        $layan->Total_Pelanggan = $validateData['Total_Pelanggan'];
        $layan->Total_Pelanggan_Terlayani = $validateData['Total_Pelanggan_Terlayani'];
        $layan->Gambar = $validateData['Gambar'];
        $layan->Gambar1 = $validateData['Gambar1'];
        $layan->Gambar2 = $validateData['Gambar2'];
        $layan->save();
    
        return response()->json(['message' => 'Data berhasil diperbarui']);
    }
    
    protected function moveImages($oldFolderPath, $newFolderPath, $layan) {
        $disk = Storage::disk('public');
        
        // Pindahkan gambar dari folder lama ke folder baru jika ada
        if ($disk->exists($layan->Gambar)) {
            $disk->move($layan->Gambar, $newFolderPath . '/' . basename($layan->Gambar));
        }
    
        if ($disk->exists($layan->Gambar1)) {
            $disk->move($layan->Gambar1, $newFolderPath . '/' . basename($layan->Gambar1));
        }
    
        if ($disk->exists($layan->Gambar2)) {
            $disk->move($layan->Gambar2, $newFolderPath . '/' . basename($layan->Gambar2));
        }
    }

    public function destroy($id){
        $layan = trans_layanan::find($id);
        if (!$layan) {
            return response()->json(['message' => 'Data Tidak Ada'], 404);
        }
        $layan->delete();
        return response()->json(['success' => 'Data Berhasil Dihapus']);
    }
}
