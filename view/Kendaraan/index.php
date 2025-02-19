<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="../Parkir/index.php">Parkir</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="">Kendaraan</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


    <div class="container">
      <h1>Data Kendaraan Hamid</h1>
      <a href="view_tambah.php" class="btn btn-primary">Tambah Data Kendaraan Baru</a>
     <table class="table">
            <tr>
            <th scope="col">No kendaraan</th>
            <th scope="col">Nama kendaraan</th>
            <th scope="col">Jenis kendaraan</th>
            <th scope="col">No parkir</th>
            <th>Aksi</th>
            </tr>
    <tbody>
         <?php
             include "../../config/koneksi.php";
              $query = mysqli_query($conn, "SELECT * FROM kendaraan");
              $no = 1;
              if(mysqli_num_rows($query)){
                  echo "Data kendaraan ditemukan";
                  while($result = mysqli_fetch_assoc($query)){
              ?>
              <tr>
                  <td><?php echo $result['No_kendaraan'] ?></td>
                  <td><?php echo $result['Nama_kendaraan'] ?></td>
                  <td><?php echo $result['Jenis_kendaraan'] ?></td>
                  <td><?php echo $result['No_parkir'] ?></td>
                  <td>
                      <a href='view.edit.php' class="btn btn-warning">Edit</a>
                      <a href='hapus.php'No_parkir=<?php echo $result['No_parkir']?>
                      onclick="return confirm('bener nih?')" class="btn btn-danger">Hapus</a>
                  </td>
              </tr>
              <?php
                  $no++;
                  }
              } else {
                  echo "Data kendaraan tidak ditemukan";
              } 
        ?>
                        
            
        </tr>
    </tbody>
    </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>