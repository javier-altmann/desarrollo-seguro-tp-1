<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ingresar Notas</title>

    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/tabla.css">
    
    
</head>

<header>
    <? include 'menu_profesores.php'; ?>
</header>
<body>
    <div class="col-8" style="margin-top:20px;">
        <label>Materia</label>
         <select name="materia">
          <?
           require_once 'conexion.php';
             $sql = "select profesor.id_profesor, asignatura.nombre_asignatura, asignatura.id_asignatura
                    from  profesor
                    INNER JOIN asignatura
                    ON profesor.id_profesor = asignatura.id_profesor;";
            $resultado = $con->query($sql);
             ?>
         <? foreach($resultado as $row){ ?>
          <option value="<? echo $row['id_asignatura']; ?>"><? echo $row['nombre_asignatura']; ?></option>
          <?}?>
        
        </select>
            <input type="submit" name="listado_alumnos" value="Lista de alumnos" style="margin-top:7px";>
            
             <table>
                 <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Nota</th>
                  </tr>
              <tr>
                <td>Juan</td>
                <td>Gomez</td>
                 <td>8</td>
                 <td><input type="submit" value="Guardar Nota"></td>
              </tr>
              
            </table>
           
    </div>
</body>
</html>

<?
    //HACER SELECT PARA FILTRAR LOS ALUMNOS POR MATERIA

?>