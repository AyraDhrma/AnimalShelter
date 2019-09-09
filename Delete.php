<?php 

include('koneksi.php');

$id = $_GET['id'];
$q = "DELETE FROM `image` WHERE id='$id'";
if ($db->query($q) === TRUE) {

    echo "<script>alert('Berhasil Hapus');window.location='upload.php'</script>";
} else {
    echo "<script>alert('Gagal Hapus');window.location='upload.php'</script>";
}
?>