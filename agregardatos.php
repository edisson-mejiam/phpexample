<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="css/estilos.css" type="text/css" />
    <title>Ingresar datos</title>
  </head>
  <body>
    <?php
        if($_GET['error']){
          echo "<h5>". $_GET['error'] ."</h5>";
        }
    ?>
    <h2>Ingrese datos del profesor</h2>
    <div class="miformulario">
        <form action="agregarProfesor.php" method="post">
            <label for="nombresP">Ingrese los nombres del profesor</label>
            <input type="text" name="nombresP" id="nombresP" required/>
            <br/>
            <br/>
            <label for="apellidosP">Ingrese apellidos del profesor</label>
            <input type="text" name="apellidosP" id="apellidosP" required/>
            <br/>
            <br/>
            <label for="titulo">Ingrese el titulo del profesor< label>
            <input type="text" name="titulo" id="titulo" required/>
            <br/>
            <br/>
            <label for="tipo">Ingrese la edad del profesor</label>
            <input type="number" name="edad" id="edad" required/>
            <br/>
            <br/>
            <input type="submit" name="agregarP" id="agregarP" value="Agregar Profesor" />
        </form>
    </div>
    
    <h2>Ingrese datos del estudiante</h2>
    <div class="miformulario">
        <form action="agregarEstudiante.php" method="post">
            <label for="nombresA">Ingrese los nombres del alumno</label>
            <input type="text" name="nombresA" id="nombresA" required/>
            <br/>
            <br/>
            <label for="apellidosA">Ingrese los apellidos del alumno</label>
            <input type="text" name="apellidosA" id="apellidosA" required/>
            <br/>
            <br/>
            <label for="nro_asignaturas">Ingrese el numero de asignaturas del alumno</label>
            <input type="number" name="nro_asignaturas" id="nro_asignaturas" required/>
            <br/>
            <br/>
            <label for="costoA">Ingrese el costo por asignatura </label>
            <input type="number" name="costoA" id="costoA" required/>
            <br/>
            <br/>
            <label for="costoM">Ingrese el costo de la matricula</label>
            <input type="number" name="costoM" id="costoM" required/>
            <br/>
            <br/>

            <input type="submit" name="agregarA" id="agregarA" value="Agregar Alumno" />
        </form>
    </div>
  </body>
</html>
