<?php
    include_once("ClaseConexion.php");
    include_once("ClaseUsuario.php");

    
    class UserDao extends conexion{
        public function __construct(){
            parent::__construct();
        }
        public function registrar($user){
            $imagen = $user;
            $sql="INSERT INTO usuario (nombre, ap_pat, ap_mat, telefono, correo, contra)
            values (?,?,?,?,?,?);";
            $stmt= parent::getconex()->prepare($sql);
            //$stmt-> bindparam(1,$user->clave_usuario);
            $stmt-> bindparam(1,$user->nombre);
            $stmt-> bindparam(2,$user->ap_pat);
            $stmt-> bindparam(3,$user->ap_mat);
            $stmt-> bindparam(4,$user->telefono);
            $stmt-> bindparam(5,$user->correo);
            $stmt-> bindparam(6,$user->contra);

            if($stmt->execute()){
                //echo "registro de usuario exitoso..";
                header ("location: login.html");
            }else{
                echo "registro fallido ";
            }
        }
        
        public function borrar($id){
            $sql = "DELETE FROM usuario WHERE clave_usuario =".$id;
            $stmt = parent::getconex()->prepare($sql);
            if($stmt->execute()){
                echo "ID $id eliminado";
            }else{
                echo "ID $id no encontrado";
            }
        }







    }
    //$objA= new usuario(1,"Jaime","Ramirez","Guerra",5613194967,"chino@gmail.com","a12345");
    //$crud= new UserDao();
    //$crud->registrar($objA);
    