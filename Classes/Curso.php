<?php

declare(strict_types = 1);

class Curso{

    private $idCurso;
    private $nombre;
    private $cupo;
    private $profesorTitular;
    private $profesorAdjunto;
    private $alumnosInscriptos = [];
    
    

    public function __construct(string $nombre, string $idCurso, int $cupo){

        $this->idCurso = $idCurso;
        $this->nombre = $nombre;        
        $this->cupo = $cupo;

    }

    public function getIdCurso():string{
        return $this->idCurso;
    }

    public function getNombre():string{
        return $this->nombre;
    }

    public function setNombre(string $newNombre):void{
        $this->nombre = $newNombre;
    }

    public function getTurno():string{
        return $this->turno;
    }

    public function setTurno(string $newTurno):void{
        $this->turno = $newTurno;
    }

    public function getProfesorTit():ProfesorTitular{
        return $this->profesorTitular;
    }

    public function setProfesorTit($newProfTit){
        $this->profesorTitular = $newProfTit;
    }

    public function getProfesorAdj():ProfesorAdjunto{
        return $this->profesorAdjunto;
    }

    public function setProfesorAdj($newProfAdj){
        $this->profesorAdjunto = $newProfAdj;
    }

    public function getCupo():int{
        return $this->cupo;
    }

    public function setCupo(int $newCupo):void{
        $this->cupo = $newCupo;
    }

    public function getAlumnosInscriptos(){
        return $this->alumnosInscriptos;
    }

    public function setAlumnosInscriptos(Alumno $newAlumno){
        $this->alumnosInscriptos = [$newAlumno];
    }

    public function verInscripcion():bool{
        
        if(count($this->alumnosInscriptos) < $this->cupo){        
             
             return true;
        }
        
            return false;
            
    }


    public function listarAlumnos():array{
        return $this->alumnosInscriptos;
    }

    public function listarProfesores():array{

        $listaProfesores = [

            "ProfesorTitular" => $this->profesorTitular,

            "ProfesorAdjunto" => $this->profesorAdjunto
        ];

        return $listaProfesores;
        
    }
    


}
