<?php

//konentar

// echo"Hello world";
// latihan membuat variable
$namaSiswa = "Budi Santoso";
$umur = 25;
$beratBanadan = 30.5;
$_pekerjaan = "Mahasiswa";

//contog variabel econstanta
$jari2 = 15;
define('PHI', 3.14);
$luas = PHI * $jari2 * $jari2;

echo '<br>Nama Masiswa : ' .$namaSiswa;
echo '<br>Umur : ' .$umur;
echo '<br>Berat Badan : ' .$beratBanadan;
echo '<br>Pekerjaan : ' .$_pekerjaan;
echo '<br> Berat Badan 2 : $beratBadan kg';
echo "<br> Betat Badan 3 $beratBanadan";
print '<br> Pekerjaan 2 : ' .$_pekerjaan;
?>

<hr>
<br> siswa :1 <?= $namaSiswa ?>
<p>Umur : <?= $umur ?> </p>
<p>Luas jari jari adalah <? $luas?> </p>
