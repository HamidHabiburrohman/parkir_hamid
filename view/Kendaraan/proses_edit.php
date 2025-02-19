<?php

$No_parkir = $_GET['No_parkir'];

$No_kendaraan = $_POST['No_kendaraan'];
$Nama_kendaraan = $_POST['Nama_kendaraan'];
$Jenis_kendaraan = $_POST['Jenis_kendaraan'];
$No_parkir = $_POST['No_parkir'];


include '../../config/koneksi.php';

$query = mysqli_query($conn, "UPDATE kendaraan  SET
   No_kendaraan= '$No_kendaraan',
   Nama_kendaraan= '$Nama_kendaraan',
   Jenis_kendaraan= '$Jenis_kendaraan',
   No_parkir= '$No_parkir',

   
    WHERE No_parkir='$No_parkir'");

// Javascript
if($query) {
    echo "<script>alert('Data berhasil dihapus');</script>";
    echo "<script>window.location.href='index.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus');</script>";
    echo "<script>window.location.href='view_tambah.php';</script>";
}
?>