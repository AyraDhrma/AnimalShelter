<?php 
include('koneksipdo.php');

$q = "SELECT * FROM voluntir ORDER BY id";
$st = $db->prepare($q);
if ($st->execute()) {
	# code...
	while ($row = $st->fetch(PDO::FETCH_ASSOC)) {
		# code...
		$data[] = $row;
	}
}
echo json_encode($data);
echo "<script>window.location='basic-table2.php'</script>";
 ?>