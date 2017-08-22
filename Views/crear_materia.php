<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crear Asignatura</title>

    <link rel="stylesheet" href="../css/grid.css">
   
    
</head>

<header>
     <? include 'menu_secreteria.php'; ?>
</header>
<body>
   <form action="crear_asignatura.php" method="POST">
   <section style="text-align: center; margin-top:50px;">
  
    <div class="col-8">
        <label>Profesor</label>
         <select>
          <option value="volvo">pru</option>
          
        </select>
       
    </div>

    <div class="col-8" style="margin-top:20px;">
        <label>Materia</label>
          <input type="text" name="materia" placeholder="nombre de la materia"/>
          
    </div>

    <input type="submit" name="crear_materia" value="Crear Materia" style="margin-top:7px";>
    
    </section>
     </form>
   
</body>
</html>
  <?php 
           require_once '../Helper/dbhelper.php';
            $listado = DBHelper::listarProfesores();
          

            foreach ($listado as $value)
            {
                var_dump($value);
            }
            
         
       
          ?>