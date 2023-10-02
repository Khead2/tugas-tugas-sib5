<?php
require_once 'Lingkaran.php';
require_once 'abstrct2d.php';

class PersegiPanjang extends Bentuk2d{
    public $panjang;
    public $lebar;
    public function __construct($panjang, $lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    public function namaBidang(){
        $nama = 'Persegi Panjang';
        return $nama;
    }
    public function luasBidang(){
        $luas = $this->panjang * $this->lebar;
        return $luas;
    }
    public function kelilingBidang(){
        $kel = 2*($this->panjang + $this->lebar);
        return $kel;
    }
}

?>