<?php

session_start();

//Recupero variables

$usuario = $_SESSION['usuario'];
//Creo que lo siguiente genera error
$contrasena = $_SESSION['contrasena'];

$titulo = $_GET['titulo'];
$direccion = $_GET['direccion'];
$categoria = $_GET['categoria'];
$comentario = $_GET['comentario'];
$valoracion = $_GET['valoracion'];

$conexion = sqlite_open('favoritos.db');

$consulta = "SELECT * FROM favoritos WHERE usuario='".$usuario."' AND contrasena='".$contrasena."' AND categoria='".$categoria."' AND comentario='".$comentario."' AND valoracion='".$valoracion."'";

$resultado = sqlite_query($conexion,$consulta);

echo"
<table border=1 width=100%>
<tr>
	<td>Titulo</td>
	<td>Direccion</td>
	<td>Categoria</td>
	<td>Comentarios</td>
	<td>valoracion</td>

</tr>
";


while($fila = sqlite_fetch_array($resultado)){

echo"

<tr><form action='actualizarFavorito.php' method='post'>
	<td><input type='text' name='titulo' value='".$fila['titulo']."'></td>
	<td><input type='text' name='direccion' value='".$fila['direccion']."'></td>
	<td><select name='categoria'>
		<option value='salud'>Salud</option>
		<option value='trabajo'>Trabajo</option>
		<option value='hobby'>Hobby</option>
		<option value='personal'>Persona</option>
		<option value='otros'>Otros</option>
		<option value='.".$fila['categoria']." selected>".$fila['categoria']."</option>
	     </select>	
</td>
	<td><input type='text' name='comentario' value='".$fila['comentario']."'></td>
	<td><inp ut type='text' name='valoracion' value='".$fila['valoracion']."'></td>
</form>

</tr>
";
}

echo "</table>";
$_SESSION['titulo']=$titulo;

sqlite_close($conexion);

?>
