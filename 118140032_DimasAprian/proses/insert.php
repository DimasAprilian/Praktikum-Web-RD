<?php
require_once("../inc/config.php");

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$prodi = $_POST['prodi'];
$angkatan = $_POST['angkatan'];

$query = "INSERT INTO mahasiswa (nama, nim, prodi, angkatan) VALUES ('$nama', '$nim', '$prodi', '$angkatan')";
$do = $connect->prepare($query);
$do->execute();

?>