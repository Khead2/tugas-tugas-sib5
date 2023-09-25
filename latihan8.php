<?php 


$ar_bauh = ['pepaya','mangga','pisang','jambu'];

$ar_bauh[] = 'sirsak';

echo '<br>cetak data array menggunakan looping foreach';
foreach ($ar_bauh as $id => $buah){
    echo '<br>key array buah : '.$id;
}

foreach ($ar_bauh as $buah){
    echo '<br>Data Buah : '.$buah;
}

foreach($ar_bauh as $id => $buah){
    echo '<br> Budah dengan id :'.$id. 'Adalah Buah '.$buah;
}


?>