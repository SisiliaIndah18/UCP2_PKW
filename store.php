<?php
    include './config.php';

    $id = $_POST['id'];
    $nama_buku = $_POST['nama_buku'];
    $kategori_buku = $_POST['kategori_buku'];
    $penerbit = $_POST['penerbit'];
    $harga = $_POST['harga'];
    $disc = (10/100)*$_POST['harga'];
    $diskon = $_POST['harga'] - $disc;

    mysqli_query($koneksi, "insert into buku values('','$nama_buku','$kategori_buku','$penerbit' ,'$harga','$diskon')");
    header("location:./home.php");
?>