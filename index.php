<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="css/estilos.css" type="text/css" />
    <title>Listar datos</title>
  </head>
  <body>
    <h3>Listado de Profesores</h3>
    <table>
    <tr>
        <td>Nombres</td>
        <td>Apellidos</td>
        <td>Titulo</td>
        <td>Edad</td>
    </tr>
    
    <?php
      include("basedatos.php");
      function convertirMayuscula($dato){
          // función que permite 
          // pasar una cadena a mayúscula 
          return strtoupper($dato);
      }
      // se realizar la consulta a la base de datos
      $consultaBD = $conectaBD -> query("Select * from Profesores");
      while($registro = $consultaBD -> fetch_array(MYSQLI_ASSOC)){
        $formato = "<tr>
          <td>%s</td><td>%s</td><td>%s</td><td>%d</td>
          </tr>";
        // se agrega una fila a la tabla HTML
        echo sprintf($formato, convertirMayuscula($registro['nombres']), 
          convertirMayuscula($registro['apellidos']),
          convertirMayuscula($registro['titulo']),
          convertirMayuscula($registro['edad'])); 
          
      }
    ?>
    </table>
    <a href="nuevo.php">Nuevo Profesor</a>
    
    <h3>Listado de estudiantes modalidad semipresencial</h3>
    <table>
    <tr>
        <td>Nombres</td>
        <td>Apellidos</td>
        <td>Nro de asignaturas</td>
        <td>costo por asignatura</td>
        <td>costo Matricula</td>
    </tr>
    <?php
      include("basedatos.php");
      function convertirMayuscula($dato){
          // función que permite 
          // pasar una cadena a mayúscula 
          return strtoupper($dato);
      }
      // se realizar la consulta a la base de datos
      $consultaBD = $conectaBD -> query("Select * from Estudiantes_Semipresencial");
      while($registro = $consultaBD -> fetch_array(MYSQLI_ASSOC)){
        $formato = "<tr>
          <td>%s</td><td>%s</td><td>%d</td><td>%f</td><td>%f</td>
          </tr>";
        // se agrega una fila a la tabla HTML
        echo sprintf($formato, convertirMayuscula($registro['nombres']), 
          convertirMayuscula($registro['apellidos']),
          convertirMayuscula($registro['nro_asignaturas']),
          convertirMayuscula($registro['costo_asignatura']), 
          convertirMayuscula($registro['costo_matricula']));
      }
    ?>
    </table>
    <a href="nuevo.php">Nuevo Estudiante Semipresencial</a>
  </body>
</html>
