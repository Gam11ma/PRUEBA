
<?php 
//Instrucciones
echo "Leer el archivo XML y Obtener los atributos: \n 
		a) del nodo Emisor: Nombre, RFC \n 
		b) del nodo TimbreFiscalDigital: UUID, fecha de timbrado \n \n";

//Especificamos la ruta en donde se encuentra el archivo XML 
//Accedemos al archivo XML mediante la funcion simplexml_load_file
$archivoXML = simplexml_load_file('C:\Users\Gamaliel\Desktop\Prueba_Parte2\TSL171218FP7_P6902_20190920.xml'); 

//Obtenemos los Namespaces y guardamos en una variable
$ns = $archivoXML->getNamespaces(true); 

//Creamos un contexto de prefijo para acceder a los Namespaces del documento
$archivoXML->registerXPathNamespace('cfdi', $ns['cfdi']);
$archivoXML->registerXPathNamespace('tfd', $ns['tfd']);
 //Obtenemos los atributos de Emisor y guardamos en una variable
$atributosEmisor = $archivoXML->xpath('//cfdi:Emisor');

//Recorremos el arreglo y mostramos en pantalla el atributo que queremos
foreach ($atributosEmisor as $atributo) {

	echo 'El rfc del Emisor es: ' . $atributo['Rfc'] . "\n";
	echo 'El nombre del Emisor es: ' . $atributo['Nombre'] . "\n" . "\n";
}
$atrTimFisDig = $archivoXML->xpath('//tfd:TimbreFiscalDigital');

foreach ($atrTimFisDig as $atributo) {

	echo 'El UUID del TimbreFiscalDigital es: ' . $atributo['UUID'] . "\n";
	echo 'La fecha de timbrado del TimbreFiscalDigital es: ' . $atributo['FechaTimbrado'];
}

?>
