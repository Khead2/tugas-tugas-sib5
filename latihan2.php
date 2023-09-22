<?php 
    $nama = "Hanan Abdul Ghani";
    $nilai = 85;
    if($nilai >= 85 && $nilai <= 100 ) $grade  = "A";
    else if($nilai >= 75 && $nilai <= 84) $grade = "B";
    elseif($nilai >= 60 && $nilai <= 74) $grade = "C";
    elseif($nilai >= 30 && $nilai <= 59) $grade = "D";
    elseif($nilai >= 0 && $nilai <= 29)$grade = "E";
    else $grade = "";

    switch ($grade) {
        case 'A':
            $prdikat = "Memuaskan";
            break;
        case 'B':
            $prdikat ="Bagus";
            break;
        case 'C':
            $prdikat = "Cukup";
            break;
        case 'D':
           $prdikat = "Kurang";
            break;
        case 'E':
            $prdikat = "Buruk";
            break;
        default:
            $prdikat = " ";
            break;
    }
?>

<h1>Nama siswa : <?= $nama?></h1>
<h2>Nilai : <?= $nilai?></h2>
<h2>Grade : <?= $grade?></h2>
<h2>Predikat : <?= $prdikat?></h2>