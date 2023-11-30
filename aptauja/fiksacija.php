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

$now = date('d.m H:i:s');
$vert1 = $_POST['d_vert1']; 
$vert2 = $_POST['d_vert2']; 
$vert3 = $_POST['d_vert3']; 
$vert4 = $_POST['d_vert4']; 
$vieta = $_POST['d_vieta']; 
$adrese = $_POST['d_adrese']; 
$sql = "INSERT INTO aptauja
(vieta, atb_1, atb_2, atb_3, atb_4, moment, ip_adrese)
VALUES ('$vieta', '$vert1','$vert2','$vert3','$vert4', '$now', '$adrese');";
$result = $mysqli->query($sql);
?>