<?php 
include '../koneksi.php';
$id  = $_GET['id'];

mysqli_query($koneksi, "update kategori set kategori='1' where kategori_id='$id'");

mysqli_query($koneksi, "delete from kategori where kategori_id='$id'");
header("location:kategori.php");