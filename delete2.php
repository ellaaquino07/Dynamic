<?php
$servername = "localhost";
$username = "stellaaquino";
$password = "stpa";
$dbname = "menagerie";

$link = mysqli_connect ("localhost", "stellaaquino", "stpa", "menagerie");
require("secondhomepage.html");

$query="DELETE FROM pet WHERE name='$name';

print ".$name. "has been successfully deleted";
mysqli_query ( $link, $query );

?>