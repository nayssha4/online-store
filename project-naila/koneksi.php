<?php

$koneksi = mysqli_connect("localhost", "root","", "naila");

?>

<?php

$koneksi = mysqli_connect("localhost", "root", "", "naila");

?>

koneksi :

<?php 

$koneksi + mysqli_connect ("localhost", "root", "", "naila");

?>

regis :

<?php 

include 'koneksi.php';

if(isset($_POST)['login']){
    $nama = $_POST['nama'];
    $email = $_POST ['email'];
    $username = $_POST ['username'];
    $password = $_POST ['password'];
    $no_hp = $_POST ['no_hp'];
    $alamat = $_POST ['alamat'];
    $simpan = mysqli_query($koneksi,"INSERT INTO user(nama, email, username, password, no_hp, alamat, role)
    VALUES('$nama', '$email', '$username', '$password', '$no_hp', '$alamat', 'pelanggan')" );
    if($simpan) {
        header ('Location: login.php');
    }
}