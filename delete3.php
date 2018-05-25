<?php
require("secondhomepage.html");
$servername = "localhost";
$username = "stellaaquino";
$password = "stpa";
$dbname = "menagerie";



$link = mysqli_connect ($servername, $username, $password, $dbname);

$id = $_GET['name'];
if(isset($_GET['Send'])){
	$name = mysqli_real_escape_string($link, $_GET['name']);
	$result = mysqli_query($link, "DELETE FROM pet WHERE name='$id'");
	echo "Data deleted successfully.";
}
else{
	
	echo "Data not deleted.";
}

?>