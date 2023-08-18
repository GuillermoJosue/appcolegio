<?php

function getConnection(){
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $bd = "app_colegio";

    $mysqli = mysqli_connect($servidor,$usuario,$password,$bd) or die("Fallo en la conexion de la BD");
    return $mysqli;
}
/*
//para conectar con la base de datos de 000webhostapp.com
function getConnection(){
    $servidor = "localhost";
    $usuario = "id21158399_root";
    $password = "Idat123!";
    $bd = "id21158399_bdidat";

    $mysqli = mysqli_connect($servidor,$usuario,$password,$bd) or die("Fallo en la conexion de la BD");
    return $mysqli;
}
*/

?>