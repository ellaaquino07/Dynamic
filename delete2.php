<?php
$servername = "localhost";
$username = "stellaaquino";
$password = "stpa";
$dbname = "menagerie";

$name = $_GET['name'];

$link = mysqli_connect ($servername, $username, $password, $dbname);
require("secondhomepage.html");
$result = mysqli_query($link, "SELECT * FROM pet ORDER BY name DESC");




?>