<?php
      // proceso para guardar un nuevo registro a la base de datos
      include("basedatos.php");
      $nombres = $_REQUEST['nombresA'];
      $apellidos = $_REQUEST['apellidosA'];
      $nro_asignaturas = $_REQUEST['nro_asignaturas'];
      $costoA = $_REQUEST['costoA'];
      $costoM = intval($_REQUEST['costoM']);
      $cadena = "insert into `Estudiantes_Semipresencial`( `nombres`, `apellidos`,`nro_asignaturas`, 
        `costo_asignatura`, `costo_matricula`) values ('%s', '%s', %d, %f, %f);"; 
      $cadena = sprintf($nombres, $apellidos, $nro_asignaturas, $costoA, $costoM);
      echo $cadena;
      $consultaBD = $conectaBD -> query($cadena);
      
      if($consultaBD){
        // si hay existo con la inserción, 
        // se realiza un redirect a index.php
        header("Location: index.php");
      }else{
        // si exite un error
        // se captura el error
        // se hace un redirect a nuevo.php
        // además se envía el mensaje de error
        // como parámetro
        $mensaje = $conectaBD -> error;
        header("Location: nuevo.php?error=".$mensaje);
      }
?>

