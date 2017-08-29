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
session_start();


if (isset($_POST["submit"])) {
    $usuario = $_POST["user"];
    $password = $_POST["pass"];

    $sql = "SELECT * from usuario WHERE usuario='" . $usuario . "' and contraseña='" . $password . "';";
    echo $sql;
    $resultado = $con->query($sql);

    $resultado = $resultado->fetch();
    if ($resultado) {
        $_SESSION['logged_in'] = true;
        header('Location: /views/menu_profesores.php');
    }
}
?>

<section class="row" style="align-content: center">

    <form method="POST">
        <div class="col-8">
            <label>Usuario</label>
            <input type="text" name="user" placeholder="username"/>
        </div>

        <div class="col-8">
            <label>Contraseña</label>
            <input type="password" name="pass" placeholder="password"/>
        </div>

        <input type="submit" name="submit">
    </form>
</section>
</body>
</html>