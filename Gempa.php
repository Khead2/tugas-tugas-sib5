<?php 
class gempa{
    private $lokasi;
    private $sekala;

    public function __construct($lokasi,$sekala){
        $this->lokasi = $lokasi;
        $this->sekala = $sekala;
    }
    private function dampak($sekala){
        $this->sekala = $sekala;
        if ($sekala >= 0 && $sekala <=2) {
            $dampak = 'Tidak Terasa';
        }elseif ($sekala > 2 && $sekala <= 4) {
            $dampak ="Bangunan Retak retak";
        }elseif ($sekala > 4 && $sekala <= 6) {
            $dampak = "Bangunan Roboh";
        }else {
            $dampak = "Berpotensi Tsunami";
        }
        return $dampak;
    }
    public function cetak(){
        echo 'Lokasi : ' .$this->lokasi;
        echo '<br> Skala : ' .$this->sekala;
        echo '<br> Dampak : ' .$this->dampak($this->sekala);
        echo '<br>';

    }
}

?>