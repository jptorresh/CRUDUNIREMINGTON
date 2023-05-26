<?php
include "modelo/conexion.php";
$id = $_GET["id"];

$sql = $conexion->query("select * from estudiante where CODIGO=$id ");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar estudiante Uniremington</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center text-secondary">Edicion Estudiante</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"]?>">
        <?php
    include "controlador/editar.php";
        while ($datos = $sql->fetch_object()) { ?>
            <div class="mb-1">
                <label for="codigo" class="form-label">Codigo del estudiante</label>
                <input type="text" class="form-control" name="codigo" value="<?= $datos->CODIGO ?>">
            </div>
            <div class="mb-1">
                <label for="nombre" class="form-label">Nombre del estudiante</label>
                <input type="text" class="form-control" name="nombre" value="<?= $datos->NOMBRE ?>">
            </div>
            <div class="mb-1">
                <label for="apellido" class="form-label">Apellido del estudiante</label>
                <input type="text" class="form-control" name="apellido" value="<?= $datos->APELLIDO ?>">
            </div>
            <div class="mb-1">
                <label for="correo" class="form-label">Correo del estudiante</label>
                <input type="mail" class="form-control" name="correo" value="<?= $datos->CORREO ?>">
            </div>
            <div class="mb-1">
                <label for="celular" class="form-label">Celular del estudiante</label>
                <input type="text" class="form-control" name="celular" value="<?= $datos->CELULAR ?>">
            </div>
            <div class="mb-1">
                <label for="ciudad" class="form-label">Ciudad del estudiante</label>
                <input type="text" class="form-control" name="ciudad" value="<?= $datos->CIUDAD ?>">
            </div>
        <?php }
        ?>



        <button type="submit" class="btn btn-primary" name="btneditar" value="ok">Guardar Edicion</button>
    </form>

</body>

</html>