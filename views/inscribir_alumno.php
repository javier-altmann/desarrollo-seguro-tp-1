<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscribir Alumnos</title>

    <link rel="stylesheet" href="../css/grid.css">


</head>

<header>
    <?php include 'menu_secretaria.php'; ?>
</header>
<body>
<form action="inscribir_alumno.php" method="POST">
    <section style="text-align: center; margin-top:50px;">

        <div class="col-8">
            <label>Materia</label>
            <select name="materia">
                <?php
                require_once 'conexion.php';
                $sql = "SELECT * from asignatura";
                $resultado = $con->query($sql);
                ?>
                <?php foreach ($resultado as $row) { ?>
                    <option value="<?php echo $row['id_asignatura']; ?>"><?php echo $row['nombre_asignatura']; ?></option>
                <?php } ?>

            </select>


        </div>

        <div class="col-8" style="margin-top:10px;">
            <label>Alumno</label>
            <select name="alumno">
                <?php
                require_once 'conexion.php';
                $sql = "SELECT * from alumno";
                $resultado = $con->query($sql);
                ?>
                <?php foreach ($resultado as $row) { ?>
                    <option value="<?php echo $row['id_alumno']; ?>"><?php echo $row['nombre'] . $row['apellido']; ?></option>
                <?php } ?>

            </select>

        </div>


        <input type="submit" name="inscribir_alumno" value="Inscribir Alumno" style="margin-top:7px" ;>

    </section>

</form>

</body>
</html>
<?php

if (isset($_POST['inscribir_alumno'])) {
    $id_asignatura = $_POST['materia'];
    $id_alumno = $_POST['alumno'];
    $sql = "INSERT INTO cursada (id_cursada, id_asignatura, id_alumno) VALUES (NULL, '$id_asignatura', '$id_alumno')";
    $con->exec($sql);
}
?>
          