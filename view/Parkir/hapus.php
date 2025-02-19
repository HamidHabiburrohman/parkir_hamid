<?php

$No_parkir=$_GET['No_parkir'];

include '../Parkir/index.php';

$query = mysqli_query($conn, "DELETE FROM parkir WHERE id = '$No_parkir'");

if($query){
    echo "<script>alert('Data berhasil dihapus')</script>";
    echo "<script>window.location.href='index.php'</script>";
} else {
    echo "<script>alert('Data gagal dihapus')</script>";
    echo "<script>window.location.href='view_tambah.php'</script>";
}
?>