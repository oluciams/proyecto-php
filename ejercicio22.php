<?php 
  $archivo = "contenido.txt";

  $archivoAbierto = fopen($archivo, "r");

  $contenido = fread($archivoAbierto, filesize($archivo));

  echo $contenido;

  $nombreArchivo = "archivo.txt";

  $contenidoArchivo = "este es el archivo nuevo que se creo";

  $archivoACrear = fopen($nombreArchivo, "w");

  fwrite($nombreArchivo, $contenidoArchivo);

  fclose($archivoACrear);



?>
