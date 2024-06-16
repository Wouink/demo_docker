<?php
$mysqli = new mysqli("database", "root", "12security34", "demo");
$result = $mysqli->query("select * from users");

while($row = $result->fetch_assoc()) {
	echo "<p>".$row['login']." : ".$row['pass']."</p>";
}
?>

