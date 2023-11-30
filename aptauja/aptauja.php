<html>
<head>
<title>Aptauja</title>
<script src='http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.js'></script>
<style>
body, html {
	margin: 0;
	padding: 0;
	font-family: verdana, arial, helvetica, sans-serif;
	font-size: 32px;
}

#virsraksts {
	position: relative;
	width: 75%;
	margin: 65px auto 20px auto;
	border: 0px solid red;
	font-size: 1.1em;
	font-family: verdana, arial, helvetica, sans-serif;
	text-align: center;
	font-weight: bold;
	color: #52526e;
}

#poga {
	position: relative;
	width: 20%;
	margin: 15px auto 15px auto;
	font-size: 35px;
	font-family: verdana, arial, helvetica, sans-serif;
	text-align: center;
	font-weight: bold;
	color: white;
	border-radius: 70px;
	background-color: #aaa;
	padding: 30px 30px 30px 30px;
	user-select: none;
}

.atb {
	position: relative;
	width: 70%;
	height: 160px;
	margin: 30px auto 30px auto;
	border: 3px solid #ddd;
	font-family: verdana, arial, helvetica, sans-serif;
	text-align: center;
	font-weight: bold;
	color: black;
	border-radius: 50px;
	padding: 0;
	user-select: none;
}

.aplis {
	position: relative;
	float: right;
	margin: 50px 40px 0 0;
	width: 50px;
	height: 50px;
	border: 1px solid black;
	border-radius: 75px;
}

.bilde {
	position: relative;
	float: left;
	margin: 10px 0 0 40px;
	width: 50px;
	height: 110px;
	border: 0px solid red;
}

.teksts {
	position: relative;
	float: left;
	margin: 60px 0 0 40px;
	min-width: 50%;
	height: 50px;
	border: 0px solid green;
	text-align: left;
	font-size: 1.1em;
}

.inactive {
	background-color: white;
	border: 12px solid #ddd;
}

.active {
	background-color: #ecf0f4;
	outline: 4px solid #52526e;
	outline-offset: -23px;
	border: 12px solid #7597b9;
}

.aplis_inactive {
	border: 1px solid black;
}

.aplis_active {
	border: 5px solid navy;
	outline: 10px solid #52526e;
	outline-offset: -20px;
}

#paldies {
	position: relative;
	margin: 40% auto 0 auto;
	width: 70%;
	border: 0px solid red;
	text-align: center;
	font-size: 2.5em;
	display: none;
	color: #52526e;
}
</style>
</head>
<body>
<?php
$vieta = isset($_GET['v']) ? $_GET['v'] : "0";
$ip_adrese = $_SERVER['REMOTE_ADDR'];
$atb = Array();
$atb[0] = "Mango - greipfrūtu";
$atb[1] = "Apelsīnu";
$atb[2] = "Aveņu - granātābolu";
$atb[3] = "Ličiju - greipfrūtu";

$pic = Array();
$pic[0] = "mango_greip.png";
$pic[1] = "apels.png";
$pic[2] = "av_gran.png";
$pic[3] = "lic_gre.png";
?>
<input type="hidden"  id="vieta" value="<?php echo $vieta; ?>">
<input type="hidden"  id="ip_adrese" value="<?php echo $ip_adrese; ?>">
<div id="virsraksts">
	<img src="images/mangali_energy.png" width="45%"><br>
	Kura Mangaļi Energy produktu garša Jums patika vislabāk?
</div>
<div id="paldies">Paldies par balsojumu!</div>
<div id="atbildes">
	<div class="atb inactive">
		<div class="bilde">
			<img src="images/<?php echo $pic[0];?>" width="115%">
		</div>
		<div class="teksts"><?php echo $atb[0];?></div>
		<div class="aplis aplis_inactive"></div>
		<input type="hidden" class="vertiba" id="vertiba1" value="0">
	</div>
	
	<div class="atb inactive">
		<div class="bilde">
			<img src="images/<?php echo $pic[1];?>" width="115%">
		</div>
		<div class="teksts"><?php echo $atb[1];?></div>
		<div class="aplis aplis_inactive"></div>
		<input type="hidden" class="vertiba" id="vertiba2" value="0">
	</div>
	
	<div class="atb inactive">
		<div class="bilde">
			<img src="images/<?php echo $pic[2];?>" width="115%">
		</div>
		<div class="teksts"><?php echo $atb[2];?></div>
		<div class="aplis aplis_inactive"></div>
		<input type="hidden" class="vertiba" id="vertiba3" value="0">
	</div>
	
	<div class="atb inactive">
		<div class="bilde">
			<img src="images/<?php echo $pic[3];?>" width="115%">
		</div>
		<div class="teksts"><?php echo $atb[3];?></div>
		<div class="aplis aplis_inactive"></div>
		<input type="hidden" class="vertiba" id="vertiba4" value="0">
	</div>
</div>
<div id="poga">Atbildēt</div>
</body>
<script>
	$(".atb").click(function(){
		$(".atb").removeClass("active").addClass("inactive");
		$(".aplis").removeClass("aplis_active").addClass("aplis_inactive");
		if ( $(this).hasClass("inactive") ) {
			$(this).removeClass("inactive").addClass("active");	
			$(this).find(".vertiba").val("1");	
		}
		else {
			$(this).removeClass("active").addClass("inactive");	
		}

		aplis = $(this).find(".aplis");
		if ( $(aplis).hasClass("aplis_inactive") ) {
			$(aplis).removeClass("aplis_inactive").addClass("aplis_active");	
		}
		else {
			$(aplis).removeClass("aplis_active").addClass("aplis_inactive");	
		}
		$("#poga").css("background-color", "navy").addClass("poga_aktiva");
	});
	
	$("#poga").click(function(){	
		if ( $("#poga").hasClass("poga_aktiva") ) {
			setTimeout(function(){
				$("#atbildes").hide();	
				$("#poga").hide();
				$("#paldies").show();				
				setTimeout(function(){
					$("#paldies").hide();	
					$("#poga").show();					
					$("#poga").css("background-color", "#aaa");
					$("#poga").removeClass("poga_aktiva");
					$("#atbildes").show();	
					$(".atb").removeClass("active").addClass("inactive");
					$(".aplis").removeClass("aplis_active").addClass("aplis_inactive");
					
				}, 2000);			
			}, 500);
			vert1 = $("#vertiba1").val();
			vert2 = $("#vertiba2").val();
			vert3 = $("#vertiba3").val();
			vert4 = $("#vertiba4").val();
			vieta = $("#vieta").val();
			adrese = $("#ip_adrese").val();
			$.ajax({	
				type: "POST",
				dataType: "html",
				data: {
					d_vert1: vert1,
					d_vert2: vert2,
					d_vert3: vert3,
					d_vert4: vert4,	
					d_vieta: vieta,
					d_adrese: adrese	
				},
				url: "fiksacija.php", // 
				success: function (msg) {
					$("#vertiba1").val(0);
					$("#vertiba2").val(0);
					$("#vertiba3").val(0);
					$("#vertiba4").val(0);
				},
				error: function( req, status, err ) {
					console.log( 'something went wrong', status, err );
				}
			});
		}	
	});
</script>
</html>
