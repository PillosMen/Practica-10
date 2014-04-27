<?php 
//Invocamos la cadena de conexión que se encuentra en el archivo conexion.php

require('conex.php');

//Recibimos los parametros enviados mediante POST por el Formulario


$clave=$_POST["clave"];
$nombre=$_POST["nombre"];
$descripcion=$_POST["descripcion"];
$precio=$_POST["precio"];

echo "clave: ".$clave; 
echo "nombre: ".$nombre; 
echo "descripcion: ".$descripcion;
echo "precio: ".$precio;

$insertar = mysqli_query($enlace,"INSERT INTO productos (clave, nombre, descripcion, precio) VALUES ('$clave','$nombre','$descripcion','$precio')");
if (!$insertar){
	echo "Error al guardar";
}
else{
	echo "Guardado con exito";
	header("location: directorio.php");
}

?>

<?php
// mysqli_close() es el evivalente a mysql_close() sirve para finalizar la conexión.
mysqli_close($enlace);

?>