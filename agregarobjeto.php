<?php

    include "config/conexion.php";

    $nombreobjeto =$_POST["Nombre"];
    $descripcionobjeto = $_POST["Descripcion"];
    $imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

    $sql = "INSERT INTO `objetos` ( Nombre , Descripcion , Imagen) VALUES ('$nombreobjeto','$descripcionobjeto','$imagen')";

    $resultado = $conexion -> query($sql);

    if ($resultado) {
        header('Location: index.php');
    }else {
        echo "No se insertaron los datos";
    }

 

