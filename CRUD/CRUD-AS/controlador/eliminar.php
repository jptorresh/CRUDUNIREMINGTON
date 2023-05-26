<?php

if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $conexion->query("delete from estudiante where CODIGO=$id ");
    if ($sql == 1) {
        echo '<div class="alert alert-success">Eliminacion de estudiante es exitosa</div>';
    } else {
        echo '<div class="alert alert-danger>Eliminacion de estudiante presenta error</div>';
    }
}
?>