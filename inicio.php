<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->

    <title>INICIO</title>
</head>
<body>
    <center>
        <h1>Bienvenido  </h1>
    </center>

    <div>
        <form action="acciones/buscar.php" method="post">
            <input type="text" name="buscar" id="">
            <input type="submit" value ="BUSCAR">
            <a href = "acciones/nuevo.php"> NUEVO </a>

        </form>
    </div>
     <div>

        <table border = "2" >
            <tr>
                <td> ID </td>
                <td> MODELO </td>
                <td> MARCA </td>
                <td> IMEI </td>
            </tr>

            <!-- CONEXION TABLA CELULARES -->
            <?php 
           $host="localhost";
           $user="root";
           $pass ="";
           
           $db = "login_registro_db";
           
           $conexion = mysqli_connect($host,$user, $pass, $db);

            $sql = "SELECT id,modelo,marca,imei FROM celulares order by id desc";
            $rta = mysqli_query($conexion, $sql);
            while ($mostrar = mysqli_fetch_row($rta)) {

                ?> 

                <tr>
                    <td><?php echo $mostrar ['0'] ?> </td>
                    <td><?php echo $mostrar ['1'] ?> </td>
                    <td><?php echo $mostrar ['2'] ?> </td>
                    <td><?php echo $mostrar ['3'] ?> </td>
                    <td>
                        <a href="acciones/editar.php?
                    id= <?php echo $mostrar ['0'] ?> &
                    modelo= <?php echo $mostrar ['1'] ?> &
                    marca= <?php echo $mostrar ['2'] ?> & 
                    imei= <?php echo $mostrar ['3'] ?> 
                    
                        
                        ">EDITAR</a>
                        <a href="acciones/sp_eliminar.php?  id= <?php echo $mostrar ['0'] ?>
                        ">ELIMINAR</a>

                    </td>
                </tr>

                <?php 
            }
            ?>
            

            
            
        </table>
     </div>

    <hr> 
    <a href="cerrarsesion.php" type="submit" >CERRAR SESION</a>
    
</body>
</html>