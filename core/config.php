<?php
//CONECCION BASE DE DATOS
$link = mysqli_connect("localhost","root","","locatina") or die("Error " . mysqli_error($link));
$site_url = 'http://localhost/locatina/';
$relative_folder = '/locatina';
//set_include_path(get_include_path() . PATH_SEPARATOR . 'C:\xampp\htdocs\locatina');
include './lang/views_es.php';
?>