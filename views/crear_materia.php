<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crear Asignatura</title>

    <link rel="stylesheet" href="../css/grid.css">


</head>

<header>
    <?php
    include 'menu_secreteria.php';
    ?>
</header>
<body>
<form action="crear_materia.php" method="POST">
    <section style="text-align: center; margin-top:50px;">

        <div class="col-8">
            <label>Profesor</label>
            <select name="profesor">
                <?php
                require_once 'conexion.php';
                $sql = "SELECT nombre,id_profesor from profesor";
                $resultado = $con->query($sql);
                foreach ($resultado as $row) { ?>
                    <option value="<?php echo $row['id_profesor']; ?>"><?php echo $row['nombre']; ?></option>
                <?php } ?>

            </select>


        </div>

        <div class="col-8" style="margin-top:20px;">
            <label>Materia</label>
            <input type="text" name="materia" placeholder="nombre de la materia"/>

        </div>

        <input type="submit" name="crear_materia" value="Crear Materia" style="margin-top:7px" ;>

    </section>
</form>

</body>
</html>
<?php
if (isset($_POST['materia'])) {
    $nombre_asignatura = $_POST['materia'];
    $id_profesor = $_POST['profesor'];
    $sql = "INSERT INTO asignatura (id_asignatura, id_profesor, nombre_asignatura) VALUES (NULL, '$id_profesor', '$nombre_asignatura')";
    $con->exec($sql);
}
?>

       