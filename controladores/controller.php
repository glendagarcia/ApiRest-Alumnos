<?php
require "modelos/usuarios.php";
class Controller{
    protected $user;
    public function __construct($param1,$param2){
        $this->user=new Usuarios();
        if(($param2!="")&&($param1!="login")){
           if(!$this->user->validarToken($param2)){
               new ErroresController("Token no válido");
           } 
        }else if(($param2=="")&&($param1!="login")){
            new ErroresController("El token es un campo obligatorio");
        }
        if(method_exists($this,$param1)){
            $this->$param1();
        }else{
            new ErroresController("El metodo no existe");
        }     
    }
}