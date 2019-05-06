<?php
declare(strict_types = 1);
class DigitalHouseManager{

    private $listaCursos = [];
    private $listaProfesores = [];
    private $listaAlumnos = [];
    
    

    
    public function altaCurso(
        string $nombre, 
        string $idCurso, 
        int $cupo):void{
        
        array_push(
            $this->listaCursos, 
            new Curso(
                $nombre, 
                $idCurso, 
                $cupo));        
    }

    public function altaProfAdj(
        string $nombre, 
        string $apellido, 
        int $idProfesor, 
        int $horasConsulta):void{
        
        array_push(
            $this->listaProfesores, 
            new ProfesorAdjunto(
                $nombre, 
                $apellido, 
                $idProfesor, 
                $horasConsulta));    
    }

    public function altaProfTit(
        string $nombre, 
        string $apellido, 
        int $idProfesor, 
        string $especialidad):void{
        
        array_push(
            $this->listaProfesores, 
            new ProfesorTitular(
                $nombre, 
                $apellido, 
                $idProfesor, 
                $especialidad));
        }

        public function cambiarAntiguedadProfesor(
            int $idProf, 
            int $newAntiguedad):void{
            foreach($this->listaProfesores as $profesor){
                if($profesor->getIdProfesor() == $idProf){
                   $profesor->setAntiguedad($newAntiguedad);
                }
            }
        }

        public function altaAlumno(
            string $nombre,
            string $apellido,
            int $idAlumno):void{

            array_push(
                $this->listaAlumnos, 
                new Alumno(
                    $nombre, 
                    $apellido, 
                    $idAlumno));
        }

        public function inscribirAlumno(int $idAlumno, int $idCurso):void{

            foreach($this->listaCursos as $curso){

                if($curso->verInscripcion() && $curso->getIdCurso() == $idCurso){

                    foreach($this->listaAlumnos as $alumno){    
                        
                        if($alumno->getIdAlumno() == $idAlumno){

                            $curso->setAlumnosInscriptos($alumno);  
                            $alumno->setCurso($curso->getIdCurso()); 

                            echo "El alumno fue inscripto correctamente<br>";

                        }
                            else{
                                echo "No fue posible inscribir al alumno<br>";
                            }    
                    }
                    
                }
                        else{
                            echo "No fue posible inscribir al alumno<br>";
                        }
            }
        }
        public function asignarProfesores(int $idCurso, int $idProfesorTit, $idProfesorAdj):void{

            foreach($this->listaCursos as $curso){

                if($curso->getIdCurso() == $idCurso){

                    foreach($this->listaProfesores as $profesor){        
                       
                        if($profesor->getIdProfesor() == $idProfesorTit){
                           
                        $curso->setProfesorTit($profesor);
                        $profesor->setCurso($curso->getIdCurso());   
                    }
                    else if($profesor->getIdProfesor() == $idProfesorAdj){
                        $curso->setProfesorAdj($profesor);
                        $profesor->setCurso($curso->getIdCurso());
                    }
                }
            }

        }
    }
}