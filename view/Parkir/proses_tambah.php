<?php


$No_parkir = $_POST['No_parkir'];
$luas_parkir = $_POST['luas_parkir'];
$luas_parkir = $_POST['lokasi_parkir'];



include '../../config/koneksi.php';

$query = mysqli_query($conn, "INSERT INTO tempat_parkir VALUES(
    '$No_parkir',
    '$luas_parkir',
    '$luas_parkir')");

// Javascript

if($query) {
    echo "<script>alert('Data berhasil disimpan')</script>";
    echo "<script>window.location.href='index.php'</script>";
} else {
    echo "<script>alert('Data gagal disimpan')</script>";
    echo "<script>window.location.href='view_tambah.php'</script>";
}
?>