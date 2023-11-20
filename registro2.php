 <?php
  $mysql = new mysqli("localhost", "root", "", "libreria_nep");
  if ($mysql->connect_error)
    die('Problemas con la conexion a la base de datos');

  $mysql->query("insert into estudiante(correo_estudiante,password_estudiante,nombre_estudiante,apellido_estudiante,direccion_estudiante,telefono_estudiante) values ('$_REQUEST[Correo]','$_REQUEST[Contraseña]','$_REQUEST[Nombre]','$_REQUEST[Apellido]','$_REQUEST[Direccion]','$_REQUEST[Telefono]')") or
    die($mysql->error);

  $mysql->close();
   header('Location: menu.html');
   exit;      
  ?>