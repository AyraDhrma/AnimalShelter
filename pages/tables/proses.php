<?php
include "koneksi.php";

$namapet = $_POST['namepet'];
$breed = $_POST['breed'];
$desk = $_POST['desc'];
$fileName = $_FILES['picture']['name']; //get the file name
$fileSize = $_FILES['picture']['size']; //get the size
$fileError = $_FILES['picture']['error']; //get the error when upload
if($fileSize > 0 || $fileError == 0){ //check if the file is corrupt or error
$move = move_uploaded_file($_FILES['picture']['tmp_name'], 'img/'.$fileName); //save image to the folder
if($move){
echo "<h3>Success! </h3>";

$q = "INSERT into image VALUES('','$fileName','image/$fileName','$namapet','$breed','$desk')"; //insert image property to database
if ($db->query($q) === TRUE) {

    echo "<script>alert('Berhasil Upload');window.location='admin.php'</script>";
} else {
    echo "<script>alert('Gagal Upload');window.location='admin.php'</script>";
}

} else{
echo "<h3>Failed! </h3>";
}
} else {
echo "Failed to Upload : ".$fileError;
}
?>