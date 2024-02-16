<?php
    Class Museo{
        public $clave_mz;
        public $foto_ruta;
        public $fotom_img;
        public $nombre_mz;
        public $descripcion;
        public $categoria;
        public $correo_e;
        public $telefono;
        public $horario_apertura;
        public $horario_cierre;
        public $cp;
        public $numero;
        public $municipio;
        public $colonia;
        public $calle;


        public function __construct($cm, $fr, $fi, $nom, $desc, $cate, $ce, $tel, $hrA, $hrC, $codp, $num, $muni, $col, $clle){

            $this->clave_mz = $cm;
            $this->foto_ruta = $fr;
            $this->fotom_img = $fi;
            $this->nombre_mz = $nom;
            $this->descripcion = $desc;
            $this->categoria = $cate;
            $this->correo_e = $ce;
            $this->telefono = $tel;
            $this->horario_apertura = $hrA;
            $this->horario_cierre = $hrC;
            $this->cp = $codp;
            $this->numero = $num;
            $this->municipio =  $muni;
            $this->colonia = $col;
            $this->calle = $clle;

        }


    }
