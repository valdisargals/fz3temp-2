<html>
<head>
<title>Aptauja</title>
<script src='http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.js'></script>
<style>
h1 {
	margin: 15px auto;
	color: #888;
	width: 40%;
	text-align: center;
	position: relative;
	font-family: verdana, arial, helvetica, sans-serif;
}

h2 {
	margin: 0 0 0 89px;
	color: silver;
}

.saites {
	position: relative;
	float: left;
	width: 17%;
	padding: 5px 12px 5px 0px;
}

.saites ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
}

.saites_aptauja ul li:hover {
	border: 1px solid #000;
	background-color: #b1bdf1;
}

.saites_aptauja {
	border: 1px solid silver;
	border-radius: 7px;
	margin: 0 40px 0 40px;
}
.saites_aptauja ul li {
	border: 1px solid #999;
	margin: 5px 0 7px 15px;
	padding: 1px 0 1px 0;
	background-color: #d0d7f4;
	border-radius: 7px;
	cursor: pointer;
	width: 220px;
}
.saites_aptauja ul li a {
	text-decoration: none;
	font-size: 1.1em;
	color: navy;
	font-weight: bold;
	border: 0px solid red;
	width: 93%;
	padding: 0 0 0 10px;
	display: block;
}

.saites_dati {
	border: 1px solid silver;
	border-radius: 7px;
	margin: 0 20px 0 0;
}
.saites_dati ul li {
	border: 1px solid #999;
	margin: 5px 0 7px 15px;
	padding: 1px 0 1px 0;
	background-color: #f6e1e1;
	border-radius: 7px;
	cursor:pointer;
	width:220px;
}
.saites_dati ul li a {
	text-decoration: none;
	font-size: 1.1em;
	color: #e00;
	font-weight: bold;
	border: 0px solid red;
	width: 93%;
	padding: 0 0 0 10px;
	display: block;
}

.saites_dati ul li.visi {
	border: 3px solid #ddd;
	margin: 5px 0 10px 15px;
	padding: 2px 0 2px 0;
	background-color: #a8e048;
	border-radius: 7px;
	cursor:pointer;
}
.saites_dati ul li.visi a{
	color:navy;
}
.saites_dati ul li:hover {
	background-color: pink;
}
.saites_dati ul li.visi:hover {
	background-color: palegreen;
}

.saites_palidziba {
	border: 1px solid silver;
	border-radius: 7px;
	margin: 0 20px 0 20px;
	width: 40%;
	padding: 10px;
	text-align: justify;
	font-size: 1em;
}

#password {
	position: relative;
	width: 20%;
	border: 2px solid #bbb;
	text-align: center;
	border-radius: 6px;
	padding: 40px 20px 14px 20px;
	margin: 100px auto;
}

