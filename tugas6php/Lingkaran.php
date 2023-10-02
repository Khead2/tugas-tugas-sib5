<?php

require_once 'abstrct2D.php';
class Lingkaran extends Bentuk2d{
    public $jari2;
    public function __construct($jari2){
        $this->jari2 = $jari2;
    }
    public function namaBidang(){
        $nama = 'Lingkaran';
        return $nama;
    }
    public function luasBidang(){
        $luas = 3.14 * $this->jari2 * $this->jari2;
        return $luas;
    }
    public function kelilingBidang(){
        $kel = 3.14 * 2 * $this->jari2;
        return $kel;
    }
    public function cetak(){
        $this->luasBidang();
        $this->kelilingBidang();
    }
}


?>