<?php
require_once("../inc/config.php");

$query = "SELECT * FROM mahasiswa";
$do = $connect->prepare($query);
$do->execute();

$data = $do->fetchAll();
$count = count($data);

$result = "";

if($count == 0){
    $result .= "<tr><td colspan='5' align='center'>Data Empty</td></tr>";
} else{

    foreach($data as $row){
        $id = $row['id'];
        $result .= "<tr><td>".$row['nama']."</td><td>".$row['nim']."</td><td>".$row['prodi']."</td><td>".$row['angkatan']."</td><td><button type='button' class='btn btn-outline-danger' onclick='deletedata(".$id.");'>Delete</button><button type='button' class='btn btn-outline-primary' data-bs-toggle='modal' data-bs-target='#editModal' onclick='editdata(".$id.");'>Edit</button></td></tr>";
    }
    
}


echo $result;
?>