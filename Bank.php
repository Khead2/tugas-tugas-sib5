<?php 
class Bank {
    protected $norek;
    public $nama;
    private $saldo;
    static $jml = 0;
    const BANK = 'Bank Syariah Nurul Fikri';
    public function __construct($no, $nasabah, $saldo){
        $this -> norek = $no;
        $this ->nama = $nasabah;
        $this ->saldo = $saldo;
        self::$jml++;
    }
    public function setor($uang){
        $this->saldo += $uang;
    }
    public function ambil ($uang){
        $this->saldo -= $uang;
    }
    public function cetak(){
        echo '<b><u>'.self::BANK.'</u><b>';
        echo '<br> No. Rekening : '.$this->norek;
        echo '<br> Nama Nasabh : '.$this->nama;
        echo '<br> Saldo : '.$this->saldo;
    }
}   


?>