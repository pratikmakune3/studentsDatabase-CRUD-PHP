<?php
 
 include_once "connect.php";
 
 if($_POST){
 	$name = $_POST['name'];
 	$age = $_POST['age'];
 	$email = $_POST['email'];

 	$CreateSql = "INSERT INTO `CRUD` (NAME, AGE, EMAIL) VALUES ('$name', '$age', '$email')";
 	$res = mysqli_query($connection, $CreateSql);
 	if($res) {
	 	echo "Successfully Inserted Data";
	 }
	 else {
	 	echo "Failed Data Insertion";
	 }
}
 

?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<form method="POST">
	  Name:<br>
	  <input type="text" name="name"><br>
	  Age:<br>
	  <input type="text" name="age">
	  E-mail:<br>
	  <input type="text" name="email"><br>
	  <input type="submit" value="Submit">
	</form>
</body>
</html>

