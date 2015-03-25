<!Doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Unbenanntes Dokument</title>
<style>
	.box{
		width:50px;
		height:50px;
		background:yellow;
	}
	<?php
		echo ".big{
			font-size:140%;
			color:blue;
		}";
	?>
</style>

</head>


<body>
	<?php
												// Kommentar mit 2 slashes
												/* mehrere
												zeilen
												auskommentieren
												*/
		error_reporting(E_ALL); 	// zeigt alle syntaxfehler
		error_reporting(0);			// keine fehlermeldung im browser; sinnvoll für useranwendung
		echo "hello world";			// echo gibt html code auf demn bildschirm aus
		echo "<h1>Überschrift</h1>";
		echo "<div class='box big'> test </div>";
		$varUmbruch = "<br/>"; 	//variablen definition in php
		$meine = "meine ";
		
		//zeichenketten verknüpfen
		echo "zeile 1"."<br/>"; 	// . verknüpft strings
		echo "zeile 2 <br/>";
		echo $meine."zeile 3".$varUmbruch;
		echo "zeile 4 <br/>";
		echo date('d - m -Y')."<br/> Uhrzeit ".date('g:i a');
		echo "<br/>#################<br/>";
		$zahl_1 = 1;
		$zahl_2 = 2;
		echo $zahl_1 + $zahl_2; //arithmetische operationen
		echo "<style>
					.box1{
						width:20px;
						height:30px;
						margin:2px;
						background:#0f0;
						
					}
			</style>";
		$div = "<div class='box1'></div>";
		$alles = $div.$div.$div.$div.$div.$div;
		echo $alles;
		//for schleife
		for($i = 1; $i < 10; $i++){
			echo $i."<br/>";
			};
		for($nr = 10; $nr >= 5; $nr--){
			echo $nr."<br/>";
			};
		
		echo "<br/> #####abbruch der schleife#####<br/>";
		for($nr = 1; $nr < 30; $nr++){ //drekrement mit fliesskommazahlen
			
			if ($nr == 5) continue; // schleifendruchgang überspringen
			echo $nr."<br/>";
			if ($nr == 8) break;};
			
		echo "<br/> #####nur gerade zahlen#####<br/>";
		for($nr = 1; $nr < 10; $nr++){ 
			if ($nr % 2 != 0){					//% = modulo | restwert der division
				echo $nr."  ist gerade<br/>";
			}else{
				echo $nr." ist ungerade<br/>"; 				
		}};
	?>

</body>
</html>
