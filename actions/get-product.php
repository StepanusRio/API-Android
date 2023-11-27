<?php
include "connection.php";
header("content-type:application/json");

$sql = "SELECT * FROM tbl_product";
$query = mysqli_query($conn, $sql);
$result = array();
$no = 0;

while ($data = mysqli_fetch_object($query)) {
  array_push($result, array('kode' => $data->kode, 'merk' => $data->merk, 'kategori' => $data->kategori, 'satuan' => $data->satuan, 'hargabeli' => $data->hargabeli, 'diskonbeli' => $data->diskonbeli, 'hargapokok' => $data->hargapokok, 'hargajual' => $data->hargajual, 'stok' => $data->stok, 'foto' => $data->foto, 'deskripsi' => $data->deskripsi));
}

echo json_encode(array('result' => $result));
