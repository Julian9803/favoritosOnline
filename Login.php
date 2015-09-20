<?php

session_start();

//Obtener variables
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

//Crearemos conexion
$conexion = sqlite_open('favoritos.db');

//Consulta
$consulta = "SELECT * FROM usuarios";
//Lanzar la Consulta

$resultado = sqlite_query($conexion,$consulta);

//Repasar los resultados
while($fila = sqlite_fetch_array($resuktado)){
$usuariobasedatos = $fila['usuario'];
$contrasenabasedatos = $fila['contrasena'];

if($usuario == $usuariobasedatos & $contrasena == $contrasenabasedatos){
//Si el rsultado es positivo entnoces asignar


$_SESSION['usuario'] = $usuario;
$_SESSION['contrasena'] = $contrasena;

echo '
<html>
	<head>
		<meta http-equiv="REFRESH" content="0; url=principal.php">
	</head>
</html>
';

}else{
//Si el resultado es negatiov, entonces nada
}
}
//Cerramos la conexion

?>