#subm {
	padding: 10px 15px 10px 15px;
	margin: 36px 0 7px 0;
	cursor: pointer;
}
</style>
</head>
<body>
<?php
$parole = isset ($_POST["pass"]) ? $_POST["pass"] : "";
if ($parole == "manga") {
?>
<div class="saites saites_aptauja">
	<h2>Balsošana</h2>
	<ul>
		<li><a href="aptauja.php?v=0112_Rimi_Pulkvedis" target="_blank">01.12 Rimi Pulkvedis</a></li>
		<li><a href="aptauja.php?v=0112_Rimi_Valdemara" target="_blank">01.12 Rimi Valdemāra</a></li>
		<li><a href="aptauja.php?v=0212_Rimi_Alfa" target="_blank">02.12 Rimi Alfa</a></li>
		<li><a href="aptauja.php?v=0212_Rimi_Olympia" target="_blank">03.12 Rimi Olympia</a></li>
		<li><a href="aptauja.php?v=0212_Maxima_Akropole" target="_blank">02.12 Maxima Akropole</a></li>
		<li><a href="aptauja.php?v=0212_Maxima_Saharova" target="_blank">02.12 Maxima Saharova</a></li>
		<li><a href="aptauja.php?v=0312_Maxima_Slokas" target="_blank">03.12 Maxima Slokas</a></li>
		<li><a href="aptauja.php?v=0312_Maxima_Ulmana" target="_blank">03.12 Maxima Ulmaņa</a></li>
		<li><a href="aptauja.php?v=0712_Rimi_Spice" target="_blank">07.12 Rimi Spice</a></li>
		<li><a href="aptauja.php?v=0712_Rimi_Mols" target="_blank">07.12 Rimi Mols</a></li>
		<li><a href="aptauja.php?v=0812_Rimi_Alfa" target="_blank">08.12 Rimi Alfa</a></li>
		<li><a href="aptauja.php?v=0812_Rimi_Stirnu" target="_blank">08.12 Rimi Stirnu</a></li>
		<li><a href="aptauja.php?v=0912_Rimi_Damme" target="_blank">09.12 Rimi Damme</a></li>
		<li><a href="aptauja.php?v=0912_Rimi_Origo" target="_blank">09.12 Rimi Origo</a></li>
		<li><a href="aptauja.php?v=1012_Maxima_Plaza" target="_blank">10.12 Maxima Plaza</a></li>
		<li><a href="aptauja.php?v=1012_Maxima_Grostonas" target="_blank">10.12 Maxima Grostonas</a></li>
		<li style="background-color:red" ><a style="color:white" href="aptauja2.php?v=tests" target="_blank">Kārli, paskaties</a></li>
	</ul>
</div>

<div class="saites saites_dati">
	<h2>Dati</h2>
	<ul>
		<li><a href="dati.php?v=0112_Rimi_Pulkvedis" target="_blank">01.12 Rimi Pulkvedis</a></li>
		<li><a href="dati.php?v=0112_Rimi_Valdemara" target="_blank">01.12 Rimi Valdemāra</a></li>
		<li><a href="dati.php?v=0212_Rimi_Alfa" target="_blank">02.12 Rimi Alfa</a></li>
		<li><a href="dati.php?v=0212_Rimi_Olympia" target="_blank">03.12 Rimi Olympia</a></li>
		<li><a href="dati.php?v=0212_Maxima_Akropole" target="_blank">02.12 Maxima Akropole</a></li>
		<li><a href="dati.php?v=0212_Maxima_Saharova" target="_blank">02.12 Maxima Saharova</a></li>
		<li><a href="dati.php?v=0312_Maxima_Slokas" target="_blank">03.12 Maxima Slokas</a></li>
		<li><a href="dati.php?v=0312_Maxima_Ulmana" target="_blank">03.12 Maxima Ulmaņa</a></li>
		<li><a href="dati.php?v=0712_Rimi_Spice" target="_blank">07.12 Rimi Spice</a></li>
		<li><a href="dati.php?v=0712_Rimi_Mols" target="_blank">07.12 Rimi Mols</a></li>
		<li><a href="dati.php?v=0812_Rimi_Alfa" target="_blank">08.12 Rimi Alfa</a></li>
		<li><a href="dati.php?v=0812_Rimi_Stirnu" target="_blank">08.12 Rimi Stirnu</a></li>
		<li><a href="dati.php?v=0912_Rimi_Damme" target="_blank">09.12 Rimi Damme</a></li>
		<li><a href="dati.php?v=0912_Rimi_Origo" target="_blank">09.12 Rimi Origo</a></li>
		<li><a href="dati.php?v=1012_Maxima_Plaza" target="_blank">10.12 Maxima Plaza</a></li>
		<li><a href="dati.php?v=1012_Maxima_Grostonas" target="_blank">10.12 Maxima Grostonas</a></li>
		<li class="visi" ><a href="dati.php" target="_blank">Visas balsošanas vietas</a></li>
	</ul>
</div>

<div class="saites saites_palidziba">
	<h2>Palīdzība</h2>
Programma paredzēta datu iegūšanai par pircēju iecienītākajiem produktiem. Šobrīd produkti, par kuriem pircēji var balsot, ir 4 Mangaļi Energy minerālūdeņi. Ja pēc šīs balsošanas programmu gribēs izmantot balsošanai par kādiem citiem produktiem, programmētājs var izdarīt vajadzīgās izmaiņas (nomainīt tekstus, attēlus un logotipu balsošanas lapā).
<br /><br />
Patlaban balsošanas lapā ir 4 izvēles. Izvēļu skaitu programmētājs var mainīt, taču, palielinot izvēļu skaitu, katrai izvēlnei būs mazāk vietas.
<br /><br />
Programma sastāv no divām daļām - balsošanas un datu apskates. 
Programmas balsošanas daļa paredzēta klientiem, lietošanai uz mobilās ierīces (planšetes), kas atradīsies veikalā.
<br /><br />
Savukārt datu apskates daļa domāta Jums lietošanai datorā (var lietot arī savā mobilajā ierīcē, vienīgi tur būs sliktāka redzamība).
<br /><br />
Lai programmu izmantotu veikalā, nospiediet planšetes ekrānā uz attiecīgās saites. Jaunā cilnē (tab) atvērsies balsošanas lapa. Pēc tam aizveriet to cilni, kurā spiedāt uz saites. Tas jāara tādēl, lai kāds veikala darbinieks nevarētu nokļūt tikai Jums domātajā datu apskates lapā (tur ir iespēja dzēst balsošanas datus). <br/>
Programma paredzēta vienlaicīgai lietošanai vairākās iepirkšanās vietās. Datu apskates daļā iespējams gan skatīt katras vietas datus atsevišķi, gan visu vietu datus kopā (ar kopsavilkumu beigās). 
<br/>
Lai kādā iepirkšanās vietā iegūtos datus dzēstu, jāieiet caur saiti šīs vietas datos un jānospiež dzēšanas poga (drošības nolūkā <b>divas reizes</b> būs jāapstiprina, ka tiešām vēlaties dzēst.)
</div>
<?php
} else {
?>
<h1>Pircēju iecienītākie produkti</h1>
<div id="password">
<form method="post" action="">
  <label for="pass" style="font-size: 1.4em;">Ievadiet paroli:</label>
  <br />
  <input style="width: 140px;padding:7px 5px 7px 5px;margin:15px 0 0 0" 
	type="password" name="pass" id="pass" value="">
	<br />
  <input id="subm" type="submit" value="Apstiprināt">
</form> 
</div>
<?php
}
?>
</body>
<script>
	$("#pass").focus();
</script>
</html>