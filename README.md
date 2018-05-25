# Dynamic<?php
$link = mysqli_connect("localhost", "stellaaquino", "stpa","menagerie");
require("secondhomepage.html");

$query= ("UPDATE pet SET sex = \"m\" WHERE name = \"Whistler\"");

mysqli_query($link, $query);
?>
<?php
$link = mysqli_connect("localhost", "stellaaquino", "stpa","menagerie");
require("secondhomepage.html");
 $query = ("SELECT * FROM pet");
 $result = mysqli_query($link, $query);
 $num_rows=mysqli_num_rows($result);


print "<br>There are $num_rows records.";
print "<table border=\"1\">\n";
while ( $a_row = mysqli_fetch_row ($result) ) {
print "<tr>\n";
foreach ( $a_row as $field) {
print "\t<td>".$field."</td>\n";
}
print"</tr>\n";
}
print"</table>\n";

?>

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
<?php
$link = mysqli_connect("localhost", "stellaaquino", "stpa","menagerie");
require("secondhomepage.html");

$query= ("UPDATE pet SET sex = \"m\" WHERE name = \"Whistler\"");

mysqli_query($link, $query);
?>
<?php
$link = mysqli_connect("localhost", "stellaaquino", "stpa","menagerie");
 $query = ("SELECT * FROM pet");
 $result = mysqli_query($link, $query);
 $num_rows=mysqli_num_rows($result);


print "<br>There are $num_rows records.";
print "<table border=\"1\">\n";
while ( $a_row = mysqli_fetch_row ($result) ) {
print "<tr>\n";
foreach ( $a_row as $field) {
print "\t<td>".$field."</td>\n";
}
print"</tr>\n";
}
print"</table>\n";

?>


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

$query = ("INSERT INTO pet (name, owner, species, sex, birth, death) VALUES ('$name', '$owner', '$species', '$sex', '$birth', '$death')");

mysqli_query ( $link, $query );
?>
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
<html>
<?php
require("secondhomepage.html");
?>
<form method="POST" action="../delete2.php">
<p class="intro">DELETE: Enter pet's name to delete: <input type="text" name="name"></p>
<br>
<input type="submit" value="Send">
<input type="reset" value="Clear">
</form>
</html>
<html>
<?php
require("secondhomepage.html");
?>
<form method="POST" action="../search2.php">
<p class="intro">SEARCH: Enter name of pet to search: <input type="text" name="name"></p>
<br>
<input type="submit" value="Send">
<input type="reset" value="Clear">
</form>
</html>
/*ella's css*/
body {
	 height: auto;
	 background: linear-gradient(to bottom, #000066 0%, #669999 86%)
}
a:hover {
    color: cyan;
}

h1.intro {
    font-weight: bold;
    font-family: arial;
    text-shadow: 3px 2px cyan;
    letter-spacing: 3px;
 }
p.intro {
	font-weight: bold;
    font-family: arial;
    word-spacing: 1cm;
    letter-spacing: 2px;
}
p.aboutus {
	font-weight: bold;
    font-family: arial;
    word-spacing: 1cm;
    letter-spacing: 2px;
    color:cyan;
}

div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
   }
div.parag{
	margin-top: 10px;
    margin-bottom: 100px;
    margin-right: 400px;
    margin-left: 20px;
}

<html>
<head>
<style>
img {
    float: left;
}
</style>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
<p class="intro">
<a href="homepage.html">Home</a>
<a href="aboutus.html">About Us</a>
<a href="login.html">Log-in </a>
</p>
<hr>
<h1 class="intro">Ella's Blog</h1>
<div class="parag">
<p class="aboutus">ABOUT US<p>
<p><img src="dog3.jpg" style="width:170px;height:170px;margin-left:15px;">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel purus hendrerit, fermentum odio sed, scelerisque lorem. Fusce et magna rutrum orci laoreet volutpat eget non erat. Quisque nec mollis nulla, rutrum sagittis nunc. Mauris scelerisque, diam vel convallis vestibulum, tortor tortor aliquam dolor, non tempor tellus tortor a massa. Donec nec neque vulputate, efficitur ante ac, tristique libero. Integer ullamcorper malesuada tellus eu tincidunt. Curabitur rhoncus sem enim, et vestibulum diam rhoncus eget. Donec at nisl lacus. Nam nunc neque, commodo euismod egestas eget, auctor id neque. Maecenas scelerisque lectus vitae nulla porta, sit amet pharetra ante sollicitudin. Nulla cursus eros eget fermentum pellentesque. Curabitur a condimentum ligula. Donec et elementum orci, id ullamcorper dui. Sed bibendum quis enim id molestie. Ut finibus quam ac lacus luctus, ut ornare orci pretium. Quisque vel scelerisque metus, vel laoreet mauris. Mauris iaculis metus quis tortor malesuada condimentum. Sed et orci mattis, sollicitudin risus ac, gravida augue. Suspendisse sit amet porta magna, ut feugiat odio. Praesent sit amet augue augue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam tempor tincidunt orci, in posuere arcu tincidunt ac. Integer nec sem lectus. Nulla hendrerit metus at scelerisque viverra. Nunc imperdiet sapien lectus, eu venenatis lacus consequat eu. Proin ut dapibus mauris. Etiam pellentesque, mauris eget ullamcorper dictum, sapien erat placerat ipsum, in dictum erat nisl quis quam. Donec tempor semper massa.
	</p>
