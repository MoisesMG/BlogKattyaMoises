<?php
$destino="laleskalopezklm@gmail.com";
$nombre=$_POST["nombreCompleto"];
$sexo=$_POST["Sexo"];
$correo=$_POST["correo"];
$mensaje=$_POST["mensaje"];

$contenido="Nombre". $nombre. "\nSexo: ".$sexo. "\nCorreo: ". $correo. "\nMensaje: ".$mensaje;
mail($destino,"Contacto",$contenido);
?>