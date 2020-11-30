<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Palindromo</title>
	<link rel="stylesheet" href="estilos.css">
</head><br><br>
<h1 align = "center">Comprobar si una palabra es un palíndromo</h1><br><br>
<body align = "center">
	<form method="post">
		<b>Introduce una palabra</b><br><br>
		<input type="text" name="palabra" placeholder="Introducir palabra" required="">
		<input type="submit" value="Verificar">
	</form>
	<section>
		<?php  
		include 'funcion.php'; //Incluimos el archivo funcion.php en la seccion
		?>
	</section>

</body>
</html>