<?php
class KonversiSuhu {
    public $satuanSuhuAwal;
    public $besaranSuhu;
    public $satuanSuhuTujuan;

    public function __construct($satuanSuhuAwal,$besaranSuhu,$satuanSuhuTujuan){
        $this->satuanSuhuAwal = $satuanSuhuAwal;
        $this->besaranSuhu = $besaranSuhu;
        $this->satuanSuhuTujuan = $satuanSuhuTujuan;
    }

    public function updateSuhu($suhu){
        $this->besaranSuhu = $suhu;
    }
    public function konversi(){

        if ($this->satuanSuhuAwal == "Celcius" && $this->satuanSuhuTujuan == "Fahrenheit") {
            $hasil = (9/5) * $this->besaranSuhu +32;
        }elseif ($this->satuanSuhuAwal == "Fahrenheit" && $this->satuanSuhuTujuan == "Celcius") {
            $hasil = ($this->besaranSuhu - 32 ) * 5/9;
        }elseif ($this->satuanSuhuAwal == "Celcius" && $this->satuanSuhuTujuan == "Rheamur") {
            $hasil = (4/5)*$this->besaranSuhu;
        }elseif ($this->satuanSuhuAwal == "Rheamur" && $this->satuanSuhuTujuan == "Celcius") {
            $hasil = $this->besaranSuhu / 0.8;
        }else{
            $hasil ="Satuan Suhu tidak di temukan";
        }
        return $hasil;
    }
    public function cetak(){
        echo '<table border="1" width ="50%">
        <thead>
            <tr>
                <th>Satuan Suhu Awal</th>
                <th>Besaran Suhu</th>
                <th>Satuan Suhu Tujuan</th>
                <th>Hasil konversi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>'.$this->satuanSuhuAwal.'</td>
                <td>'.$this->besaranSuhu.'</td>
                <td>'.$this->satuanSuhuTujuan.'</td>
                <td>'.$this->konversi().'</td>

            </tr>
        </tbody>
    </table>';

    echo '<br><hr>';
    }
}


?>

