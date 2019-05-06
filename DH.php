<?php

require 'main.php';

$manager = new DigitalHouseManager();

// Profes

$manager->altaProfTit("Moe", "Lester", 3220, "HTML + CSS");
$manager->altaProfTit("Diana", "Dbag", 3221, "JS");

$manager->altaProfAdj("James B.", "Grossweiner", 3222, 15);
$manager->altaProfAdj("Rick", "Titball", 3223, 20);

// Dar de alta cursos

$manager->altaCurso("Full Stack", 20001, 3);

$manager->altaCurso("Android", 20002, 2);

// Asignar profes a los cursos

$manager->asignarProfesores(20001, 3220, 3223);

$manager->asignarProfesores(20002, 3221, 3222);

// Dar de alta alumnos

$manager->altaAlumno("Jesus","Condom", 1050);
$manager->altaAlumno("Ben", "Dover", 1055);
$manager->altaAlumno("Jack", "Goff", 1056);

// Inscribir alumnos

//Full Stack
$manager->inscribirAlumno(1050, 20001);
$manager->inscribirAlumno(1055, 20001);

// Android
$manager->inscribirAlumno(1055, 20002);
$manager->inscribirAlumno(1056, 20002);

$manager->inscribirAlumno(1050, 20002);
$manager->inscribirAlumno(1055, 20002);
$manager->inscribirAlumno(1056, 20002);

var_dump($manager->getListaCursos());
exit;




