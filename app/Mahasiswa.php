<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    public $timestamps = false;

    public function prodi()
    {
        return $this->belongsTo('App\Prodi');
    }

}
