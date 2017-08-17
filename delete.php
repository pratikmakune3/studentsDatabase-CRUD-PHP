<?php

include_once "connect.php";

$id = $_GET['id'];

$DeleteSql = "DELETE FROM `CRUD` WHERE ID=$id";
echo $DeleteSql;
$Res = mysqli_query($connection, $DeleteSql);

if($Res) {
	header('location: view.php');
}else {
	echo "Failed to Delete Record";
}

?>