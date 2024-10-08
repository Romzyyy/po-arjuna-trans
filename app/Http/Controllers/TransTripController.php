<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trans_trip;
use Illuminate\Validation\Rule;


class TransTripController extends Controller
{
    public function index(){
        $trips = trans_trip::all();
        $formattedData = $trips->map(function($trip){
            return[
                'Id' => $trip->id,
                'Judul' => $trip->Judul_Halaman,
                'Phone' => $trip->Wa,
                'Tanggal' => $trip->Jadwal_Trip
            ]; 
        });
        return response()->json($formattedData);
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'Judul_Halaman' => 'required|string|max:255',
            'Wa' => [
                'required', 
                'regex:/^\+62[0-9]{9,11}$/',
                'string', 
                'unique:Trans_Trip,Wa',
                function($attribute, $value, $fail) {
                    $digits = strlen(preg_replace('/^\+62/', '', $value));
                    if ($digits < 9 || ($digits > 11 && $digits != 12)) {
                        $fail('Nomor WhatsApp harus antara 9 sampai 12 digit setelah kode negara +62.');
                    }
                }
            ],
            'Jadwal_Trip' => 'required|date',
        ]);
    

        $validateData['Wa'] = preg_replace('/^\+62/', '0', $validateData['Wa']);
    
        $trip = new trans_trip();
        $trip->Judul_Halaman = htmlspecialchars($validateData['Judul_Halaman'], ENT_QUOTES, 'UTF-8');
        $trip->Wa = $validateData['Wa'];
        $trip->Jadwal_Trip = $validateData['Jadwal_Trip'];
        $trip->save();
    
        return response()->json(['success' => 'Data Berhasil Ditambahkan']);
    }
    

    public function update(Request $request, $id){
        $validateData = $request->validate([
            'Judul_Halaman' => 'required|string|max:255',
            'Wa' => [
                'required',
                'regex:/^\+62[0-9]{9,11}$/',
                'string',

                Rule::unique('Trans_Trip', 'Wa')->ignore($id)
            ],
            'Jadwal_Trip' => 'required|date',
        ]);
    
        $trip = trans_trip::find($id);
        if(!$trip){
            return response()->json(['message' => 'Data Tidak Ditemukan'], 404);
        }
        
        $validateData['Wa'] = preg_replace('/^\+62/', '0', $validateData['Wa']);
    
        $trip->Judul_Halaman = htmlspecialchars($validateData['Judul_Halaman'], ENT_QUOTES, 'UTF-8');
        $trip->Wa = $validateData['Wa'];
        $trip->Jadwal_Trip = $validateData['Jadwal_Trip'];
        $trip->save();
        
        return response()->json(['success' => 'Data Berhasil Diupdate']);
    }
    

    public function destroy($id){
        $trip = trans_trip::find($id);
        if(!$trip){
            return response()->json(['message' => 'Data Tidak Ditemukan'], 404);
        }
        $trip->delete();
        return response()->json(['success' => 'Data Berhasil Dihapus']);
    }
}
