<?php
require("secondhomepage.html");

$link = mysqli_connect("localhost", "stellaaquino", "stpa","menagerie");

$name = $_POST ['name'];
$query=("SELECT * FROM pet WHERE name = \"$name\"");

$result = mysqli_query($link, $query);

$num_rows = mysqli_num_rows ( $result );

print "<br> There are $num_rows records.";

print"<table border=\"1\">\n";
while ( $a_row = mysqli_fetch_row( $result ) ) {
print "<tr>\n";
foreach ( $a_row as $field ) {
print "\t<td>".$field."</td>\n";
}

print "</tr>\n";
}
print "</table>\n";

?>