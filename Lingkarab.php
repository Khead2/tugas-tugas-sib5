<?php

require_once 'abstract.php';
class Lingkaran extends bentuk2d{
    public $jari2;
    public function __construct($jari2){
        $this->jari2 = $jari2;
    }
    public function Keliling(){
        echo 'Lingkaran';
    }
    public function LuasBidang(){
        $luas = 3.14 * $this-> jari2 * $this -> jari2;
        return $luas;
    }
    public function cetak(){
        echo '<br>Jari - Jari : '.$this->jari2;
        echo '<br>Hasil : '.$this->LuasBidang();
    }
}

?>