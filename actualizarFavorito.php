<?php

session_start();

$conexion = sqlite_open('favoritos.db');
 $usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

$titulo = $_POST['titulo'];
$direccion = $_POST['direccion'];
$categoria = $_POST['categoria'];
$comentario = $_POST['comentario'];
$valoracion = $_POST['valoracion'];

$tituloantiguo = $_SESSION['titulo'];

$consulta = "UPDATE favoritos SET titulo='".$titulo."', direccion='".$direccion."', categoria".$categoria."comentario='".$comentario."', valoracion='".$valoracion."' WHERE titulo='".$tituloantiguo."'";


$resultado = sqlite_query($conexion,$consulta)

echo '
<html>
	<head>
		<meta http-equiv="REFRESH" content="0; url=principal.php">
	</head>
</html>
';

?>



