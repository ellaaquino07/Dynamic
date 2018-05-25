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
	$owner = mysqli_real_escape_string($link, $_GET['owner']);
	$species = mysqli_real_escape_string($link, $_GET['species']);
	$sex = mysqli_real_escape_string($link, $_GET['sex']);
	$birth = mysqli_real_escape_string($link, $_GET['birth']);
	$death = mysqli_real_escape_string($link, $_GET['death']);
	$result = mysqli_query($link, "UPDATE pet SET name=$name, owner=$owner, species=$species, sex=$sex, birth=$birth, death=$death WHERE name=$id ");
	echo "Data updated successfully.";
}
else{
	
	echo "Data not updated.";
}






?>