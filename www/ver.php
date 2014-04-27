<?php

$_GET['id'];

if( $_GET['id']  != "" ){

echo '<link rel="stylesheet" href="miestilo.css">';
//conectamos con MYSQL
mysql_connect("localhost","root","");
//seleccionamos la base de datos "prueba"
mysql_query("use directorio;");


//La consulta se realiza de acuerdo al termino de busqueda
$queryPrimeraTabla = mysql_query("SELECT * from productos where id='".$_GET['id']."';");


//comprobamos si se recupero alguna fila 
//mysql_num_rows() en caso de exito devuelve 1
if( mysql_num_rows($queryPrimeraTabla) > 0 ){


echo "<p />Resultados de la busqueda:";
echo "<p />VER REGISTRO";


while($resultado = mysql_fetch_array($queryPrimeraTabla) ){


?>
<!-- dentro del loop while colocamos un formulario -->
<form>
<!-- Notar este campo hidden (oculto) el mismo cargara el valor del campo "id" -->
Id:<input type="hidden" name="id" value="<?php echo $resultado['id']?>" /> <?php echo $resultado['id']?><p>
<!-- aqui cargamos el valor del campo "nombres" -->
Clave: <?php echo $resultado['clave']; ?><p>
Nombre: <?php echo $resultado['nombre']; ?><p>
Descripcion: <?php echo $resultado['descripcion']; ?><p>
Precio: <?php echo $resultado['precio']; ?><p>

</form>
<!-- dentro del loop while colocamos un formulario -->
<?php


}


}
else{ //if( mysql_num_rows($queryPrimeraTabla) > 0 )
echo "<p />No se encontro <b>".$_GET['id']."</b> en la base de datos.";
} 


} 



?>