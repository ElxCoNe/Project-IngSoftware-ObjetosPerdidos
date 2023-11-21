<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Modificar objeto</title>
</head>

<body>
    <?php
        include "config/conexion.php";
        $Id = $_REQUEST['Id'];

        $sql = "SELECT * FROM objetos WHERE Id = $Id";
        $resultado = $conexion->query($sql);

        $Fila = $resultado->fetch_assoc();

    ?>

    <div class="container">
        <br>
        <center>
            <h1>Modificar objeto</h1>
        </center>
        <form action="editarobjeto.php?Ideditar=<?php echo $Fila["Id"]?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombreobjeto" value="<?php echo $Fila['Nombre']?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="descripcionobjeto" value="<?php echo $Fila['Descripcion']?>">
        </div>

        <img style="width: 200px;" src="data:image/jpg;base64,<?php echo base64_encode($Fila['Imagen'])?>" alt="">

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Imagen</label>
            <input type="File" class="form-control" name="imagenobjeto">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
        <a href="index.php" class="btn btn-info">Regresar</a>
        </form>


    </div>

</body>

</html>