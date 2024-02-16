<?php
require 'conex.php';
session_start();
$email=$_POST['email'];
$contra=$_POST['contra'];

$query="SELECT * FROM usuario where correo='$email' and contra='$contra'";
$consulta=pg_query($conexion, $query);
$cantidad=pg_num_rows($consulta);
if($cantidad>0){
    $_SESSION['user'];
    header("location: ../crud_museo/principal.php");
}else{
    echo "Datos invalidos";
}
?>