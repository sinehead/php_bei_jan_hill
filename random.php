<!Doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Unbenanntes Dokument</title>
<style>
	img{
		width:20px;
		height:20px;
		opacity:0.3;
	}
	.box{
		width:20px;
		height:20px;
		position:absolute;
		font-size:70%;
		color:white;
		text-shadow: 0px 0px 13px white;
		}
</style>

</head>

<body>
	<?php
	$action3 = rand(0,255); 
	$positionx = -20;
	$positiony = -20;
	$div = "<div class='box'></div>";;
	for ($zeile = 1; $zeile < 27; $zeile++){ 			// schleife für zeilen fortschritt
		$positiony = $positiony + 20; 						// eine zeile weiter runter
		$posy = $positiony."px"; 								// string zusammensetzen
		$positionx = -20;											// spalte wieder auf anfang
		for ($spalte = 1; $spalte < 40; $spalte++){	// schleife für die spalten
			//echo $div;
			$positionx = $positionx + 20;					// spaltenposition nach rechts
			$zufallrot = rand(0,255); 							//zufallswert für rot
			$zufallgrun = rand(0,255); 						//zufallswert für grun
			$zufallblau = rand(0,255); 						//zufallswert für blau
			$pos = $positionx."px";
			if ($zeile % 2 != 0){
				$div = $div."<div class='box' style='background:rgba($zufallrot,$zufallgrun,$zufallblau,1);  
									left:$pos;top:$posy'></div>"; // div zusammen setzen 
			}else{
				$action1 = $zeile * 8;
				$action2 = $spalte * 6;
				$wuerfel = rand(1,6);
				$wurf = "<img src='wuerfel_px50/wuerfel_".$wuerfel.".jpg'/>";
				$div = $div."<div class='box' style='background:rgba($action1,$action2,$action3,1);  
									left:$pos;top:$posy'>$wurf</div>"; // div zusammen setzen 
			}
		}
	}
	echo $div;
	?>
</body>
</html>
