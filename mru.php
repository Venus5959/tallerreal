<?php

$velocidad = $_POST["velocidad"];
$tiempo = $_POST["tiempo"];
$distancia = $velocidad * $tiempo ;

echo "la distancia es $distancia m";

?>