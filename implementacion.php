<?php
include("estudiante.php");
$es = new estudiante();
$es->setNombre("jose");
echo($es->getNombre());




?>