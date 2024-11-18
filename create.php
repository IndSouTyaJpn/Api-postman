<?php 

require_once('helper.php');

$kegiatan = $_POST['kegiatan'];

$query = "INSERT INTO list(kegiatan) VALUES ('$kegiatan')";
$sql = mysqli_query($db_connect, $query);

if($sql){
    echo json_encode(array('status' => 'Berhasil!'));
} else {
    echo json_encode(array('status' => 'Gagal!'));
}

?>