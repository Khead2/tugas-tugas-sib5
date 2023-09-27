<?php 


function salam(){
    echo '<br> Selamat Pagi Teman-teman';
}

function sapa($kawan){
    echo '<br> Selamat Pagi'.$kawan;
}
function kabar($kawan='Budi'){
    echo '<br> Selamat Pagi Teman-teman'.$kawan;
}
//eksekusi atau output fungsi salam()
salam();
$nama = 'Deden';
sapa($nama);
sapa('And');
kabar();
kabar('Hanan');

echo '<hr>';
//fungsi mengecek bilangan prima atau bukan
function prima($bilangan){
    $prima = true;
    for($i=2 ; $i<$bilangan; $i++){
        if($bilangan % $i == 0){
            $prima = false;
            break;
        }
    }
    return $prima;
}
if (prima(12)){
    echo "Bilangan Prima";
}else {
    echo 'Bukan Bilangan Prima';
}

?>