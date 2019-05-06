<?php
declare(strict_types = 1);

class ProfesorAdjunto extends Profesor{
    
    private $horasConsulta;
    

    public function __construct(string $nombre, string $apellido, int $idProfesor, int $horasConsulta){

        parent::__construct($nombre, $apellido, $idProfesor);
        $this->horasConsulta = $horasConsulta;
       

    }
    
   
    public function getHorasConsulta():int{
        return $this->horasConsulta;
    }

    public function setHorasConsulta($newHorasConsulta):void{
        $this->horasConsulta = $newHorasConsulta;
    }


}
