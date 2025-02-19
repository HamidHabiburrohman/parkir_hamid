<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    <title>Tambah Pendaftar Baru</title>
</head>
<body>
    <div class="container">
        <h1>Tambah Pendaftar Baru</h1>
        <?php 
            include '../../config/koneksi.php';
            $No_parkir=$_GET['No_parkir'];
            $query=mysqli_query($conn, "SELECT * FROM kendaraan WHERE No_parkir ='No_parkir'");
            $result=mysqli_fetch_array($query);
        ?>
        <form action="proses.edit.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">No_kendaraan</label>
                <input type="text" class="form-control" name="No_kendaraan" value="<?php echo $result['No_kendaraan'] ?>"  id="exampleInputEmail1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nama_kendaraan</label>
                <input type="text" class="form-control" name="Nama_kendaraan" value="<?php echo $result['Nama_kendaraan'] ?>" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Jenis_kendaraan</label>
                <input type="text" class="form-control" name="Jenis_kendaraan" value="<?php echo $result['Jenis_kendaraan'] ?>" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">No_parkir</label>
                <input type="text" class="form-control" name="No_parkir" value="<?php echo $result['No_parkir'] ?>" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
