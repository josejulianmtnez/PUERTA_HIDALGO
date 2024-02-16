<?php
include_once("ClaseUsuario.php");
include_once("claseCrud.php");
$nombre = $_POST ["nombre"];
$apat = $_POST ["apat"];
$amat = $_POST ["amat"];
$tel = $_POST ["tel"];
$email = $_POST ["email"];
$psw = $_POST ["contra"];

$objU=new Usuario ( "",$nombre, $apat, $amat, $tel, $email, $psw);
$crud = new UserDao();
$crud->registrar($objU);