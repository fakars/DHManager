<?php

declare(strict_types = 1);

class Alumno{

    private $nombre;
    private $apellido;
    private $idAlumno;
    private $curso;

    public function __construct(string $nombre, string $apellido, int $idAlumno){

        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->idAlumno = $idAlumno;
        
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($newName){
        $this->nombre = $newName;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function setApellido($newApellido){
        $this->apellido = $newApellido;
    }

    public function getIdAlumno(){
        return $this->idAlumno;
    }

    public function setCurso($newCurso){
        $this->curso = $newCurso;
    }

}