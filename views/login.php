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
//change 'valid_username' and 'valid_password' to your desired "correct" username and password
if (!empty($_POST) && $_POST['user'] === 'emanuel' && $_POST['pass'] === 'paz')
{
    $_SESSION['logged_in'] = true;

    header('Location: /views/menu_profesores.php');
}
else
{
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
    <?php
    }
    ?>
</section>
</body>
</html>