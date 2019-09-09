<?php
include('koneksi.php');

$query = "SELECT * FROM voluntir ORDER BY id";
$statement = $db->prepare($query);
if($statement->execute())
{
	while($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		$data[] = $row;
	}

	echo json_encode($data);
}
?>