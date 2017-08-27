<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link rel="stylesheet" href="css/grid.css">

</head>
<body>

<?php

require_once 'conexion.php';

if (isset($_POST["login"])) {
    $sql = "select profesor.id_profesor, asignatura.nombre_asignatura, asignatura.id_asignatura
                    from  profesor
                    INNER JOIN asignatura
                    ON profesor.id_profesor = asignatura.id_profesor;";
    $resultado = $con->query($sql);

}

?>

<section class="row" style="align-content: center">

    <form>
        <div class="col-8">
            <label>Usuario</label>
            <input type="text" name="username" placeholder="username"/>
        </div>

        <div class="col-8">
            <label>Contraseña</label>
            <input type="password" name="password" placeholder="password"/>
        </div>

        <input type="submit" name="login">
    </form>

</section>
</body>
</html>