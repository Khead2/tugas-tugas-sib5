<?php
include_once 'koneksi.php';
include_once 'models/Jenis_produk.php';

//tangkap
$nama = $_POST['nama'];

//simpan didalam data
$data = [
    $nama
];

//eksekusi program
$model = new Jenis_produk();
$tombol = $_REQUEST['proses'];
switch($tombol){
    case 'simpan':$model->simpan($data); break;
    default;
    header('Location:index.php?url=jenis_produk');
}
header('Location:index.php?url=jenis_produk')
?>