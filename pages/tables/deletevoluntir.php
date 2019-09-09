<?php
include('koneksi.php');

$form_data = json_decode(file_get_contents("php://input"));

if($form_data->action == "DeleteTesti")
{
	$query = "
	DELETE FROM voluntir WHERE id='".$form_data->id."'
	";
	$statement = $db->prepare($query);
	if($statement->execute())
	{
		echo "<script>alert('Data Deleted! :)');window.location='basic-table2.php'</script>";
	}
}
?>