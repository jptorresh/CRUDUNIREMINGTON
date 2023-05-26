<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["codigo"]) and ($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["correo"]) and !empty($_POST["celular"]) and !empty($_POST["ciudad"])) {

        $codigo = $_POST["codigo"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];
        $celular = $_POST["celular"];
        $ciudad = $_POST["ciudad"];

        $sql=$conexion->query("insert into estudiante(CODIGO,NOMBRE,APELLIDO,CORREO,CELULAR,CIUDAD)values('$codigo','$nombre','$apellido','$correo','$celular','$ciudad') ");
        if ($sql == 1) {
            echo '<div class="alert alert-success">Estudiante Registrado Correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar el Estudiante</div>';
        }
        } else {
        echo "FALTA ALGUN CAMPO";
    }
}

?>