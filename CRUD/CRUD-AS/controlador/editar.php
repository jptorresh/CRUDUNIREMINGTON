<?php

if (!empty($_POST["btneditar"])) {
    if (!empty($_POST["codigo"]) and !empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["correo"]) and !empty($_POST["celular"]) and !empty($_POST["ciudad"])) {
            $id = $_POST["id"];
            $codigo=$_POST["codigo"];
            $nombre=$_POST["nombre"];
            $apellido=$_POST["apellido"];
            $correo=$_POST["correo"];
            $celular=$_POST["celular"];
            $ciudad=$_POST["ciudad"];
            $sql=$conexion->query(" update estudiante set CODIGO=$codigo, NOMBRE='$nombre', APELLIDO='$apellido', CORREO='$correo', CELULAR='$celular', CIUDAD='$ciudad' where CODIGO=$id  ");
            if ($sql==1) {
                header("location:index.php");
            } else {
                echo "<div class='alert alert-danger'>Error edicion fallida</div>";
            }
            
    } else {
        echo "<div class='alert alert-warning'>Error campos vacios</div>";
    }
}

?>