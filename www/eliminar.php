<?php 

require('conex.php');

$id=$_POST['id'];

$clave=$_POST["clave"];
$nombre=$_POST["nombre"];
$descripcion=$_POST["descripcion"];
$precio=$_POST["precio"];

echo "clave: ".$clave; 
echo "nombre: ".$nombre; 
echo "descripcion: ".$descripcion;
echo "precio: ".$precio;

$insertar = mysqli_query($enlace," DELETE FROM productos WHERE id=".$id.";");
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