<?php

$_GET['id'];

if( $_GET['id']  != "" ){

mysql_connect("localhost","root","");

mysql_query("use directorio;");

$queryPrimeraTabla = mysql_query("SELECT * from productos where id='".$_GET['id']."';");

if( mysql_num_rows($queryPrimeraTabla) > 0 ){


echo "<p />Resultados de la busqueda:";

while($resultado = mysql_fetch_array($queryPrimeraTabla) ){

?>

<form action="editar.php" method="POST">

Id:<input type="hidden" name="id" value="<?php echo $resultado['id']?>" /> <?php echo $resultado['id']?><p>

Clave:<input type="text" name="clave" value="<?php echo $resultado['clave']; ?>"  /><p>
Nombre:<input type="text" name="nombre" value="<?php echo $resultado['nombre']; ?>"  /><p>
Descripcion:<input type="text" name="descripcion" value="<?php echo $resultado['descripcion']; ?>"  /><p>
Precio:<input type="text" name="precio" value="<?php echo $resultado['precio']; ?>"  /><p>
<input type="submit" value="Guardar" /><p />
</form>

<?php

}

}

echo "<p />No se encontro <b>".$_GET['id']."</b> en la base de datos.";
} 

 

?>