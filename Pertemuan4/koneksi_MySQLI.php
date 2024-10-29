<?php
$mysqli = new mysqli("localhost", "root", "",
"mencatat_laporan_penjualan");

if ($mysqli->connect_error) {
     die("Koneksi gagal: " . $mysqli->connect_error);
    } else {
    }
?>