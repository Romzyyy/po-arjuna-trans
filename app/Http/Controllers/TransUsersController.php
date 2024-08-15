<?php

namespace App\Http\Controllers;

use App\Models\trans_users;
use Illuminate\Http\Request;



class TransUsersController extends Controller
{
    public function index(){
        $US = trans_users::all();
        $formattedData = $US->map(function($users){
            return[
                'Id' => $users->id,
                'Nama' => $users->Username,
                'Email' => $users->Email,
                // 'Level' => $users->Pola
            ];
        });
        return response()->json($formattedData);
    }

    public function store(Request $request){
       $validateData = $request->validate([
        'Email' => 'required|string|email|max:255',
        'Username' => 'required|string|max:255',
        'Password' => [
            'required',
            'string',
            'min:8',
            'regex:/[A-Z]/',
            'confirmed'
        ]
       ]);
       $validateData['Password'] = bcrypt($validateData['Password']);


       $users = new trans_users();
       $users->Email = htmlspecialchars($validateData['Email'], ENT_QUOTES, 'UTF-8');
       $users->Nama = htmlspecialchars($validateData['Username'], ENT_QUOTES, 'UTF-8'); 
       $users->Password = $validateData['Password']; 

       $users->save(); 

       return response()->json(['message' => 'Data berhasil disimpan']);
    }


    public function update(Request $request, $id){
        $validateData = $request->validate([
            'Email' => 'required|string|email|max:255|unique:trans_users,Email,' . $id,
            'Username' => 'required|string|max:255|unique:trans_users,Username,' . $id,
            'Password' => [
                'required',
                'string',
                'min:8',
                'regex:/[A-Z]/',
                'confirmed'
            ]
        ]);
    
        $users = trans_users::find($id);
        if (!$users) {
            return response()->json(['message' => 'User not found'], 404);
        }
    

        $validateData['Password'] = bcrypt($validateData['Password']);
    
  
        $users->Email = htmlspecialchars($validateData['Email'], ENT_QUOTES, 'UTF-8');
        $users->Nama = htmlspecialchars($validateData['Username'], ENT_QUOTES, 'UTF-8');
        $users->Password = $validateData['Password'];
    
        $users->save(); 
    
        return response()->json(['message' => 'Data berhasil diupdate']);
    }
    

    public function destroy($id){
        $users = trans_users::find($id);

        if(!$users){
            return response()->json(['error' => 'Data tidak ditemukan'], 404);
        }

        $users->delete();
        return response()->json(['success' => 'Data berhasil dihapus']);
    }
}
