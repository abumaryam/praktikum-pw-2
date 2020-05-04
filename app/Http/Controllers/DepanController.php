<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prodi;


class DepanController extends Controller
{

    public function awal()
    {
        $prodi = new Prodi();
        $nama_prodi = $prodi->namaLengkap();
        $nama_lengkap = "<h1>Dian Prawira</h1>";
        $rekap_nilai = [
            [
               "nim"=>"H11111",
               "nama"=>"Ali",
               "nilai_alpro"=>80 
            ],
            [
               "nim"=>"H11112",
               "nama"=>"Umar",
               "nilai_alpro"=>85 
            ],
            [
               "nim"=>"H11113",
               "nama"=>"Utsman",
               "nilai_alpro"=>82 
            ]
        ];


        return view('depan.awal',["nama_lengkap"=>$nama_lengkap,"rekap_nilai"=>$rekap_nilai,'nama_prodi'=>$nama_prodi]);
    }

    public function latihan()
    {
        
        $nilai = ["budi"=>25,"umar"=>49,"ali"=>7];
        $hasil = $this->penjumlahan($nilai['budi'],$nilai['ali']);
        $x = $hasil*(50/100);
        echo $x;
    }

    public function penjumlahan($a,$b)
    {
        $c = $a+$b;
        return $c;
    }

    public function cobaForm()
    {
        return view('depan.cobaform');
    }

    public function prosesForm(Request $request)
    {

        return view('depan.prosesform',['request'=>$request]);
    }

    public function cobaTangkap(Request $request,$kelurahan)
    {
        echo $kelurahan;
    }

    public function munculkanProdi()
    {
        $prodi = new Prodi();
        $prodi->tambahProdi('Ilmu Kelautan','Nora Idawati');
        $semua_prodi = $prodi->semuaProdi();
        return view('depan.munculprodi',['semua_prodi'=>$semua_prodi]);
    }

    

    
}
