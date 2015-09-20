<?php
//Obtendre las variables
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
//Conexion

$conexion = sqlite_open('favoritos.db');
//Consulta

$consulta = 
<<<SQL
INSERT INTO usuarios VALUES('$usuario','$contrasena','$nombre','$apellido','$edad',3 )

SQL;
//Ejecutar
$resultado = sqlite_exec($conexion,$consulta);

//Cerrar
sqlite_close($conexion);

?>
