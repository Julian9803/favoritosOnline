<?php

session_start();
echo 'Tu Usuario es:';

echo $_SESSION['usuario'];
echo '<br>';
echo 'Tu Contraseña es: ';
echo $_SESSION['contrasena'];

//Crear Conexion
$conexion = sqlite_open('favoritos.db');

//Establecer Consulta
$consulta = "SELECT * FROM usuarios ;";

//Esctablecer la conexion
$resultado = sqlite_query($conexion, $consulta);

//Imprimir la consulta
echo "
<table border=1 width=100 >
<tr>
<td>Usuario</td>
<td>Contraseña</td>
<td>Nombre</td>
<td>Apellido</td>
<td>Edad</td>
<td></td>
<td></td>
</tr>
";


while ($fila = sqilte_fetch_array($resultado)){
echo "<tr><td>" .$fila['usuario']."</td><td>".$fila['contrasena']."</td><td>".$fil['nombre']."</td><td>".$fila['apellido']."</td><td>".$fila['edad']."</td><td></td></tr>";;
} 
//Añadir u n Registro
echo "
<tr>
	<form action='crearFavorito.php' method = 'POST'>
	<td><input type='text' name='titulo'></td>
	<td><input type='text' name='direccion'></td>
	<td><select name='categoria'>
		<option value='salud'>Salud</option>
		<option value='trabajo'>Trabajo</option>
		<option value='hobby'>Hobby</option>
		<option value='personal'>Persona</option>
		<option value='otros'>Otros</option>
	</td>
	<td><input type='text' name='comentario'></td>
	<td><input type='text' name='valoracion'></td>
	<td><input type='submit'></td>
</tr>
";
echo "</table";

//Cerramos la conexion
sqlite_close($conexion);

?>


 
