<?php

require 'main.php';


$pepe = new DigitalHouseManager();
$pepe->altaCurso("Full Stack", "TN02", 1);
$pepe->altaProfTit("Ricardo", "Pepez", 5142, "PHP");
$pepe->altaProfAdj("Pepe", "Ricardez", 1052, 15);
$pepe->altaAlumno("Repe", "Picardez", 1235);

// var_dump($pepe);
$pepe->cambiarAntiguedadProfesor(5142, 10);
$pepe->cambiarAntiguedadProfesor(1052, 5);

$pepe->inscribirAlumno(1235, "TN02");
$pepe->asignarProfesores("TN02", 5142, 1052);
var_dump($pepe);


