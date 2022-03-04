<?php 
    include "db.php";
    class Registro extends DB{
        private $correo;
        private $nombre;
        private $celular = null;
        private $sugerencia;

        public function setCorreo($correo){
            $this->correo = $correo;
        }
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function setCelular($celular){
            $this->celular = $celular;
        }
        public function setSugerencia($sugerencia){
            $this->sugerencia = $sugerencia;
        }
        public function getCorreo(){
            return $this->correo;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function getCelular(){
            return $this->celular;
        }
        public function getSugerencia(){
            return $this->sugerencia;
        }

        public function registrar(){
            $query = $this->connect()->prepare("INSERT INTO sugerencias(nombre,correo,celular,sugerencia) VALUES(:nombre,:correo,:celular,:sugerencia)");
            return $query->execute(["nombre"=>$this->getNombre(),"correo"=>$this->getCorreo(),"celular"=>$this->getCelular(),"sugerencia"=>$this->getSugerencia()]);
        }
    }
?>