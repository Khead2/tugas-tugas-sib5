<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>From input penilaian</h1>
    <form method="POST">
        <label for="">Nama : </label>
        <input type="text" name="name" placeholder="Masukan Nama">
        <label for="">Mata Kuliah</label>
        <select name="matkul" id="">--Pilih Matakuliah--
            <option value="html">HTML dan CSS</option>
            <option value="js">Javascript</option>
            <option value="ui">UI/UX</option>
            <option value="php">PHP</option>
        </select>
        <label for="">Nilai</label>
        <input type="text" name="nilai" placeholder="Masukan Nilai">
        <button name="proses" type= "submit">Simpan</button>

    </form>
    <?php 
    $nama = $_POST['name'];
    $matakuliah = $_POST['matkul'];
    $tombol = $_POST['proses'];
    $nilai = $_POST['nilai'];
    
    $ket =($nilai >= 60 )? "Lulus" : "Gagal";
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

    if(isset($tombol)){

    
    ?>

<h1>Nama siswa : <?= $nama?></h1>
<h2>Mata kuliah : <?= $matakuliah?></h2>
<h2>Keterangan : <?= $ket?></h2>
<h2>Nilai : <?= $nilai?></h2>
<h2>Grade : <?= $grade?></h2>
<h2>Predikat : <?= $prdikat?></h2>

<?php } ?>
</body>
</html>