<?php
    class Alumnos extends BaseDeDatos{

        public function __construct(){
            $this->conectar();
        }

        public function getAll(){
            $result=$this->conexion->query("Select *, (laboratorio1*0.25+laboratorio2*0.25+parcial*0.5) as Promedio from alumnos;");
            return $this->getArrayfromResult($result);
        }
        public function add($nombre,$direccion,$telefono,$lab1,$lab2,$parcial){
            $result=$this->conexion->query("insert into alumnos set nombre='{$nombre}',
            direccion='{$direccion}', telefono='{$telefono}',laboratorio1='{$lab1}',
            laboratorio2='{$lab2}',parcial='{$parcial}'");
            return true;
        }

    }