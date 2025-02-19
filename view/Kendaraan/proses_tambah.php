<?php


$No_kendaraan = $_POST['No_kendaraan'];
$Nama_kendaraan = $_POST['Nama_kendaraan'];
$Jenis_kendaraan = $_POST['Jenis_kendaraan'];
$No_parkir = $_POST['No_parkir'];


include '../../config/koneksi.php';

$query = mysqli_query($conn, "INSERT INTO Kendaraan VALUES(
    '$No_kendaraan',
    '$Nama_kendaraan',
    '$Jenis_kendaraan',
    '$No_parkir')");

// Javascript

if($query) {
    echo "<script>alert('Data berhasil disimpan')</script>";
    echo "<script>window.location.href='index.php'</script>";
} else {
    echo "<script>alert('Data gagal disimpan')</script>";
    echo "<script>window.location.href='view_tambah.php'</script>";
}
?>