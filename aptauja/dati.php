<html>
<head>
<title>Rezultāti</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<script src='http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.js'></script>
<style>
.punkti {
	border: 3px solid silver;
	position: relative;
	width: 300px;
	margin: 30px auto;
	padding: 1px 10px 6px 10px;
	border-radius: 7px;
}

.dati {
	border: 3px solid silver;
	height: 200px;
	overflow-y: auto;
	width: 235px;
	position: relative;
	margin: 15px auto 2px auto;
}

.dati table{
	border-collapse: collapse;
	border: 0px solid red;
	position: relative;
}

table.headeris {
	border-collapse: collapse;
	border: 1px solid white;
	position: relative;
	margin: 0 auto 2px auto;
	width: 505px;
}

table.headeris tr th {
	border: 1px solid white;
}

.dati table.header tr th {
	background-color: #eee;
	padding: 4px 10px 4px 10px;
}

.dati table tr td {
	text-align: center;
	padding: 1px 1px 1px 1px;
	border: 1px solid silver;
}

.rezult {
	margin: 0 0 5px 0;
	text-align: center;
	font-size: 24px;
	font-family: verdana, arial, helvetica, sans-serif;
}

#dzest {
	position: relative;
	display: block;
	margin: 10px auto;
	padding: 15px 20px 15px 20px;
	cursor: pointer;
	font-size: 16px;
	border-radius: 6px;
}

.viena_vieta {
	border: 7px solid #efefef;
	position: relative;
	width: 500px;
	margin: 0 auto 50px auto;
	padding: 0 0 8px 0;
	border-radius: 8px;
}

.visas_vietas {
	border: 7px solid #a89999;
	position: relative;
	width: 500px;
	margin: 0 auto 50px auto;
	padding: 11px 0 20px 0;
	border-radius: 8px;
}

.vietas_nosaukums {
	padding: 4px 0 6px 25px;
	position: relative;
	float: left;
	width: 80%;
	font-size: 1.2em;
	font-weight: bold;
	border:0px solid red;
}

.kopskaitam {
	padding: 4px 0 10px 25px;
}

.lielais {
	font-size: 1.4em;
	font-family: verdana, arial, helvetica, sans-serif;
}

.izveleta,
.parasta {
	width: 20px;
}

.izveleta {
	background-color: #dbd8d8;
	outline: 2px solid #666;
	outline-offset: -2.9px;
}

.moments {
	padding: 0 3px 0 70px;
	text-align: left;
	background-color: #f9f8f8;
}

#virsraksts {
	font-family: verdana, arial, helvetica, sans-swrf;
	color: #52526e;
	width: 630px;
	position: relative;
	margin: 20px auto 20px auto;
	font-size: 1.9em;
	text-align: center;
}

#kopejais {
	position: relative;
	border-collapse: collapse;
	margin: 5px 0 5px 29px;
	width: 88%;
}

#kopejais tr td {
	padding: 5px 5px 5px 10px;
	text-align: center;
}

#kopejais tr th {
	background-color: #f6f6f6;
	padding: 5px 5px 5px 5px;
}

#kopsumas_rinda {
	background-color: silver;
	font-weight: bold;
	color: white;
}
</style>
</head>

<body>
<?php
$vieta = isset($_GET['v']) ? $_GET['v'] : "0";
$admin = isset($_GET['admin']) ? $_GET['admin'] : "";
?>
<input type="hidden"  id="vieta" value="<?php echo $vieta; ?>">
<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
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

$atb = Array();
$atb[0] = "Mango - greipfrūtu";
$atb[1] = "Apelsīnu";
$atb[2] = "Aveņu - granātābolu";
$atb[3] = "Ličiju - greipfrūtu";

