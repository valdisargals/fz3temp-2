<?php
$mysql_user = 'sunui';
$mysql_password = 'bW3IA749tkEx';
$dbname = "c_sunui_reto";
$mysqli = new mysqli('57.db.sigmanet.lv:3306', $mysql_user, $mysql_password);
if ($mysqli -> connect_errno) {
	echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	exit();
} else {
	//echo "<br />Connected successfully";
}
// Change db
$mysqli -> select_db($dbname);
// Change character set to utf8
$mysqli -> set_charset("utf8");
$vieta = $_POST['d_vieta'];
$sql_dzest = "DELETE FROM aptauja WHERE vieta='$vieta'";
$result_dzest = $mysqli->query($sql_dzest);
?>