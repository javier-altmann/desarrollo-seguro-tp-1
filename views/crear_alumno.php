<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Secretaria</title>

    <link rel="stylesheet" href="../css/grid.css">
   
    
</head>

<header>
     <?php include 'menu_secreteria.php'; ?>
</header>
<body>
   <form action="crear_alumno.php" method="POST">
   <section style="text-align: center; margin-top:50px;">
  
    <div class="col-8">
        <label>Nombre alumno</label>
        <input type="text" name="nombre" placeholder="alumno"/>
    </div>

    <div class="col-8" style="margin-top:20px;">
        <label>Apellido</label>
        <input type="text" name="apellido" placeholder="apellido"/>
    </div>

    <input type="submit" name="crear_alumno" value="Crear alumno" style="margin-top:7px";>
    

      
    </section>
     </form>
   
</body>
</html>
  <?php 
           require_once '../helper/dbhelper.php';
           if (isset($_POST["crear_alumno"])) {
              DBHelper::crearAlumno($_POST['nombre'], $_POST['apellido']);
           }
       
          ?>