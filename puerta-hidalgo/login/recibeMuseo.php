<?php
include_once('museos.php');
include_once('crud.php');

$cm = $_POST["Clave"];
$nom = $_POST["Muse"];
$descr = $_POST["Desc"];
$ctgry = $_POST["Cat"];
$crreo = $_POST["Corr"];
$tlcel = $_POST["Tel"];
$horarioA = $_POST["HrarioA"];
$horarioC = $_POST["HrarioC"];
$cp = $_POST["CodeP"];
$num = $_POST["Num"];
$mu = $_POST["Muni"];
$cl = $_POST["Col"];
$clle = $_POST["Call"];



$ruta = "img/";
$nomImg = $ruta.basename($_FILES['img']['name']);
if(move_uploaded_file($_FILES['img']['tmp_name'], $nomImg)){
    echo "Imágen cargada exitosamente";
}else{
    echo "Imágen no subida";
}

$file = file_get_contents($nomImg);
$hexa = bin2hex($file);


$obja = new Museo($cm, $nomImg, $hexa, $nom, $descr, $ctgry, $crreo, $tlcel, $horarioA, $horarioC , $cp, $num, $mu , $cl, $clle);

$crud = new MuseoDAO(); //llamando a la conexion de base de datos

$crud->registrar($obja);