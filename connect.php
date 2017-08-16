<?php

$connection = mysqli_connect('localhost', 'root', '');
if (!$connection) {
    die('Could not connect: ' . mysql_error());
}
else {
	echo "Connection Successful";
} 

$selectDB = mysqli_select_db($connection, 'Demo');
if(!$selectDB) {
    die('Database Selection Failed: ' . mysql_error());
}

?>
