<?php
      // proceso para guardar un nuevo registro a la base de datos
      include("basedatos.php");
      $nombres = $_REQUEST['nombresP'];
      $apellidos = $_REQUEST['apellidosP'];
      $titulo = $_REQUEST['titulo'];
      $edad = intval($_REQUEST['edad']);
      $cadena = "insert into `Profesores`( `nombres`, `apellidos`,`titulo`, 
        `edad`) values ('%s', '%s', '%s', %d);"; 
      $cadena = sprintf($nombres, $apellidos, $titulo, $edad);
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

