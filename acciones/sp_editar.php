<?php
$id = $_POST['id'];
$modelo = $_POST['modelo'];
$marca = $_POST['marca'];
$imei = $_POST['imei'];

$host="localhost";
$user="root";
$pass ="";

$db = "login_registro_db";

$conexion = mysqli_connect($host,$user, $pass, $db);

 $sql = "UPDATE celulares set  modelo='$modelo',marca='$marca',imei='$imei' where id like $id"; 
 $rta = mysqli_query($conexion, $sql);

if (!$rta) {
    echo " NO SE ACTUALIZO";

} else {

    header("Location: ../inicio.php");
}

?>