<?php
declare(strict_types = 1);

class Profesor{

    private $nombre;
    private $apellido;  
    private $antiguedad=0;  
    private $idProfesor;
    private $curso;

    public function __construct(string $nombre, string $apellido, int $idProfesor){

        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->idProfesor = $idProfesor;
    }

    public function getIdProfesor():int{
        return $this->idProfesor;
    }

    public function setAntiguedad(int $newAntiguedad):void{
        $this->antiguedad = $newAntiguedad;
    }

    public function setCurso(int $newCurso):void{
        $this->curso = $newCurso;
    }

}
