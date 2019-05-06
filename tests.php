<?php

require 'main.php';


$pepe = new DigitalHouseManager();
$pepe->altaCurso("Full Stack", 10020, 1);
$pepe->altaProfTit("Ricardo", "Pepez", 5142, "PHP");
$pepe->altaProfAdj("Pepe", "Ricardez", 1052, 15);
$pepe->altaAlumno("Repe", "Picardez", 1235);

// var_dump($pepe);
$pepe->cambiarAntiguedadProfesor(5142, 10);
$pepe->cambiarAntiguedadProfesor(1052, 5);

$pepe->inscribirAlumno(1235, 10020);
$pepe->asignarProfesores(10020, 5142, 1052);
var_dump($pepe);


