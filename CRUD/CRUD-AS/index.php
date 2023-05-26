<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Uniremington</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1b9d46552b.js" crossorigin="anonymous"></script>
</head>



<body>
    <script>
        function eliminar(){
            var respuesta=confirm("¿estas seguro que deseas eliminar?");
            return respuesta
        }

    </script>
    <h1 class="text-center p3">Estudiantes Arquitectura de software</h1>
    <?php
    include "modelo/conexion.php";
    include "controlador/eliminar.php"
        ?>

    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Registro Estudiantes</h3>
            <div class="mb-3">
                <label for="codigo" class="form-label">Codigo del estudiante</label>
                <input type="text" class="form-control" name="codigo">
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del estudiante</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido del estudiante</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo del estudiante</label>
                <input type="mail" class="form-control" name="correo">
            </div>
            <div class="mb-3">
                <label for="celular" class="form-label">Celular del estudiante</label>
                <input type="text" class="form-control" name="celular">
            </div>
            <div class="mb-3">
                <label for="ciudad" class="form-label">Ciudad del estudiante</label>
                <input type="text" class="form-control" name="ciudad">
            </div>

            <?php

            include "controlador/registro_persona.php";

            ?>
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>
        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-warning">
                    <tr>
                        <th scope="col">Codigo</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Celular</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "MODELO/conexion.php";
                    $sql = $conexion->query(" select * from estudiante ");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>

                            <td>
                                <?= $datos->CODIGO ?>
                            </td>
                            <td>
                                <?= $datos->NOMBRE ?>
                            </td>
                            <td>
                                <?= $datos->APELLIDO ?>
                            </td>
                            <td>
                                <?= $datos->CORREO ?>
                            </td>
                            <td>
                                <?= $datos->CELULAR ?>
                            </td>
                            <td>
                                <?= $datos->CIUDAD ?>
                            </td>
                            <td>
                                <a href="editar.php?id=<?= $datos->CODIGO ?>" class="btn btn-small btn-warning"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <a onclick="return eliminar()" href="index.php?id=<?= $datos->CODIGO ?>" class="btn btn-small btn-danger"><i
                                        class="fa-solid fa-trash"></i></a>

                            </td>
                        </tr>
                    <?php }
                    ?>

                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>