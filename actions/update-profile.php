<?php
include "../connection.php";
header("content-type:application/json");

$email = $_POST["email"];
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$kota = $_POST["kota"];
$provinsi = $_POST["provinsi"];
$telp = $_POST["telp"];
$kodepos = $_POST["kodepos"];

$getresult = 0;
$message = "";

$query = "UPDATE tbl_pelanggan SET nama='" . $nama . "',alamat='" . $alamat . "',kota='" . $kota . "',provinsi='" . $provinsi . "',telp='" . $telp . "',kodepos='" . $kodepos . "' WHERE email='" . $email . "'";

$hasil = mysqli_query($conn, $query);
if ($hasil) {
  $getresult = 1;
  $message = "Update data berhasil";
} else {
  $getresult = 0;
  $message = "Update data gagal";
}

echo json_encode(array("result" => $getresult, "message" => $message));
