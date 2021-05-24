<?php
require "modelos/alumnos.php";
class AlumnosController extends Controller{
    private $alumnos;
    public function __construct($param1,$param2){
        $this->alumnos=new Alumnos();
        parent::__construct($param1,$param2);
    }

    public function getAll(){
        $info=array('success'=>true, 'data'=>$this->alumnos->getAll());
        echo json_encode($info);
    }

    public function add(){
        if(isset($_POST["nombre"])&&isset($_POST["direccion"])&&isset($_POST["telefono"])
        &&isset($_POST["lab1"])&&isset($_POST["lab2"])&&isset($_POST["parcial"])&&isset($_POST["idalu"])){
            $this->noticias->add($_POST["titulo"],$_POST["fecha"],$_POST["descripcion"]);
            $info=array('success'=>true, 'msg'=>'Alumnos agregadó con exito');
        }else{
            $info=array('success'=>false, 'msg'=>'Los parametros son obligatorios');
        }
        echo json_encode($info);
    }