</div>


</body>
</html>
<html>
<body>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
<p class="intro">
<a href="homepage.html">Home</a>
<a href="aboutus.html">About Us</a>
<a href="login.html">Log-in </a>
</p>
<hr>
<h1 class="intro">Ella's Blog</h1>
<p class="intro">Cutie Gallery</p>

<div class="gallery">
    <img src="rabbit1.jpg"  width="300" height="200">

  <div class="desc">Add a description of the image here</div>
</div>
<div class="gallery">
    <img src="bird2.jpg" width="350" height="300">
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
    <img src="dog2.jpg"  width="300" height="200">

  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
    <img src="bird1.jpg" width="400" height="200">
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
    <img src="cat1.jpg" width="600" height="400">
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
    <img src="dog1.jpg" width="300" height="200">
  <div class="desc">Add a description of the image here</div>
</div>


</html>
<html>
<body>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
<p class="intro">
<a href="retrieve.php">Retrieve Pet</a>
<a href="insert.php">Add Pet</a>
<a href="update.php">Update Pet</a>
<a href="delete.php">Delete Pet</a>
<a href="search.php">Search</a>
<a href="homepage.html">Log-out</a>
</p>
<hr>
<h1 class="intro">Ella's Blog</h1>
</body>
</body>
</html>
<html>
<?php
require("secondhomepage.html");
?>
<form method="POST" action="insert2.php">
<p class="intro">Enter updated information of the pet:</p><br>
<p class="intro">
	Name<input type="text" name="name">
</p>
<br>
<p class="intro">
Owner<input type="text" name="owner">
</p>
<br>
<p class="intro">
Species<input type="text" name="species">
</p>
<br>
<p class="intro">
Male<input type="radio" name="sex" value="male">
Female<input type="radio" name="sex" value="female">
</p>
<br>
<p class="intro">
Birth<input type="date" name="birth">
</p>
<br>
<p class="intro">
Death<input type="date" name="death">
</p>
<br>
<br>
<p class="intro">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</p>
</form>
</html>
<html>
<?php
require("secondhomepage.html");
?>
<form method="POST" action="insert2.php">
<p class="intro">
	Name: <input type="text" name="name">
</p>
<br>
<p class="intro">
	Owner: <input type="text" name="owner">
</p>
<br>
<p class="intro">
	Species: <input type="text" name="species">
</p>
<br>
<p class="intro">
	Female: <input type="radio" name="sex">
	Male: <input type="radio" name="sex">
</p>
<br>
<p class="intro">
	Birth: <input type="date" name="birth">
</p>
<br>
<p class="intro">
	Death: <input type="date" name="death">
</p>
<br>
<p class="intro">
<input type="submit" value="Submit">

<input type="reset" value="Reset">
</p>
<br>
</form>
</html>



<html>
<head>
    <style>
    body {
    font-family: Arial;
}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: blue;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
button:hover {
    opacity: 0.8;
}
.container {
    padding: 16px;
}  
    </style>
    
</head>
<body>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<p class="intro">
<a href="homepage.html">Home</a>
<a href="aboutus.html">About Us</a>
<a href="login.html">Log-in </a>
</p>
<hr>
<h1 class="intro">Ella's Blog</h1>
    <h2>Login Form</h2>
<form method="GET" action="connect2.php">
<p>
  <div class="container">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
   </div>
</form>

</body>
<html>







