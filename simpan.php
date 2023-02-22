<?php
include "koneksi.php";

$NIK = $_POST['NIK'];
$NISN = $_POST['NISN'];
$NPSN = $_POST['NPSN'];
$EMAIL = $_POST['EMAIL'];

$simpan = "INSERT INTO formulir(NIK, NISN, NPSN, EMAIL) VALUES ('$NIK', '$NISN', '$NPSN', '$EMAIL')";

$proses = mysqli_query ($conn, $simpan);
if($proses) {
    echo "BERHASIL";
}else {
    echo "Input data gagal";
}
?>
