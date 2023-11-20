<?php
session_start();
    $conexion = mysqli_connect("localhost", "root", "", "libreria_nep") or
        die("Problemas con la conexión");

$varcorreo = $_REQUEST['Correo'];
$varcontraseña = $_REQUEST['Contraseña'];

$resultado = mysqli_query($conexion, "select *
from estudiante where correo_estudiante='$varcorreo' and password_estudiante='$varcontraseña'") or
    die("Problemas en el select:" . mysqli_error($conexion));

if (mysqli_num_rows($resultado)>0){
 header('Location: menu.html');
 exit;
}
else {
 header('Location: about.html');
 exit;
} 

?>