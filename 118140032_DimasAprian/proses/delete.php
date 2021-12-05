<?php
require_once("../inc/config.php");
$id = $_POST['id'];
$query = "DELETE FROM mahasiswa WHERE id = '".$id."'";
$do = $connect->prepare($query);
$do->execute();
?>