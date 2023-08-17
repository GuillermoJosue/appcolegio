<?php

require './conexion.php';
$db = getConnection();

header('content-type application/json charset=utf-8');
$codigo = $_POST['codigo'];

$row = array();
$sql = "select * from alumno where codigo = '$codigo' ";
$result = mysqli_query($db, $sql); //varios registros

while($fila = mysqli_fetch_assoc($result)){
    $row[] = $fila;
}

echo json_encode($row);
mysqli_free_result($result);
mysqli_close($db);

?>