<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		body{
			background: grey;
			text-align: center;
			font-family: sans-serif;
			font-size:50px ;
		}
	</style>
</head>
<body>
<?php

$alumnosarray = array ('Said'=>10, "Alejandro"=>9.8, "Angel"=>7.5, "Emiliano"=>8.9, "Ebani"=>8.5);


foreach ($alumnosarray as $alumno => $calificacion) {
	echo "La calificacion del Alumno   $alumno  es  $calificacion";
    echo "<br>";

    
}
echo"<p>";
arsort($alumnosarray);
foreach ($alumnosarray as $alumno => $calificacion) {
	echo "La calificacion del Alumno $alumno es $calificacion";
    echo "<br>";
   
}
echo"<p>";
asort($alumnosarray);
foreach ($alumnosarray as $alumno => $calificacion) {
	echo "La calificacion del Alumno $alumno es $calificacion";
    echo "<br>";
    }
?>
</body>
</html>