<?php
ob_start();
include_once("conexion/conexion.php");

if(isset($_POST['btnlogin'])){

$usuario = $_POST['login'];
$contrasenia = $_POST['password'];



if($usuario == "dani" && $contrasenia =="123"){

    
header("Location: http://google.com");


    exit;
}



// $query = 'SELECT * FROM usuarios WHERE nombre_usuario="'.$usuario.'" AND pass="'.$contrasenia.'"';

// $resultado = mysqli_query($conexion, $query);



// while($datos = mysqli_fetch_assoc($resultado)){

// echo "los datos encontrados son ". $datos["nombre_usuario"]. " y ".$datos["pass"];

// }

// echo "los datos encontrados son ". $datos["nombre_usuario"]. " y ".$datos["pass"];

// exit;
}

?>
