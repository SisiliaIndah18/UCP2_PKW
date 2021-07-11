<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
    <title>Data Buku</title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Data Buku</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                <a class="nav-link" href="logout.php">Logout</a>
            </div>
            </div>
        </div>
    </nav>

    <?php
    include 'config.php';
    $id = $_GET['id'];
    $buku = mysqli_query($koneksi, "select * from buku where id='$id'");
    while ($data = mysqli_fetch_assoc($buku)){
    ?>
        <div class="container mt-5">
            <p><a href="index.php">Home</a> / Detail Buku / <? php echo $data['nama_buku']?></p>
            <div class="card">
                <div class="card-header">
                    <p class="fw-bold">Detail Buku</p>
                </div>
                <div class="card-body fw-bold">
                    <form method="post" action="update.php">
                        <div class="mb-3">
                        <input type="hidden" class="form-control" name="id" value="<?php echo $data['id']; ?>">
                        </div>

                        <div class="mb-3">
                        <label for="nama_buku" class="form-label">Nama Buku</label>
                        <input type="text" class="form-control" id="nama_buku" placeholder="Masukkan Nama Buku" name="nama_buku" value="<?php echo $data['nama_buku']; ?>">
                        </div>

                        <div class="mb-3">
                        <label for="kategori_buku" class="form-label">Kategori Buku</label>
                        <input type="text" class="form-control" id="kategori_buku" placeholder="Masukkan Kategori Buku" name="kategori_buku" value="<?php echo $data['kategori_buku']; ?>">
                        </div>

                        <div class="mb-3">
                        <label for="penerbit" class="form-label">Penerbit</label>
                        <input type="text" class="form-control" id="penerbit" placeholder="Masukkan Penerbit Buku" name="penerbit" value="<?php echo $data['penerbit']; ?>">
                        </div>

                        <div class="mb-3">
                        <label for="harga" class="form-label">Harga Buku</label>
                        <input type="text" class="form-control" id="harga" placeholder="Masukkan Harga Buku" name="harga" value="<?php echo $data['harga']; ?>">
                        </div>

                        <button type="submite" class="btn btn-primary" value="SIMPAN">Update</button>
                    </form>
                </div>
            </div>
        </div>
    <?php    
    }
    ?>
    <div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </div>
  </body>
  </html>