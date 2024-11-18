<?php

require_once('helper.php');

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$kegiatan = isset($_GET['kegiatan']) ? (string)$_GET['kegiatan'] : null;
if ($id > 0) {
    $query = "SELECT * FROM list WHERE id = $id";
} elseif($kegiatan !== null){
    $query = "SELECT * FROM list WHERE kegiatan LIKE '%$kegiatan%'";
} else {
    $query = "SELECT * FROM list ORDER BY id DESC";
}

$sql = mysqli_query($db_connect, $query);

if ($sql) {
    $result = array();
    while ($row = mysqli_fetch_array($sql)) {
        array_push($result, array(
            'id' => $row['id'],
            'kegiatan' => $row['kegiatan'],
        ));
    }
    echo json_encode(array('kegiatan' => $result));
} else {
    echo json_encode(array('message' => 'Terjadi kesalahan saat mengambil data.'));
}
?>
