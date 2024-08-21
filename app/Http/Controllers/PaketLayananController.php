<?php

namespace App\Http\Controllers;

use App\Models\PaketLayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PaketLayananController extends Controller
{
    public function index(){
        $paket = PaketLayanan::all();
        $formattedData = $paket->map(function($paket){
            return[
                'ID' => $paket->id,
                'Layanan' => $paket->Nama_Layanan,
                'Foto' => $paket->Gambar,
                'Keterangan' => $paket->Keterangan,
            ];
        });
        return response()->json($formattedData);
    }

    public function store(Request $request){
        $request->validate([
            'Nama_Layanan' => 'required|string|max:255',
            'Gambar' => 'required|image|mimes:jpeg,png,jpg|max:1024',
            'Keterangan' => 'required|string'
        ]);
    
        $paket = new PaketLayanan();
        $paket->Nama_Layanan = htmlspecialchars($request->Nama_Layanan, ENT_QUOTES, 'UTF-8');
    
        if($request->hasFile('Gambar')){
            $gambar = $request->file('Gambar');
            $fileName = Str::random(40) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('assets/upload/PaketLayanan'), $fileName);
            $paket->Gambar = $fileName;
        }
    
        $paket->Keterangan = htmlspecialchars($request->Keterangan, ENT_QUOTES, 'UTF-8');
        $paket->save();
    
        return response()->json(['success' => 'Data berhasil ditambahkan']);
    }

    public function update(Request $request, $id){
        $request->validate([
            'Nama_Layanan' => 'required|string|max:255',
            'Gambar' => 'required|image|mimes:jpeg,png,jpg|max:1024',
            'Keterangan' => 'required|string'
        ]);

        $paket = PaketLayanan::find($id);
        if(!$paket){
            return response()->json(['message' => 'Data tidak ada'], 404);
        }

        $paket->Nama_Layanan = htmlspecialchars($request->Nama_Layanan, ENT_QUOTES, 'UTF-8');
        $paket->Keterangna = htmlspecialchars($request->Keterangan, ENT_QUOTES, 'UTF-8');

        if($request->hasFile('Gambar')){
            if($paket->Gambar){
                $gambarPath = public_path('assets/upload/PaketLayanan' . $paket->Gambar);
                if(file_exists($gambarPath)){
                    unlink($gambarPath);
                }
            }

        $gambar = $request->file('Gambar');
        $fileName = Str::random(40) . '.' . $gambar->getClientOriginalExtension();
        $gambar->move(public_path('assets/pengguna/PaketLayanan'), $fileName);
        $paket->Gambar = $fileName;
        }
        $paket->save();
        return response()->json(['success' => 'Data berhasil diperbarui']);
    }

    public function destroy($id){
        $paket = PaketLayanan::find($id);
        if(!$paket){
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        $paket->delete();
        return response()->json(['success' => 'Data Berhasil dihapus']);
    }
    
}
