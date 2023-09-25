<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3 array</title>
</head>
<body>
    

<?php 
$m1 = ['nim' => '0111111','nama'=>'Andi Setyo', 'nilai' => 95];
$m2 = ['nim' => '0111112','nama'=>'Freya', 'nilai' => 80];
$m3 = ['nim' => '0111113','nama'=>'Zee', 'nilai' => 85];
$m4 = ['nim' => '0111114','nama'=>'Gita', 'nilai' => 70];
$m5 = ['nim' => '0111115','nama'=>'Flora', 'nilai' => 90];
$m6 = ['nim' => '0111116','nama'=>'Hanan Abdul Ghani', 'nilai' => 60];
$m7 = ['nim' => '0111117','nama'=>'oniel', 'nilai' => 50];
$m8 = ['nim' => '0111118','nama'=>'Gresel', 'nilai' => 70];
$m9 = ['nim' => '0111119','nama'=>'Ratih', 'nilai' => 30];
$m10 = ['nim' => '01111110','nama'=>'Indira', 'nilai' => 65];


$ar_judul = ['No','NIM','Nama Mahasiswa','Nilai','Keterangan','Grade','Predikat'];
$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];

$jumlah = array_column($mahasiswa,'nilai');
$nilai_tertinggi = max($jumlah);
$nilai_terendah = min($jumlah);
$jumlah_nilai = array_sum($jumlah);
$jumlah_mahasiswa = count($jumlah);
$niali_rata = $jumlah_nilai/$jumlah_mahasiswa;

$ket = [
    'Nilai Tertinggi' => $nilai_tertinggi,
    'Nilai Terendah' => $nilai_terendah,
    'Rata rata Nilai' => $niali_rata,
    'Jumlah Mahasisawa' => $jumlah_mahasiswa,
    'Jumlah Keseluruhan Nilai' => $jumlah_nilai

];

?>

    <h3>Daftar nilai Mahasiswa</h3>
    <table border="1" collpadding="10" cellspacing="2" width="100%">
        <thead>
            <tr>
                <?php 
                foreach($ar_judul as$judul){
                    ?>
                    <th><?= $judul?></th>
                <?php }?>
            </tr>
        </thead>
        <tbody>
            <?php $no=1;
            foreach($mahasiswa as $data){
                $keterangan = ($data['nilai']>= 60) ? 'Lulus' : 'Tidak Lulus';
                if($data['nilai'] >= 85 && $data['nilai'] <= 100 ) $grade  = "A";
                else if($data['nilai'] >= 75 && $data['nilai'] <= 84) $grade = "B";
                elseif($data['nilai'] >= 60 && $data['nilai'] <= 74) $grade = "C";
                elseif($data['nilai'] >= 30 && $data['nilai'] <= 59) $grade = "D";
                elseif($data['nilai'] >= 0 && $data['nilai'] <= 29)$grade = "E";
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


              <tr align="center">
                <td><?= $no++?></td>
                <td><?= $data['nim']?></td>
                <td><?= $data['nama']?></td>
                <td><?= $data['nilai']?></td>
                <td><?= $keterangan?></td>
                <td><?= $grade?></td>
                <td><?= $prdikat?></td>
              </tr>
           <?php } ?>
        </tbody>
        <tfoot>
            <?php 
            foreach($ket as $info => $hasil){
                ?>
                <tr>
                    <th colspan = "3"><?= $info?></th>
                    <th colspan = "5"><?= $hasil?></th>
                </tr>
           <?php } ?>
        </tfoot>
    </table>
</body>
</html>