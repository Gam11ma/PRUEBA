<?php

if (isset($_POST['palabra'])) { //Comprobamos que hayan introducido una palabra

	$palabra = $_POST['palabra'];//Guardamos la palabra en una variable

	//Funcion que verifica si una palabra es palindromo
	function palindromo($palabra){  //Parametro necesario "$palabra"
		$palabrita = strtolower($palabra);//Transformar a minusculas
		$palabritaArray = str_split($palabrita);//Convertir a array 
		$palabritaInvertida = '';
		//Recorremos el arreglo de manera inversa y guardamos en una variable
		for ($i=count($palabritaArray)-1; $i >=0 ; $i--) { 
			$palabritaInvertida = $palabritaInvertida . $palabritaArray[$i];
		}	
		//Comparamos la palabra original en minusculas y la invertida
		//Imprimir en pantalla si es un palindromo
		if ($palabrita==$palabritaInvertida) {

			echo '<h2>' .'"' . $palabra . '"' . '</h2>';
			echo '<h3>' . '¡Esta palabra es un palíndromo!' . '</3>'; 
		}
	}

	palindromo($palabra); //Ejecutamos la funcion
}
?>