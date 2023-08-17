<?php

require './conexion.php';
$db = getConnection();

if($_SERVER['REQUEST_METHOD']=='POST'){

    $codigo = $_POST['codigo'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $sql = "insert into alumno(codigo,nombres,apellidos,usuario,password) values('$codigo','$nombres','$apellidos','$usuario','$password')";

    if(mysqli_query($db, $sql)){
        $result["success"] = "1";
        $result["message"] = "success";
        echo json_encode($result);
        mysqli_close($db);
    } else {
        $result["success"] = "0";
        $result["message"] = "error";
        echo json_encode($result);
        mysqli_close($db);
    }

}


?>