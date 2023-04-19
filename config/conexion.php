 <?php
/* DATOS DEL SERVIDOR*/
$host="localhost";
$user="root";
$pass ="";

$db = "login_registro_db";

$conexion = mysqli_connect($host,$user, $pass, $db);

if (!$conexion){

    echo "conexion fallida";
}