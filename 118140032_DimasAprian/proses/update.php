<?php
require_once("../inc/config.php");

$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$prodi = $_POST['prodi'];
$angkatan = $_POST['angkatan'];

$query = "UPDATE mahasiswa SET nama = '".$nama."', nim = '".$nim."', prodi = '".$prodi."', angkatan = '".$angkatan."' WHERE id = '".$id."'";

$do = $connect->prepare($query);
$do->execute();



?>