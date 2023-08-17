<?php

require './conexion.php';
$db = getConnection();

header('content-type application/json charset=utf-8');
$usuario = $_POST['usuario'];
$password = $_POST['password'];

$row = array();
$sql = "select * from alumno where usuario = '$usuario' and password = '$password' ";
$result = mysqli_query($db, $sql); //varios registros
$row_count = mysqli_num_rows($result);

if($row_count > 0){
    $data['success'] = $row_count;
    $data['message'] = "success";
    echo json_encode($data);
    mysqli_close($db);
}else{
    $data['success'] = $row_count;
    $data['message'] = "usuario o password incorrecto";
    echo json_encode($data);
    mysqli_close($db);
}

?>