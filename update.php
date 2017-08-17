<?php
 
 include_once "connect.php";

 $id = $_GET['id'];

 $SelectSql = "SELECT * FROM `CRUD` WHERE ID=$id";
 $sqlRes = mysqli_query($connection, $SelectSql);
 $r = mysqli_fetch_assoc($sqlRes);

 $name = $r['name'];
 $age = $r['age'];
 $email = $r['email'];

 if( !empty($_POST) ) {
	 $name = $_POST['name'];
	 $age = $_POST['age'];
	 $email = $_POST['email'];

	 $UpdateSql = "UPDATE `CRUD` SET NAME='$name', AGE='$age', EMAIL='$email' WHERE ID='$id'";
	 $updateRes = mysqli_query($connection, $UpdateSql);
	 
	 if($updateRes) {
	 	echo "Successfully Updated Data";
	 }
	 else {
	 	echo "Failed Updating Data";
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
	  <input type="text" name="name" value=<?php echo $name ?> > <br>
	  Age:<br>
	  <input type="text" name="age" value=<?php echo $age ?>>
	  E-mail:<br>
	  <input type="text" name="email" value=<?php echo $email ?> > <br>
	  <input type="submit" value="Submit">
	</form>
</body>
</html>

