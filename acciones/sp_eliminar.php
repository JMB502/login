<?php
$id = $_GET['id'];


$host="localhost";
$user="root";
$pass ="";

$db = "login_registro_db";

$conexion = mysqli_connect($host,$user, $pass, $db);

 $sql = "DELETE FROM celulares where id like $id"; 
 $rta = mysqli_query($conexion, $sql);

if (!$rta) {
    echo " NO SE ELIMINO";

} else {

    header("Location: ../inicio.php");
}

?>