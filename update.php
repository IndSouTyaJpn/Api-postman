<?php 

require_once('helper.php');
parse_str(file_get_contents('php://input'), $value);


$id = $value['id'];
$kegiatan = $value['kegiatan'];

$query = "UPDATE list SET kegiatan='$kegiatan' WHERE id='$id'";
$sql = mysqli_query($db_connect, $query);

if($sql){
    echo json_encode(array('status' => 'Berhasil Di Update!'));
} else {
    echo json_encode(array('status' => 'Gagal Di Update!'));
}

?>