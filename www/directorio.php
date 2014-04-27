<?php
require_once('contacto.php');
require_once('listarContactos.php');
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
         <link rel="stylesheet" href="miestilo.css">
    <title>Ejemplo de PHP y MySQL</title>
    <meta charset="UTF-8"> 
    </head>
    <body>

        <header><img src="productos.jpg"  /></header>

        <form method="POST" action="22.html">
        <input type="submit" value="Nuevo" /><p />
        </form>


        <?php
            $modelo = new Contacto();
            $contactos = $modelo->encontrarTodos();
            $listar = new ListarContactos();
            $listar->contactos = $contactos;
            $listar->generaTabla();
        ?>

        <ul class="navbar">
  <li><a href="index.php">Pagina principal</a>
  <li><a href="programacion.html">Programacion</a>
  <li><a href="juegos.html">Video juegos</a>
  <li><a href="redes.html">Redes</a>
</ul>
    </body>
</html>

