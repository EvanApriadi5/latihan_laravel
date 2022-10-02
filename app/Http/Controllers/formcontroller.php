<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class formcontroller extends Controller
{
    //
    public function register() {
            return view('form.register');
        
    }

    public function FormLuas() {
        return view('form.hitung');
   }

   public function FormNilai() {
    return view('form.hitung_nilai');
}


    public function postdata(Request $request) {
        $username = $request->username;
        $password = Hash::make($request->password);

        return view('form.output', compact('username', 'password') );  //contoh menggunakan compact untuk menghitung hasil ke view
    
    }

    public function hitungluas(Request $request) {
        $panjang = $request->panjang;
        $lebar = request('lebar');

        $luas = $panjang * $lebar;

        return view('form.hasil', [   //contoh menggunaakan syntak hitung array untuk menampilkan hasl
        'panjang' => $panjang,
        'lebar' => $lebar,
        'luas' => $luas
    ]);
    }

    public function Hitungnilai(Request $request) {
        $uts = $request->uts;
        $uas = $request->uas;

        $rata = ($uts + $uas)/2;

            if($rata >= 90 and $rata <= 100 ) {
                $keterangan = "A";  
             }
             
             // 80 - 89
             else if($rata >= 80 and $rata <= 89){
                $keterangan = "b";
             }
             
             // 70 - 79
             else if($rata >= 70 and $rata <= 79){
                $keterangan = "c";
             }
             
             else if($rata < 70) {
                $keterangan = "d";
             } else {
                $keterangan = "undifined";
             }
             
  
    
    return view('form.hasil_nilai', [   //contoh menggunaakan syntak hitung array untuk menampilkan hasl di file view
        'uts' => $uts,
        'uas' => $uas,
        'rata' => $rata,
        'keterangan' => $keterangan

    ]);

}

}
