<?php
$servername = "localhost";
$username = "stellaaquino";
$password = "stpa";
$dbname = "menagerie";

$link = mysqli_connect ("localhost", "stellaaquino", "stpa", "menagerie");

require("secondhomepage.html");

$name = $_POST ['name'];
$owner = $_POST ['owner'];
$species = $_POST ['species'];
$sex = $_POST ['sex'];
$birth = $_POST ['birth'];
$death = $_POST ['death'];

print $name;
print $owner;
print $species;
print $sex;
print $birth;
print $death;

$query = ("UPDATE INTO pet (name, owner, species, sex, birth, death) VALUES ('$name', '$owner', '$species', '$sex', '$birth', '$death')");

mysqli_query ( $link, $query );
?>
