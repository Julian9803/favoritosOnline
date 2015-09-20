<?php 

//CREAR UNA TABLA DE FAVORIOTS---------------------

//Conexion
$conexion = sqlite_open('favoritos.db') or die ('Ha sido imposible establecer la conexion');

//Crear Tabla
$consulta =
<<<SQL
CREATE TABLE favoritos(

usuario Char(40) Not Null,
contrasena Char(40) Not Null,
titulo Char(40) Not Null,
direccion Char(100) Not Null,
categoria Char (40),
comentario Char (200),
valoracion Int

); 
SQL;

//Insertar contenido en la tabla
$resultado = sqlite_exec($conexion, $consulta);


//Cerrar la conexion
sqlite_close($conexion);

//Contenido de Prueba para la Tabla de favoritos
//establcer
$conexion = sqlite_open('favoritos.db') or die ('Ha sido imposible conectar la conexion');

//Preparar
$consulta = 
<<<SQL
INSERT INTO favoritos VALUES('jocarsa','jocarsa','Google','www.google.com','Tecnologia','Este es un buscador muy famoso',10);

INSERT INTO favoritos VALUES('jocarsa','jocarsa','Youtube','www.youtube.com','Tecnologia','Este es un buscador muy famoso',10);
SQL;

//Insertar
$resultado = sqlite_exec($conexion,$consulta);

//Cerrar
sqlite_close($conexion);
//CREAR TABLA DE USUARIOS-------------------------

//Conexion
$conexion = sqlite_open('favoritos.db') or die ('Ha sido imposible establecer la conexion');

//Crear Tabla
$consulta =
<<<SQL
CREATE TABLE usuarios(

usuario Char(40) Not Null,
contrasena Char(40) Not Null,
nombre Char(40) Not Null,
apellido Char(100) Not Null,
edad Char (40),
permisos int

); 
SQL;

//Insertar contenido en la tabla
$resultado = sqlite_exec($conexion, $consulta);
//Cerrar la conexion
sqlite_close($conexion);
//Contenido de Prueba para la Tabla de Usuarios
//establcer
$conexion = sqlite_open('favoritos.db')or die('Ha sido imposible conectar la conexion');

//Preparar
$consulta = 
<<<SQL
INSERT INTO usuarios VALUES('jocarsa','jocarsa','Edison Julian','Puerto',32,1);

SQL;

//Insertar
$resultado = sqlite_exec($conexion,$consulta);

//Cerrar
sqlite_close($conexion);



//CREAR TABLA DE LOGS-------------------------

//Conexion
$conexion = sqlite_open('favoritos.db') or die ('Ha sido imposible establecer la conexion');

//Crear Tabla
$consulta =
<<<SQL
CREATE TABLE logs(

utc Int,
anio Int,
mes Int,
dia Int,
hora Int,
minuto Int,
segundo Int,
ip Char(50),
navegador Char(100),
usuario Char(40),
contrasena Char(40)

); 
SQL;

//Insertar contenido en la tabla
$resultado = sqlite_exec($conexion, $consulta);
//Cerrar la conexion
sqlite_close($conexion);
//Contenido de Prueba para la Tabla de Usuarios
//establcer
$conexion = sqlite_open('favoritos.db')or die('Ha sido imposible conectar la conexion');

//Preparar
$consulta = 
<<<SQL
INSERT INTO logs VALUES(0000000,2015,02,07,21,03,00,'127.0.0.1','Chrome','jocarsa','jocarsa');

SQL;

//Insertar
$resultado = sqlite_exec($conexion,$consulta);

//Cerrar
sqlite_close($conexion);


?>
