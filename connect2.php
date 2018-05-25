<html>
<body>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<?php
require("secondhomepage.html");
$servername = "localhost";
$username = "stellaaquino";
$password = "stpa";
$dbname = "menagerie";

$link = mysqli_connect("localhost","stellaaquino", "stpa", "menagerie");

if ($link){
echo "<h2>Welcome to Ella's Blog </h2>";
}
else {
print "Couldn't connect to MySQL server.";
}
?>
</body>
</html>