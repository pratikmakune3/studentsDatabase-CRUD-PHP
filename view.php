<?php
include_once "connect.php";

$ReadSql = "SELECT * FROM `CRUD`";
$result = mysqli_query($connection, $ReadSql)
// mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD Application</title>
</head>
<body>
<table>
  <tr>
    <th>Name</th>
    <th>Age</th> 
    <th>E-Mail</th>
  </tr>
  <?php
  	if ($result = mysqli_query($connection, $ReadSql)) { 
	    /* fetch associative array */
	    while ($row = mysqli_fetch_assoc($result)) { ?>
		  <tr>
		    <td><?php echo $row['id'] ?></td>
		    <td><?php echo $row['name'] ?></td>
		    <td><?php echo $row['age'] ?></td>
		    <td><?php echo $row['email'] ?></td>
		    <td><a href="#">Edit</a> <a href="#">Delete</a></td>
		  </tr>
	    <?php }
	    /* free result set */
	    mysqli_free_result($result);
  	} ?>
</table>

</body>
</html>