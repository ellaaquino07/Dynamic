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
