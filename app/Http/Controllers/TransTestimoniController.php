<?php

namespace App\Http\Controllers;

use App\Models\trans_testimoni;
use Illuminate\Http\Request;

class TransTestimoniController extends Controller
{
    public function index(){
        $tesmon = trans_testimoni::all();
        $formattedData = $tesmon->map(function($testimoni){
            return[
                'Id' => $testimoni->id,
                'Judul' => $testimoni->Judul_Halaman,
                'Komentar' => $testimoni->Testimoni
            ];
        });
        return response()->json($formattedData);
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'Judul_Halaman' => 'required|string|max:255',
            'Testimoni' => 'required|integer|min:0|max:100',
        ]);

        $tesmon = new trans_testimoni();
        $tesmon->Judul_Halaman = htmlspecialchars($validateData['Judul_Halaman'], ENT_QUOTES, 'UTF-8');
        $tesmon->Testimoni = $validateData['Testimoni'];
        $tesmon->save();
        return response()->json(['success' => 'Data Berhasil Ditambahkan']);
    }

    public function update(Request $request, $id){
        $validateData = $request->validate([
            'Judul_Halaman' => 'required|string|max:255',
            'Testimoni' => 'required|interger|min:0|max:100',
        ]);

        $tesmon = trans_testimoni::find($id);
        if(!$tesmon){
            return response()->json(['success' => 'Data Tidak Ditemukan'],404);
        }

        $tesmon->Judul_Halaman = htmlspecialchars($validateData['Judul_Halaman'], ENT_QUOTES, 'UTF-8');
        $tesmon->Testimoni = $validateData['Testimoni'];
        $tesmon->save();
        return response()->json(['success' => 'Data Berhasil Diubah']);
    }

    public function destroy($id){
        $tesmon = trans_testimoni::find($id);
        if(!$tesmon){
            return response()->json(['success' => 'Data Tidak Ditemukan'],404);
        }
        $tesmon->delete();
        return response()->json(['success' => 'Data Berhasil Dihapus']);
    }
}
