<?php
    require_once 'models/usuario.php';

    class pacientController{

        private $pacient;

        public function __construct()
        {
           $this->pacient = new pacient();
        }

      public function crear(){
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $this->pacient->crear($_POST['documento'],$_POST['nombre_paciente'],$_POST['tipo_de_documento'],$_POST['direccion'],
                $_POST['telefono'],$_POST['celular'],$_POST['fecha_registro'],$_POST['edad'],$_POST['eps'],$_POST['nombre_contacto_adicional'],
                $_POST['parentesco'],$_POST['examen_a_realizar'],$_POST['empresa'],$_POST['fecha_de_examen']);
                header("Location:index.php?action=read");
            }
            require 'views/create.php';
        }

        public function leer(){
            $paciente = $this->pacient->leer();
            require 'views/read.php';
        }

        public function actualizar($id){
            $pacient = $this->pacient->encontrar($id);
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $this->pacient->actualizar($id,$_POST['documento'],$_POST['nombre_paciente'],$_POST['tipo_de_documento'],$_POST['direccion'],
                $_POST['telefono'],$_POST['celular'],$_POST['fecha_registro'],$_POST['edad'],$_POST['eps'],$_POST['nombre_contacto_adicional'],
                $_POST['parentesco'],$_POST['examen_a_realizar'],$_POST['empresa'],$_POST['fecha_de_examen']);
                header("Location:index.php?action=read");
            }
            require 'views/update.php';
        }
        public function eliminar($id){
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $this->pacient->eliminar($id);
                header("Location: index.php?action=read");
            }
            $pacient = $this->pacient->encontrar($id);
            require 'views/delete.php';
        }
    }
?>