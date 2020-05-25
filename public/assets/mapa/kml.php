<?php
header('Content-Type: application/vnd.google-earth.kml+xml kml');
header('Content-Disposition: attachment; filename="test.kml"');

//include('database_config.php');

// Query the database data
//$result = mysql_query("SELECT * FROM YOUR_DATA_TABLE");

$registros = array();
if (($fichero = fopen("data.csv", "r")) !== FALSE) {
    // Lee los nombres de los campos
    $nombres_campos = fgetcsv($fichero, 0, ";", "\"", "\"");
    $num_campos = count($nombres_campos);
    // Lee los registros
    while (($datos = fgetcsv($fichero, 0, ";", "\"", "\"")) !== FALSE) {
        // Crea un array asociativo con los nombres y valores de los campos
        for ($icampo = 0; $icampo < $num_campos; $icampo++) {
            $registro[$nombres_campos[$icampo]] = $datos[$icampo];
        }
        // Añade el registro leido al array de registros
        $registros[] = $registro;
    }
    fclose($fichero);
 
    /*echo "Leidos " . count($registros) . " registros<br>";
 
    for ($i = 0; $i < count($registros); $i++) {
        for ($icampo = 0; $icampo < $num_campos; $icampo++) {
            echo $nombres_campos[$icampo] . ":"
            . $registros[$i][$nombres_campos[$icampo]] . "<br>";
        }
    }*/
}




// Print the head of the document
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<kml xmlns="http://www.opengis.net/kml/2.2" xmlns:gx="http://www.google.com/kml/ext/2.2" xmlns:kml="http://www.opengis.net/kml/2.2" xmlns:atom="http://www.w3.org/2005/Atom">';
echo '<Document>';

  // Now iterate over all placemarks (rows)
//while ($row = mysql_fetch_array($result)) {
	foreach($registros as $r){
		

    // This writes out a placemark with some data

echo '<Placemark>';
echo '<name>'.$r['nombre'].'</name>';
echo '<description>'.$r['nombre'].'</description>';
echo '<Point>';
echo '<coordinates>'.$r['coordenadas'].'</coordinates>';
echo '</Point>';
echo '</Placemark>';


  };

// And finish the document

echo '</Document>';
echo '</kml>';
