<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link rel="stylesheet" href="css/grid.css">

</head>
<body>

<?php

session_start();
    
try {
 	$conexion = new PDO('mysql:host=localhost;dbname=tp01', 'root' , '');
 } catch (Exception $e) {
 	echo "ERROR A LA CONECCION DE LA BASE DE DATOS";
 } 
  
    
if (isset($_POST["submit"])) {
    $query = "SELECT * FROM usuario WHERE usuario = '".$_POST['usuario']  . "' AND contrasenia = '" .  $_POST['password'] . "'"; 
    $sql = $conexion->prepare($query);
    $sql->execute();
    
   $resultado = $sql->fetchAll();    
  
    
   
    if ($resultado) {
        $_SESSION['logged_in'] = true;
        header('Location: ./ingresar_notas.php');
    }
}
?>

<section class="row" style="align-content: center">

    <form method="POST">
        <div class="col-8">
            <label>Usuario</label>
            <input type="text" name="usuario" placeholder="username"/>
        </div>

        <div class="col-8">
            <label>Contraseña</label>
            <input type="password" name="password" placeholder="password"/>
        </div>

        <input type="submit" name="submit">
    </form>
</section>
</body>
</html>







 




