<?php

$no_plat = $_POST['no_plat'];
$id_tempat = $_POST['id_tempat'];
$waktu_masuk = $_POST['waktu_masuk'];
$jenis_kendaraan = $_POST['jenis_kendraan'];
$nama_pemilik = $_POST['nama_pemilik'];
$waktu_keluar = $_POST['waktu_keluar'];

include '../../config/koneksi.php';

$query = mysqli_query($conn,"INSERT INTO kendaraan
VALUES ('$no_plat','$id_tempat','$waktu_masuk','$jenis_kendaraan','$nama_pemilik','$waktu_keluar')");

if($query){
    echo "<script>alert('tambah berhasil')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alert('tambah gagal')</script>";
    echo "<script>window.location.href='tambah.php'</script>";
}

