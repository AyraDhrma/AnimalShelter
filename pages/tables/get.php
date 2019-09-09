<?php
include "koneksi.php";
$query="SELECT * FROM voluntir";
$rs=$db->query($query);
while($row=$rs->fetch_assoc()) {
                $data[]=$row;
}
print json_encode($data);
?>