<?php
require_once("../inc/config.php");

$id = $_POST['id'];
$query = "SELECT * FROM mahasiswa WHERE id = '".$id."'";

$do = $connect->prepare($query);
$do->execute();
$data = $do->fetchAll();

foreach ($data as $row){
    $result['id'] = $row['id'];
    $result['nama'] = $row['nama'];
    $result['nim'] = $row['nim'];
    $result['prodi'] = $row['prodi'];
    $result['angkatan'] = $row['angkatan'];
}

echo json_encode($result);

?>