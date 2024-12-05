<?php
session_start();

// Cek apakah $_SESSION['keranjang'] sudah didefinisikan
if (!isset($_SESSION['keranjang']) || !is_array($_SESSION['keranjang'])) {
    $_SESSION['keranjang'] = array(); // Inisialisasi dengan array kosong jika belum ada
}

$koneksi = new mysqli("localhost", "root", "", "naila");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>Keranjang Belanja</title>
<!-- Favicon-->
<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
<!-- Bootstrap icons-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="s…
[14.31, 4/9/2024] taratakdung: <?php
session_start(); // Pastikan session_start() dipanggil di awal

// Cek apakah parameter 'id' ada dalam query string
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Cek apakah $_SESSION['keranjang'] ada, jika tidak, inisialisasi dengan array kosong
    if (!isset($_SESSION['keranjang'])) {
        $_SESSION['keranjang'] = array();
    }

    // Periksa apakah item sudah ada dalam keranjang
    if (isset($_SESSION['keranjang'][$id])) {
        $_SESSION['keranjang'][$id] += 1; // Tambah jumlah jika sudah ada
    } else {
        $_SESSION['keranjang'][$id] = 1; // Tambah item baru jika belum ada
    }
    
    // Alihkan ke halaman keranjang setelah menambahkan produk
    header('Location: keranjang.php');
    exit(); // Hentikan eksekusi skrip setelah redirect
} else {
    // Jika parameter 'id' tidak ada dalam query string, tampilkan pesan error atau redirect ke halaman lain
    echo "Produk ID tidak valid.";
}
?>