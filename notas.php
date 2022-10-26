<?php

$nombre = $_POST["nombre"];
$asignatura = $_POST["asignatura"];
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];

$promedio = ($nota1 + $nota2 + $nota3)/3;

echo "Nombre del estudiante: $nombre \n";
echo "Asignatura: $asignatura \n";
echo "promedio: $promedio \n";

?>