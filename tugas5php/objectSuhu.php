<?php 
require 'KonversiSuhu.php';

$s1 = new KonversiSuhu("Celcius",50,"Fahrenheit");
$s1c = new KonversiSuhu("Celcius",30,"Fahrenheit");
$s2 = new KonversiSuhu("Fahrenheit",100,"Celcius");
$s2f = new KonversiSuhu("Fahrenheit",10,"Celcius");
$s3 = new KonversiSuhu("Celcius",60,"Rheamur");
$s3cr = new KonversiSuhu("Celcius",25,"Rheamur");
$s4 = new KonversiSuhu("Rheamur",40,"Celcius");
$s4r = new KonversiSuhu("Rheamur",15,"Celcius");
$s5 = new KonversiSuhu("Celciu",50,"Fahrenheit");
$s5t = new KonversiSuhu("Celcius",50,"Fahrheit");



$s1 -> cetak();
$s1c -> cetak();
$s2 -> cetak();
$s2f -> cetak();
$s3 -> cetak();
$s3cr -> cetak();
$s4 -> cetak();
$s4r -> cetak();
$s5 -> cetak();
$s5t -> cetak();



?>