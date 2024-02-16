<?php
    include_once("variables.php");
    class conexion{
        private $server = servi;
        private $usuario = user;
        private $contra = pass;
        private $base = bd;
        private $puerto = port;
        private $conex;
        
        public function __construct(){
            try {
               $this->conex = new PDO("pgsql:host=".$this->server.";port=".$this->puerto.";dbname=".$this->base, $this->usuario,$this->contra); 
               $this->conex->setAttribute(pdo::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
               //echo "lo lograste, Ya estas conectado a Puerta Hidalgo  ";


            }catch(PDOException $error ){
                echo "ERROR: " .$error->getMessage();

            } 
        }
        public function getconex (){
            return $this->conex;
        }
    }
