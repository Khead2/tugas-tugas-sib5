<?php
require 'Gempa.php';

$g1 = new gempa('Banten',1);
$g2 = new gempa('Kalibagor',3);
$g3 = new gempa('Jakarta',5);
$g4 = new gempa('Baturaden',6);
$g5 = new gempa('Jawir',10);

$g1-> cetak();
$g2-> cetak();
$g3-> cetak();
$g4-> cetak();
$g5-> cetak();

?>