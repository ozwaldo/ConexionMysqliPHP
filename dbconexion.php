<?php
// dbconexion.php
require("dbconfig.php");

$conexion = mysqli_connect(
    DB_HOST,
    DB_USUARIO,
    DB_PASSWORD,
    DB_NOMBRE
);

if(!$conexion) {
    echo "Conexión no realizada. Error: " . 
            mysqli_connect_error();            
} else {
    echo "Conexión realizada con la base de datos " 
            . DB_NOMBRE;
}
mysqli_close($conexion);

?>