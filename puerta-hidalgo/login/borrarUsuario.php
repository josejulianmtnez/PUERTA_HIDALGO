<?php
include_once("claseCrud.php");
$id = $_POST["id"];
$crud = new UserDAO(); 
$crud->borrar($id);

echo "<br><a href='../paginas/verusr.html'>Regresar</a>";

//header("location:verRegistros.php");


