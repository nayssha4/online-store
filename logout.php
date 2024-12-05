<?php
session_start();
session_destroy();
header('location:login.php');//kembali ke halaman login
exit();
?>