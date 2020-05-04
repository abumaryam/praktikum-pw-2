<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Prodi extends Model
{
    protected $table = 'prodi';

    public function namaLengkap()
    {
        $nama_prodi = "Sistem Informasi";
        return $nama_prodi;
    }

    public function semuaProdi()
    {
        $prodi = DB::select('select * from prodi');
        return $prodi;
    }

    public function tambahProdi($nama_prodi,$nama_kaprodi)
    {
        DB::insert('insert into prodi (nama_prodi,nama_kaprodi) values (?,?)',[$nama_prodi,$nama_kaprodi]);
    }

    public function mahasiswa()
    {
        return $this->hasMany('App\Mahasiswa');
    }

}
