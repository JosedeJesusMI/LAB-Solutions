<?php

$nivel1="1";
$nivel2="2";
$nivel3="3";
$nivel4="4";

if(!empty($_POST["enviar"])){
    if(empty($_POST["user"]) and empty($_POST["pass"]) or empty($_POST["user"]) or empty($_POST["pass"])){
    echo '<div class="ojo">LLena todos los campos</div>';
    }else{
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    /*coroboramos si existe el usuario y si continuara al suguiente if*/ 
    $sql=$conection->query(" select * from usuarios where Usuario='$user' and Password='$pass' ");
    if($datos=$sql ->fetch_object()){
        /*Aqui obtendremos el nivel de acceso*/
        $prueba=$conection->query("select Nivel_usuario from usuarios where Usuario='$user'");
        while ($row = $prueba->fetch_assoc()) {
        $ayuda=$row['Nivel_usuario'];
        }
        if($nivel1 == $ayuda){
            header("location:NivelAcceso/Administrador.php");
        }elseif($nivel2 == $ayuda){
            header("location:NivelAcceso/Supervisor.php");
        }elseif($nivel3 == $ayuda){
            header("location:NivelAcceso/Cliente.php");
        }elseif($nivel4 == $ayuda){
            header("location:NivelAcceso/Tecnico.php");
        }
    
    }else{
        echo '<div class="error">Usuario o contraseña erronea</div>';
    }
    }
}
?>




