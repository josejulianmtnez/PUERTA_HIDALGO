<?php
    Class Usuario{
        public $clave_usuario;
        public $nombre;
        public $ap_pat;
        public $ap_mat;
        public $telefono;
        public $correo;
        public $contra;

        public function __construct($cl, $nom, $app, $appm, $tel, $corre, $pass){
            $this->clave_usuario = $cl;
            $this->nombre=$nom;
            $this->ap_pat=$app;
            $this->ap_mat=$appm;
            $this->telefono=$tel;
            $this->correo=$corre;
            $this->contra=$pass;
        }


    }
