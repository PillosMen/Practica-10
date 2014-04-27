<?php
class ListarContactos
{
    public $contactos;

    public function generaTabla()
    {
        echo "<table border=1 >";
             echo "<tr bgcolor='#CCCCCC'>";
                echo '<th>ID</th>';
                echo '<th>CLAVE</th>';
                echo '<th>PRODUCTO</th>';
                echo '<th>DESCRIPCION</th>';
                echo '<th>PRECIO</th>';
                echo '<th>OPCIONES</th>';
            echo '</tr>';
            foreach($this->contactos as $contacto){
                echo '<tr>';
                    echo '<td valign="middle">'.$contacto['id']. '</td>';
                    echo '<td>'.$contacto['clave'].'</td>';
                    echo '<td>'.$contacto['nombre'].'</td>';
                    echo '<td>'.$contacto['descripcion'].'</td>';
                    echo '<td> $'.$contacto['precio'].'</td>';
                    echo '<td><a href = "update.php?id='. $contacto['id'].'"><img src="modificar.gif" > <a href = "borrar.php?id='. $contacto['id'].'"><img src="borrar.png" > <a href = "ver.php?id='. $contacto['id'].'"><img src="ver.png" >';
                  
                echo '</tr>';
            }
        echo "</table>";
    }

}

?>
