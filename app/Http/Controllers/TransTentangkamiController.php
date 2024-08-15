<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trans_tentangkami;

class TransTentangkamiController extends Controller
{
    public function index(){
        $tentangKami = trans_tentangkami::all();
        $formattedData = $tentangKami->map(function($tentangkami){
            return[
                'Id' => $tentangkami->id,
                'Email' => $tentangkami->Email,
                'Judul' => $tentangkami->Sub_Judul,
                'Whatsapp' => $tentangkami->Wa,
                'Telpon' => $tentangkami->Telpon
            ];
        });
        return response()->json($formattedData);
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'Email' => 'required|string|email|max:255',
            'Sub_Judul' => 'required|string|max:255',
            'Wa' => ['required', 'regex:/^\+62[0-9]{9,11}$/','string'],
            'Telpon' => ['required', 'regex:/^\+62[0-9]{9,11}$/','string'],
        ]);

        $validateData['Wa'] = preg_replace('/^\+62/', '0', $validateData['Wa']);
        $validateData['Telpon'] = preg_replace('/^\+62/', '0', $validateData['Telpon']);
        
        $tentangKami = new trans_tentangkami();
        $tentangKami->Email = $validateData['Email'];
        $tentangKami->Sub_Judul = htmlspecialchars($validateData['Sub_Judul'], ENT_QUOTES, 'UTF-8');
        $tentangKami->Wa = $validateData['Wa'];
        $tentangKami->Telpon = $validateData['Telpon'];

        $tentangKami->save();
        return response()->json(['success' => 'Data Berhasil Ditambahkan']);
    }

    public function update(Request $request, $id){
        $validateData = $request->validate([
            'Email' => 'required|string|email|max:255',
            'Sub_Judul' => 'required|string|max:255',
            'Wa' => ['required', 'regex:/^\+62[0-9]{9,11}$/','string'],
            'Telpon' => ['required', 'regex:/^\+62[0-9]{9,11}$/','string'],
        ]);
        $validateData['Wa'] = preg_replace('/^\+62/', '0', $validateData['Wa']);
        $validateData['Telpon'] = preg_replace('/^\+62/', '0', $validateData['Telpon']);
        $tentangKami = trans_tentangkami::find($id);
        if(!$tentangKami){
            return response()->json(['message' => 'Data Tidak Ditemukan'], 404);
        }

        $tentangKami->Email = $validateData['Email'];
        $tentangKami->Sub_Judul = htmlspecialchars($validateData['Sub_Judul'], ENT_QUOTES, 'UTF-8');
        $tentangKami->Wa = $validateData['Wa'];
        $tentangKami->Telpon = $validateData['Telpon'];
        $tentangKami->save();
        return response()->json(['success' => 'Data Berhasil Diubah']);
    }

    public function destroy($id){
        $tentangKami = trans_tentangkami::find($id);
        if(!$tentangKami){
            return response()->json(['message' => 'Data Tidak Ditemukan'], 404);
        }
        $tentangKami->delete();
        return response()->json(['success' => 'Data Berhasil Dihapus']);
    }
}
