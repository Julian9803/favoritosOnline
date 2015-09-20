<?php 


session_start();

$conexion = sqlite_open('favoritos.db');

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

$titulo = $_GET['titulo'];
$direccion = $_GET['direccion'];
$categoria = $_GET['categoria'];
$comentario = $_GET['comentario'];
$valoracion = $_GET['valoracion'];

$consulta = "DELETE FROM favoritos WHERE usuario ='".$usuario."'  AND contrasena='".$contrasena."' AND titulo='".$titulo."' AND direccion='".$direccion."' AND categoria='".$categoria."' AND comentario='".$comentario."' AND valoracion='".$valoracion."'";

$resultado = sqlite_query($conexion,$consulta);

sqlite_close($conexion);

echo '
<html>
  <head>
	<meta http-equiv="REFRESH" content="0;url=Principal.php">
  </head>
</html>
';  	




?>