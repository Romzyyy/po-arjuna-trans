<?php

namespace App\Http\Controllers;

use App\Models\trans_home;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class TransHomeController extends Controller
{
    public function index(){
        $home = trans_home::all();
        $formattedData = $home->map(function($home){
            return[
                'Id' => $home->id,
                'Travel' => $home->Nama_Travel,
                'Moto' => $home->Slogan,
                'Phone' => $home->Wa,
                'Icon' => $home->Logo,
                'Home' => $home->Home
            ];
        });
        return response()->json($formattedData);
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'Nama_Travel' => 'required|string|max:255',
            'Slogan' => 'required|string|max:255',
            'Wa' => ['required', 'regex:/^\+62[0-9]{9,11}$/'],
            'Logo' => 'required|image|mimes:jpeg,png,jpg|max:1024',
            'Home' => 'required|image|mimes:jpeg,png,jpg|max:1024',
        ]);

        $validateData['Wa'] = preg_replace('/^\+62/', '0', $validateData['Wa']);

        $folderName = Str::slug($validateData['Nama_Travel'], '-');
        $folderPath = 'assets/upload/travel/'. $folderName;

        $validateData ['Logo'] = $request->file('Logo')->store($folderPath);
        $validateData ['Home'] = $request->file('Home')->store($folderPath);

        $home = new trans_home();
        $home->Nama_Travel = htmlspecialchars($validateData['Nama_Travel'], ENT_QUOTES, 'UTF-8');
        $home->Slogan = htmlspecialchars($validateData['Slogan'], ENT_QUOTES, 'UTF-8');
        $home->Wa = $validateData['Wa'];
        $home->Logo = $validateData['Logo'];
        $home->Home = $validateData['Home'];
        $home->save();

        return response()->json(['success' => 'Data berhasil disimpan']);
    }

    public function update(Request $request, $id){
        $validateData = $request->validate([
            'Nama_Travel' => 'required|string|max:255',
            'Slogan' => 'required|string|max:255',
            'Wa' => ['required', 'regex:/^\+62[0-9]{9,11}$/'],
            'Logo' => 'required|image|mimes:jpeg,png,jpg|max:1024',
            'Home' => 'required|image|mimes:jpeg,png,jpg|max:1024',
        ]);

        $home = trans_home::find($id);
        if(!$home){
            return response()->json(['message' => 'Data Tidak Ada'], 404);
        }

        $validateData['Wa'] = preg_replace('/^\+62/', '0', $validateData['Wa']);

        $newFolderName = Str::slug($validateData['Judul_Halaman'], '-');
        $newFolderPath = 'assets/upload/travel' . $newFolderName;

        if($home->Nama_Travel !== $validateData['Nama_Travel']){
            $oldFolderPath = 'assets/upload/travel' . Str::slug($home->Nama_Travel, '-');

            if(!Storage::disk('public')->exists($newFolderPath)){
                Storage::disk('public')->makeDirectory($newFolderPath);
            }

            $this->moveImages($oldFolderPath, $newFolderPath, $home);

            if (Storage::disk('public')->exists($oldFolderPath) && count(Storage::disk('public')->files($oldFolderPath)) == 0) {
                Storage::disk('public')->deleteDirectory($oldFolderPath);
            }
        }

        if($request->hasFile('Logo')){
            $validateData['Logo'] = $request->file('Logo')->store($newFolderPath, 'public');
        }else{
            $validateData['Logo'] = $home->Logo;
        }

        if($request->hasFile('Home')){
            $validateData['Home'] = $request->file('Home')->store($newFolderPath, 'public');
        }else{
            $validateData['Home'] = $home->Home;
        }

        $home->Nama_Travel = $validateData['Nama_Travel'];
        $home->Slogan = $validateData['Slogan'];
        $home->Wa = $validateData['Wa'];
        $home->Logo = $validateData['Logo'];
        $home->Home = $validateData['Home'];
        $home->save();

        return response()->json(['success' => 'Data berhasil diupdate']);
    }

    protected function moveImages($oldFolderPath, $newFolderPath, $home){
        $disk = Storage::disk('public');

        if($disk->exists($home->Logo)){
            $disk->move($home->Logo, $newFolderPath . '/' . basename($home->Logo));
        }

        if($disk->exists($home->Home)){
            $disk->move($home->Home, $newFolderPath . '/' . basename($home->Home));
        }
    }

    public function destroy($id){
        $home = trans_home::find($id);
        if(!$home){
            return response()->json(['message' => 'Data tidak ada'], 404);
        }

        $home->delete();
        return response()->json(['success' => 'Data berhasil dihapus']);
    }
}
