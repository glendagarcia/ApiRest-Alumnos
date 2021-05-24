<?php
    class BaseDeDatos{

        protected $conexion;
        protected $isConnected = false;

        public function conectar(){
            $this->conexion = new mysqli("localhost","root","catolica","registro");
            if($this->conexion->connect_errno){
                echo "Error de conexion".$this->conexion->connect_error;
                $this->isConnected =false;
            }else{
                $this->isConnected = true;
            }
            return $this->isConnected;
        }

        public function getArrayfromResult($result){
            $records = array();
            while ($row = $result->fetch_array()){
                $records[]=$row;
            }
            return $records;
        }
    }
?>