<?php


error_reporting(1);

include "config/conexion.php";

$Id = $_REQUEST['Ideditar'];

$Nombre = $_POST['nombreobjeto'];
$Descripcion = $_POST['descripcionobjeto'];
$imagen = addslashes(file_get_contents($_FILES['imagenobjeto']['tmp_name']));


$sql = "UPDATE objetos SET 
Nombre = '$Nombre', 
Descripcion = '$Descripcion',
Imagen = '$imagen' WHERE Id = $Id";


$resultado = $conexion->query($sql);

if ($resultado) {
    header("Location:index.php");
}else {
    echo "No se edito el objeto";
}