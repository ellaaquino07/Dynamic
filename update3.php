<?php
require("secondhomepage.html");

$name = $_POST['name'];
$owner = $_POST['owner'];
$species = $_POST['species'];
$sex = $_POST['sex'];
$birth = $_POST['birth'];
$death = $_POST['death'];

//Insert record
$query=("UPDATE pet SET (owner='$owner' OR species='$species' OR sex='$sex' OR birth='$birth' OR death='$death') WHERE name='$name'");

print "Information has been updated successfully.<br>";
mysqli_query($link,$query);
?>