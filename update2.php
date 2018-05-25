<?php
$link = mysqli_connect("localhost", "stellaaquino", "stpa","menagerie");
require("secondhomepage.html");

$query= ("UPDATE pet SET sex = \"m\" WHERE name = \"Whistler\"");

mysqli_query($link, $query);
?>