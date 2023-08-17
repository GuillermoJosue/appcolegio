<?php

function getConnection(){
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $bd = "app_colegio";

    $mysqli = mysqli_connect($servidor,$usuario,$password,$bd) or die("Fallo en la conexion de la BD");
    return $mysqli;
}

?>