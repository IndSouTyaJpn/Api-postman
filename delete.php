<?php 

require_once('helper.php');
parse_str(file_get_contents('php://input'), $value);


$id = $value['id'];

$query = "DELETE FROM list WHERE id='$id'";
$sql = mysqli_query($db_connect, $query);

if($sql){
    echo json_encode(array('status' => 'Berhasil Di Hapus!'));
} else {
    echo json_encode(array('status' => 'Gagal Di Hapus!'));
}

?>