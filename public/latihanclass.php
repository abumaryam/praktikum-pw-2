<?php

class Bangun  
{
    private function identitas()
    {
        echo "Saya adalah bangun";
    }

    public function panggil()
    {
        $this->identitas();
    }
}


class Persegi extends Bangun
{
    public $panjang;
    public $lebar;

    public function __construct($p,$l)
    {
        $this->panjang = $p;
        $this->lebar = $l;
    }

    public function hitungLuas()
    {
        $luas = $this->panjang*$this->lebar;
        return $luas;
    }

    public function hitungKeliling()
    {
        $keliling = 2*($this->panjang+$this->lebar);
        $this->identitas();
        return $keliling;
    }
}

$bgn = new Bangun();

$bgn->panggil();




?>