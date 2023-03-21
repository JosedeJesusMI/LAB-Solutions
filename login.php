<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login LAB</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="CSS/styles.css">
</head>

<body>
    
    <form  class="form-box animate fadeInUp"
    class="form-box" method="post" action="" >

        <img src="imagen/usuarios.png" class="imagen">
        <h1 class="form-title">Bienvenido</h1>
        <input type="text" placeholder="Usuario" name="user">
        <input type="password" placeholder="Contraseña" name="pass">

        <?php
        include("conexion.php");
        include("controlador.php");
        
        ?>
        
        <input type="submit" name="enviar" value="Login">
        
    </form>


</body>
</html>