<?php 
$a1 = ['kode' => '0011','buah'=>'Apel','harga' => 25000, 'jumlah' => 5];
$a2 = ['kode' => '0012','buah'=>'Mangga','harga' => 26000, 'jumlah' => 6];
$a3 = ['kode' => '0013','buah'=>'Pisang','harga' => 27000, 'jumlah' => 7];
$a4 = ['kode' => '0014','buah'=>'Jambu','harga' => 35000, 'jumlah' => 8];
$a5 = ['kode' => '0015','buah'=>'Durian','harga' => 45000, 'jumlah' => 8];
$a6 = ['kode' => '0016','buah'=>'Salak','harga' => 55000, 'jumlah' => 9];
$a7 = ['kode' => '0017','buah'=>'Nanas','harga' => 65000, 'jumlah' => 10];

$ar_buah = [$a1,$a2,$a3,$a3,$a4,$a5,$a6,$a7];

$ar_judul = ['No', 'Kode', 'Buah','Harga','Jumlah', 'Harga kotor','Diskon','Harga Bayar'];

$jumlah_transaksi = count($ar_buah);
$jumlah_harga = array_column($ar_buah,'harga');
$harga_total = array_sum($jumlah_harga);
$har_tertinggi = max($jumlah_harga);
$harga_terendah = min($jumlah_harga);
$harga_rata_rata = $harga_total/$jumlah_transaksi;
$keterangan = [
    'Harga Total ' => $harga_total,
    'Harga tertinggi ' =>$har_tertinggi,
    'Harga terendah ' => $harga_terendah,
    'Harga Rata rata ' => $harga_rata_rata,
    'Jumlag Buah' => $jumlah_transaksi,
]

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menggunakan Array looping</title>
</head>
<body>
    <h1 align="center">Daftar Buah-buahan</h1>
    <table border="1" cellpadding ="10" cellspacing ="2" width ="100%">
        <thead>
            <tr>
                <?php $no =1;
                foreach($ar_judul as $judul){
                    

                    ?>
                    <th><?= $judul?></th>
                <?php }?>
            </tr>
        </thead>
        <tbody>
            <?php $no=1;
            foreach ($ar_buah as $buah){
                $burto = $buah['harga'] * $buah['jumlah'];
                $diskon = ($buah['buah'] == 'Jambu' && $buah['jumlah'] >= 4) ? 0.2 : 0.1;
                $harga_diskon = $diskon * $burto;
                $harga_bayar = $burto - $harga_diskon;
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $buah ['kode']?></td>
                    <td><?= $buah ['buah']?></td>
                    <td><?= $buah ['harga']?></td>
                    <td><?= $buah ['jumlah']?></td>
                    <td><?= $burto?></td>
                    <td><?= $harga_diskon?></td>
                    <td align="center">Rp. <?= number_format($harga_bayar,0,',','.')?></td>
                </tr>
            <?php } ?>
            
        </tbody>
        <tfoot>
            <?php 
            foreach($keterangan as $ket => $hasil){
            
                ?>
                <tr>
                    <th colspan="3"><?=$ket?></th>
                    <th colspan = "5"><?= $hasil?></th>
                </tr>
            <?php } ?>
        </tfoot>
    </table>
</body>
</html>