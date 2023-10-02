<?php
require_once 'Lingkaran.php';
require_once 'persegiPanjang.php';
require_once 'Segitiga.php';
$ar_judul = ['No','Nama Bidang','keterangan','Luas Bidang','keliling Bidang'];

$l1 = new Lingkaran(9);
$pp = new PersegiPanjang(5,2);
$s = new Segitiga(6,12);

$d1 =['nama' => $l1 -> namaBidang(), 'keterangan' => 'jari jari = '.$l1 -> jari2, 'luas' => $l1->luasBidang(), 'kel' => $l1 -> kelilingBidang()];
$d2 =['nama' => $pp -> namaBidang(), 'keterangan' => 'Panjang = '.$pp -> panjang.', Lebar = '.$pp -> lebar, 'luas' => $pp->luasBidang(), 'kel' => $pp -> kelilingBidang()];
$d3 =['nama' => $s -> namaBidang(), 'keterangan' => 'Alas = '.$s -> alas.', Tinggi = '.$s -> tinggi, 'luas' => $s->luasBidang(), 'kel' => $s -> kelilingBidang()];

$ar_data = [$d1, $d2, $d3];
?>
<table border ="1" cellpadding ="10" cellspacing ="2" width ="100%" style = "border-collapse: collapse">
    <thead>
        <tr>
            <?php 
            foreach ($ar_judul as $j){

            ?>
            <th><?= $j?></th>
            <?php } ?>
        </tr>
    </thead>
    <tbody>
        <?php
        $no=1;
        foreach ($ar_data as $data){

            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $data ['nama']?></td>
                <td><?= $data ['keterangan']?></td>
                <td><?= $data ['luas']?></td>
                <td><?= $data ['kel']?></td>
            </tr>
        <?php }
        ?>

    </tbody>
</table>
