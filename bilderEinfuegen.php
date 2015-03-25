<!Doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bilder einbaun und verzeichnisse</title>
<style>
		body{
			align-items:center;
		}
		h1{
			border:solid 1px black;
		}
		.bild{
			background-image:url(img/Smileys.gif);
			background-color:black;
			width:100px;
			height:100px;
			position:relative;	
			_background-attachment: fixed;
			background-position: center; 
			background-size:330%;
			margin: 0% 50%;
			left:-50px;
			
		}
		.flugzeug{
			background-image:url(gifs/flugzeug_0020.gif);
			background-color:white;
			width:100px;
			height:100px;
			position:relative;	
			_background-attachment: fixed;
			background-position: center; 
			background-size:100%;
			margin: 0% 50%;
			left:-50px;
			background-repeat:no-repeat;
		}
</style>
</head>
	
<body>
	<?php
		echo "<h1 style='text-align:center;'>Hello</h1>";
		echo "<div class='bild'></div>";
		echo "<div class='flugzeug'></div>";
		//echo "<img src='img/Smileys.gif'/ style='align:center; width:100px; height:100px;'>";
	?>
</body>
</html>
