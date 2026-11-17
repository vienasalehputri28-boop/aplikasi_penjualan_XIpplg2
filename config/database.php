<?php
// config/database.php

$host = 'localhost';
$user = 'root';                 
$pass = '';
$db = 'penjualan';

//inisialisasi koneksi dengan MySQLi secara object oriented
$koneksi = new mysql($host, $user, $pass, $db);
?>