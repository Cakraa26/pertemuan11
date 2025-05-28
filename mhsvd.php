<?php
global $koneksi;
include_once('konfigurasi.php');

$sql = "SELECT nim, nama, alamat, tgl_lahir, jeniskel FROM mhs";
$ps = mysqli_query($koneksi, $sql);
while ($res = mysqli_fetch_assoc($ps)) {
    $h[] = array(
        "NIM" => $res["nim"],
        "Nama" => $res["nama"],
        "Alamat" => $res["alamat"],
        "Tanggal Lahir" => $res["tgl_lahir"],
        "Jenis Kelamin" => $res["jeniskel"],
    );
}
header("Content-type: application/json");
echo json_encode($h);
?>