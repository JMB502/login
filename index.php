 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   
   <link rel="stylesheet" href="css/estilos.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title> </title>
 </head>
 <body>
    <form action="iniciarsesion.php " method ="POST">
        <h1>INICIAR SESION</h1>
        <hr> 
        <?php
        if (isset($_GET['error'])){
            ?>
            <p class="error">

            <?php

            echo $_GET['error']
            ?>

            </p>
             <?php
        }
        
        ?>

        <i class="fa-solid fa-user"></i>
        <label for="">Usuario</label>
        <input type="text" name="usuario" placeholder="nombre usuario">

        <i class="fa-solid fa-unlock"></i>
        <label for="">Clave</label>
        <input type="password" name="clave" placeholder="contraseña">
        <hr>
        <button type="submit">INICIAR SESION</button>
        <a href ="registrarse.php">CREAR CUENTA</a>

    </form>
     
 </body>
 </html> 