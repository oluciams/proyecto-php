<?php

session_start();

$_SESSION["user"] = "aprendiz";
$_SESSION["status"] = "logueado";

echo "sesion iniciada";
echo "usuario ".$_SESSION["user"]."estatus".$_SESSION["status"];

?>
