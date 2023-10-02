<?php
require_once 'abstrct2D.php';

class Segitiga extends Bentuk2d{
    public $alas;
    public $tinggi;
    public function __construct($alas, $tinggi){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    public function namaBidang(){
        $nama = 'Segitiga';
        return $nama;
    }
    public function luasBidang(){
        $luas = 0.5 * $this->alas * $this->tinggi;
        return $luas;
    }
    public function kelilingBidang(){
        $kel = $this->alas * $this->alas *$this->alas;
        return $kel;
    }
}

?>