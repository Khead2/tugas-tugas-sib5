<?php
require_once 'Person.php';
class Mahasiswa extends Person{
    public $semeter;
    public $jurusan;
    public function __construct($nama, $gelar, $semester, $jurusan){
        parent::__construct($nama, $gelar);
        $this->semester = $semester;
        $this->jurusan =  $jurusan;
    }
    public function cetak(){
        parent::cetak();
        echo '<br> Semester : '.$this->semester;
        echo '<br> Jurusan : '.$this->jurusan;
        echo '<br>';
        echo '<hr>';
    }
}

?>