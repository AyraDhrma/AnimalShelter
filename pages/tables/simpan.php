<?php

include("koneksi.php");
$nama_orang = $_POST['nama'];
$email = $_POST['email'];
$telpon = $_POST['telp'];

$sql = "INSERT INTO voluntir (nama, email, telpon)
VALUES ('$nama_orang', '$email', '$telpon')";

if ($db->query($sql) === TRUE) {
    echo "<script>alert('Berhasil Mendaftar');window.location='voluntir.php'</script>";
} else {
    echo "<script>alert('Gagal Mendaftar');window.location='volunteer.php'</script>";
}
?>