<?php
    include_once("conex.php");
    
    class MuseoDao extends conexion{
        public function __construct(){
            parent::__construct();
        }
        public function registrar($museo){
            $imagen = $museo->fotom_img;
            $sql="INSERT INTO museo_zona (clave_mz, foto_ruta, fotom_img, nombre_mz, descripcion, categoria, correo_e, telefono, horario_apertura, horario_cierre,
            cp, numero, municipio, colonia, calle)
            values (?,?,decode('{$imagen}','hex'),?,?,?,?,?,?,?,?,?,?,?,?);";
            $stmt= parent::getconex()->prepare($sql);
            //$stmt-> bindparam(1,$user->clave_usuario);
            $stmt-> bindparam(1,$museo->clave_mz);
            $stmt-> bindparam(2,$museo->foto_ruta);
            $stmt-> bindparam(3,$museo->nombre_mz);
            $stmt-> bindparam(4,$museo->descripcion);
            $stmt-> bindparam(5,$museo->categoria);
            $stmt-> bindparam(6,$museo->correo_e);
            $stmt-> bindparam(7,$museo->telefono);
            $stmt-> bindparam(8,$museo->horario_apertura);
            $stmt-> bindparam(9,$museo->horario_cierre);
            $stmt-> bindparam(10,$museo->cp);
            $stmt-> bindparam(11,$museo->numero);
            $stmt-> bindparam(12,$museo->municipio);
            $stmt-> bindparam(13,$museo->colonia);
            $stmt-> bindparam(14,$museo->calle);
          
            if($stmt->execute()){
                echo "registro de museo exitoso..";
                //header ("location: login.html");
            }else{
                echo "registro fallido ";
            }
        }

        public function verTodos(){
            $sql = "SELECT * FROM museo_zona";
            $stmt = parent::getconex()->prepare($sql);
            if($stmt->execute()){
                //echo "Si hay registros";
            }else{
                //echo "Tabla vacía";
            }
            return $stmt;
        }

        public function buscar($nombre){
            $sql = "SELECT * FROM museo_zona WHERE nombre_mz =?";
            $stmt = parent::getconex()->prepare($sql);
            $stmt->bindParam(1,$nombre);
            if($stmt->execute()){
                //echo "ID $id_p encontrado<br>";
            }else{
                //echo "ID $id_p no encontrado";
            }
            return $stmt;
        }



// Recupera la URL de la imagen



    }

        
        /*public function borrar($id){
            $sql = "DELETE FROM usuario WHERE clave_usuario =".$id;
            $stmt = parent::getconex()->prepare($sql);
            if($stmt->execute()){
                echo "ID $id eliminado";
            }else{
                echo "ID $id no encontrado";
            }
        }*/


    




    
    //$objA= new usuario(1,"Jaime","Ramirez","Guerra",5613194967,"chino@gmail.com","a12345");
    //$crud= new UserDao();
    //$crud->registrar($objA);
    