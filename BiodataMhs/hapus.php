<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM Biodata Mahasiswa WHERE id = $id";
$mysqli->query($query);

header("Location: index.php");
?>