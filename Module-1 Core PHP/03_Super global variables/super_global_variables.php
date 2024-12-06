
<form method="post" action="">
	Name: <input type="text" name="name">
	Email: <input type="email" name="email">
	<input type="submit" value="Submit" style="margin-left: 5px;">
</form>
	
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	echo "Name: " . $_POST['name'] . "<br>";
	echo "Email: " . $_POST['email'];
	}
?>
