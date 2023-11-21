    <?php

        include "config/conexion.php";

        $Id = $_REQUEST['Id'];

        $sql = "DELETE FROM objetos WHERE Id = $Id";

        $resultado = $conexion -> query($sql);

        if($resultado){
            header("Location: index.php");

        }else{
            echo "No se elimino el dato";
        }