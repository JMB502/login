<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$id = $_GET['id'];
$modelo = $_GET['modelo'];
$marca = $_GET['marca'];
$imei = $_GET['imei'];


?>

    <div>
        <form action="sp_editar.php" method="post">
        <table border ="1">
            <tr>
                <td>INGRESAR DATOS: </td>
                <td><input type="text" name="id" id="" style="visibility: hidden;" value="<?=$id?>"> </td>
            </tr>
            <tr>
                <td>MODELO: </td>
        <td><input type ="text" name ="modelo" id="" value="<?=$modelo?>"> </td>
            </tr>
                <td>MARCA: </td>
        <td><input type ="text" name ="marca" id="" value="<?=$marca?>"> </td>
            <tr>
        
            <td>IMEI: </td>
        <td><input type ="text" name ="imei" id=""  value="<?=$imei?>"> </td>
        </tr>  
        <tr>
    <td><input type ="submit" value= "ACTUALIZAR "> </td>
    <td><a href="../inicio.php">CANCELAR</a></td>
        </tr>   
        </table>




        </form>
    </div>
    
</body>
</html>