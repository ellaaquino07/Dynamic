<?php
require("secondhomepage.html");
?>
<html>
<form method="POST" action="insert2.php">
<p class="intro">ADD: Add new pet.</p><br>
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
	Female<input type="radio" name="sex" value="female">
	Male<input type="radio" name="sex" value="male">
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