if ($vieta == "0") {
	$sql_dati = "SELECT * 
		FROM aptauja
		ORDER BY vieta, moment DESC
	";
	$sql_vietas = "SELECT vieta FROM aptauja GROUP BY vieta ORDER BY moment DESC";	
	$result_vietas = $mysqli->query($sql_vietas);	
	$vietu_masivs = Array();
	while($row_vietas = $result_vietas->fetch_assoc()) {
		array_push($vietu_masivs, $row_vietas['vieta']);
	}	

	if ($admin == "Valdis666") {
		echo '<input type="button" id="dzest" value="Dzēst tikai manus testa rezultātus, ja tādi ir" onclick="Dzesana()"><br />';
	}

	echo "<h1 id='virsraksts'>Dati par visām balsošanas vietām</h1>";
	$pirma_atbilde = Array();
	$otra_atbilde = Array();
	$tresa_atbilde = Array();
	$ceturta_atbilde = Array();
	foreach ($vietu_masivs as $key => $value) {
		$sql_dati = "SELECT * FROM aptauja WHERE vieta='$value'
			ORDER BY moment DESC
		";
		$value = $value == "0" ? "Programmas autors" : $value;
		$result_dati = $mysqli->query($sql_dati);	
	

	
		
		echo "<div class='viena_vieta'>";
			echo "<span class='vietas_nosaukums'>".$value."</span>";
			echo "<div class='dati'>";
			echo "<table border='1'>";
					$a1 = 0;
					$a2 = 0;
					$a3 = 0;
					$a4 = 0;
					while($row_dati = $result_dati->fetch_assoc()) {
						$b1 = 0;
						$b2 = 0;
						$b3 = 0;
						$b4 = 0;
						echo "<tr>";
							echo "<td class='moments'>&nbsp;&nbsp;";
								echo $row_dati['moment'];
							echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
							if ($row_dati['atb_1'] == 1) {
								echo "<td class='izveleta'>";
							} else {
								echo "<td class='parasta'>";
							}		
							$a1 = $a1 + $row_dati['atb_1'];
							$b1 = $b1 + $a1;
							echo "&nbsp;</td>";
							if ($row_dati['atb_2'] == 1) {
								echo "<td class='izveleta'>";
							} else {
								echo "<td class='parasta'>";
							}		
							$a2 = $a2 + $row_dati['atb_2'];
							$b2 = $b2 + $a2;
							echo "&nbsp;</td>";
							if ($row_dati['atb_3'] == 1) {
								echo "<td class='izveleta'>";
							} else {
								echo "<td class='parasta'>";
							}		
							$a3 = $a3 + $row_dati['atb_3'];
							$b3 = $b3 + $a3;
							echo "&nbsp;</td>";
							if ($row_dati['atb_4'] == 1) {
								echo "<td class='izveleta'>";
							} else {
								echo "<td class='parasta'>";
							}		
							$a4 = $a4 + $row_dati['atb_4'];
							$b4 = $b4 + $a4;
							echo "&nbsp;</td>";
						echo "</tr>";
					}		
					$pirma_atbilde[] = $b1;
					$otra_atbilde[] = $b2;
					$tresa_atbilde[] = $b3;
					$ceturta_atbilde[] = $b4;
				echo "</table>";	
			echo "</div>";		
			$punkti = Array();
			$punkti[0]['vertiba'] = $a1;
			$punkti[0]['nosaukums'] = $atb[0];
			$punkti[0]['numurs'] = 1;
			$punkti[1]['vertiba'] = $a2;
			$punkti[1]['nosaukums'] = $atb[1];
			$punkti[1]['numurs'] = 2;
			$punkti[2]['vertiba'] = $a3;
			$punkti[2]['nosaukums'] = $atb[2];
			$punkti[2]['numurs'] = 3;
			$punkti[3]['vertiba'] = $a4;
			$punkti[3]['nosaukums'] = $atb[3];
			$punkti[3]['numurs'] = 4;
			array_multisort(array_column($punkti, 'vertiba'), SORT_DESC, $punkti);
			echo "<div class='punkti'>";
				echo "<p class='rezult'>Rezultāti:</p>";
				$reizes = $result_dati->num_rows;
				echo "Balsojumu skaits: <b>".$reizes."</b><br />";
				foreach ($punkti as $key => $value) {
					echo  $punkti[$key]['numurs']
					.". atbilde&nbsp;&nbsp;&nbsp;&nbsp;("
					. $punkti[$key]['nosaukums']  
					.")&nbsp;&nbsp;- <b>"
					.$punkti[$key]['vertiba']
					."</b><br />";
				}
			echo "</div>";
		echo "</div>";
	}

	echo "<div class='visas_vietas'>";
		$pavisam = $mysqli->query("SELECT * FROM aptauja");
		$kopskaits = $pavisam->num_rows;
		echo "<span class='vietas_nosaukums kopskaitam lielais'>
			Visu balsošanas vietu datu kopsavilkums
		</span>";
		echo "<span class='vietas_nosaukums kopskaitam'>
			Balsojuma reižu skaits: " .$kopskaits. "</span>";
		echo "<table id='kopejais' border='1'>";
			echo "<tr>";
				echo "<th>";
					echo "Balsošanas vieta";
				echo "</th>";
				echo "<th>";
					echo "1. atbilde";
				echo "</th>";
				echo "<th>";
					echo "2. atbilde";
				echo "</th>";
				echo "<th>";
					echo "3. atbilde";
				echo "</th>";
				echo "<th>";
					echo "4. atbilde";
				echo "</td>";
			echo "</tr>";
		$pirma = 0;
		$otra = 0;
		$tresa = 0;
		$ceturta = 0;
		
		foreach ($vietu_masivs as $key => $value) {
			echo "<tr>";
				echo "<td style='text-align:left;font-weight:bold;'>";
					$value = $value == "0" ? "Programmas autors" : $value;
					echo $value;
				echo "</td>";
				echo "<td>";
					echo $pirma_atbilde[$key];
					$pirma = $pirma + $pirma_atbilde[$key];
				echo "</td>";
				echo "<td>";
					echo $otra_atbilde[$key];
					$otra = $otra + $otra_atbilde[$key];
				echo "</td>";
				echo "<td>";
					echo $tresa_atbilde[$key];
					$tresa = $tresa + $tresa_atbilde[$key];
				echo "</td>";
				echo "<td>";
					echo $ceturta_atbilde[$key];
					$ceturta = $ceturta + $ceturta_atbilde[$key];
				echo "</td>";
			echo "</tr>";
		}
			echo "<tr id='kopsumas_rinda'>";
				echo "<td style='text-align:left;font-weight:bold;'>";
					echo "KOPĀ:";
				echo "</td>";
				echo "<td>";
					echo $pirma;
				echo "</td>";
				echo "<td>";
					echo $otra;
				echo "</td>";
				echo "<td>";
					echo $tresa;
				echo "</td>";
				echo "<td>";
					echo $ceturta;
				echo "</td>";
			echo "</tr>";
		echo "</table>";
	echo "</div>";
} else {
	$sql_dati = "SELECT * FROM aptauja WHERE vieta='$vieta'
		ORDER BY moment DESC
	";
	$result_dati = $mysqli->query($sql_dati);	
	echo "<div class='viena_vieta'>";
		echo "<span class='vietas_nosaukums'>".$vieta."</span>";
		echo "<div class='dati'>";
		echo "<table border='1'>";
				$a1 = 0;
				$a2 = 0;
				$a3 = 0;
				$a4 = 0;
				while($row_dati = $result_dati->fetch_assoc()) {
					echo "<tr>";
						echo "<td class='moments'>&nbsp;&nbsp;";
							echo $row_dati['moment'];
						echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
						if ($row_dati['atb_1'] == 1) {
							echo "<td class='izveleta'>";
						} else {
							echo "<td class='parasta'>";
						}		
						$a1 = $a1 + $row_dati['atb_1'];
						echo "&nbsp;</td>";
						if ($row_dati['atb_2'] == 1) {
							echo "<td class='izveleta'>";
						} else {
							echo "<td class='parasta'>";
						}		
						$a2 = $a2 + $row_dati['atb_2'];
						echo "&nbsp;</td>";
						if ($row_dati['atb_3'] == 1) {
							echo "<td class='izveleta'>";
						} else {
							echo "<td class='parasta'>";
						}		
						$a3 = $a3 + $row_dati['atb_3'];
						echo "&nbsp;</td>";
						if ($row_dati['atb_4'] == 1) {
							echo "<td class='izveleta'>";
						} else {
							echo "<td class='parasta'>";
						}		
						$a4 = $a4 + $row_dati['atb_4'];
						echo "&nbsp;</td>";
					echo "</tr>";
				}		
			echo "</table>";	
		echo "</div>";		
		$punkti = Array();
		$punkti[0]['vertiba'] = $a1;
		$punkti[0]['nosaukums'] = $atb[0];
		$punkti[0]['numurs'] = 1;
		$punkti[1]['vertiba'] = $a2;
		$punkti[1]['nosaukums'] = $atb[1];
		$punkti[1]['numurs'] = 2;
		$punkti[2]['vertiba'] = $a3;
		$punkti[2]['nosaukums'] = $atb[2];
		$punkti[2]['numurs'] = 3;
		$punkti[3]['vertiba'] = $a4;
		$punkti[3]['nosaukums'] = $atb[3];
		$punkti[3]['numurs'] = 4;
		array_multisort(array_column($punkti, 'vertiba'), SORT_DESC, $punkti);
		echo "<div class='punkti'>";
			echo "<p class='rezult'>Rezultāti:</p>";
			$reizes = $result_dati->num_rows;
			echo "Balsojumu skaits: <b>".$reizes."</b><br />";
			foreach ($punkti as $key => $value) {
				echo  $punkti[$key]['numurs']
				.". atbilde&nbsp;&nbsp;&nbsp;&nbsp;("
				. $punkti[$key]['nosaukums']  
				.")&nbsp;&nbsp;- <b>"
				.$punkti[$key]['vertiba']
				."</b><br />";
			}
		echo "</div>";
	echo "</div>";
	echo '<input type="button" id="dzest" value="Dzēst šīs balsošanas vietas rezultātus" onclick="Dzesana()">';	
}
?>
</body>
<script>
function Dzesana () {
	if (confirm("Vai Jūs tiešām vēlaties dzēst visus rezultātus?") == true) {
		if (confirm(" - - - - TIEŠĀM DZĒST? - - - -") == true) {
			vieta = $("#vieta").val();
			$.ajax({	
				type: "POST",
				dataType: "html",
			data: {
				d_vieta: vieta
			},
			url: "dzesana.php", // 
				success: function (msg) {
					location.reload();
				},
				error: function( req, status, err ) {
					console.log( 'something went wrong', status, err );
				}
			});
		}  
	} 
}

</script>
</html>