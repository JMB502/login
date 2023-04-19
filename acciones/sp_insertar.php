<?php
$modelo = $_POST['modelo'];
$marca = $_POST['marca'];
$imei = $_POST['imei'];

$host="localhost";
$user="root";
$pass ="";

$db = "login_registro_db";

$conexion = mysqli_connect($host,$user, $pass, $db);

 $sql = "INSERT INTO celulares  (modelo,marca,imei) 
 VALUES ('$modelo', '$marca', '$imei' )";
 $rta = mysqli_query($conexion, $sql);

if (!$rta) {
    echo " NO SE INSERTO DATO ";

} else {

    header("Location: ../inicio.php");
}

?>