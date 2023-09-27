<?php 
$str = 'Beljar PHP di Kampus Merdeka';
echo $str;

$str = strtoupper($str);
echo '<br>' .$str;
$str = strtolower($str);
echo '<br>' .$str;

$ar_buah = ['Pepaya','Mangga','Pisang','Jambu','Apel'];
sort($ar_buah); //mengurutkan atay memilah sesuai abjad
foreach($ar_buah as $buah){
    echo '<br>'.$buah;
}

echo '<hr>';
arsort($ar_buah); //mengurutkan atau memilah dari Z
foreach($ar_buah as $buah){
    echo '<br>'.$buah;
}
?>