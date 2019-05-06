<?php
declare(strict_types = 1);

class ProfesorTitular extends Profesor{
    
    private $especialidad;
    

    
    public function __construct(string $nombre, string $apellido, int $idProfesor, string $especialidad){

        parent::__construct($nombre, $apellido, $idProfesor);
        $this->especialidad = $especialidad;
        
    }

  
    public function getEspecialidad():string{
        return $this->especialidad;
    }

    public function setEspecialidad($newEspecialidad):void{
        $this->especialidad = $newEspecialidad;
    }

}
