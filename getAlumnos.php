<?php

require "./conexion.php";

$db = getConnection();

header('content-type application/json charset=utf-8');

$row = array();
$sql = "select * from alumno";
$result = mysqli_query($db, $sql); //varios registros

while($fila = mysqli_fetch_assoc($result)){
    $row[] = $fila;
}

echo json_encode($row);
mysqli_free_result($result);
mysqli_close($db);

?>