<?php
include "../connection.php";
header("content-type:application/json");

$email = $_GET["email"];
$datauser = array();

$getuserstatus = 0;

$query = "SELECT * FROM tbl_pelanggan WHERE email='" . $email . "'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_object($result);

if (!$data) {
  $getuserstatus = 0;
} else {
  $getuserstatus = 1;
  $datauser = array(
    'nama' => $data->nama,
    'alamat' => $data->alamat,
    'kota' => $data->kota,
    'provinsi' => $data->provinsi,
    'kodepos' => $data->kodepos,
    'telp' => $data->telp,
    'email' => $data->email
  );
}

echo json_encode(array('result' => $getuserstatus, 'data' => $datauser));
