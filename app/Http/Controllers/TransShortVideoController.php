<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trans_short_video;

class TransShortVideoController extends Controller
{
    public function index(){

        $data = trans_short_video::all();
        $formattedData = $data->map(function($data){
           return[
               'Id' => $data->id,
               'Judul' => $data->Judul_Halaman,
               'Youtube' => $data->Youtube,
               'Instagram' => $data->Instagram,
               'Tiktok' => $data->Tiktok,
               'Facebook' => $data->Facebook,
               'Video' => $data->Short_Video
           ]; 
        });
         return response()->json($formattedData);
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'Judul_Halaman' => 'required|string',
            'Youtube' => 'required|string',
            'Instagram' => 'required|string',
            'Tiktok' => 'required|string',
            'Facebook' => 'required|string',
            'Short_Video' => 'required|integer|min:0|max:100',
        ]);
        
        $short_video = new trans_short_video();
        $short_video->Judul_Halaman = htmlspecialchars($validateData['Judul_Halaman'], ENT_QUOTES, 'UTF-8');
        $short_video->Youtube = $validateData['Youtube'];
        $short_video->Instagram = $validateData['Instagram'];
        $short_video->Tiktok = $validateData['Tiktok'];
        $short_video->Facebook = $validateData['Facebook'];
        $short_video->Short_Video = $validateData['Short_Video'];
        $short_video->save();
        return response()->json(['success' => 'Data Berhasil Ditambahkan']);
    }

    public function update(Request $request, $id){
        $validateData = $request->validate([
            'Judul_Halaman' => 'required|string|max:255',
            'Youtube' => 'required|string',
            'Instagram' => 'required|string',
            'Tiktok' => 'required|string',
            'Facebook' => 'required|string',
            'Short_Video' => 'required|interger|min:0|max:100',
        ]);

        $short_video = trans_short_video::find($id);
        if(!$short_video){
            return response()->json(['message' => 'Data Tidak Ditemukan'], 404);
        }
        $short_video->Judul_Halaman = htmlspecialchars($validateData['Judul_Halaman'], ENT_QUOTES, 'UTF-8');
        $short_video->Youtube = $validateData['Youtube'];
        $short_video->Instagram = $validateData['Instagram'];
        $short_video->Tiktok = $validateData['Tiktok'];
        $short_video->Facebook = $validateData['Facebook'];
        $short_video->Short_Video = $validateData['Short_Video'];
        $short_video->save();
        return response()->json(['success' => 'Data Berhasil Diubah']);
    }

    public function destroy($id){
        $short_video = trans_short_video::find($id);
        if(!$short_video){
            return response()->json(['message' => 'Data Tidak Ditemukan'], 404);
        }
        $short_video->delete();
        return response()->json(['success' => 'Data Berhasil Dihapus']);
    }
}
