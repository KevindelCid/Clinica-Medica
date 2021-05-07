<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Inicio de sesión</h2>
    <!-- <h2 class="inactive underlineHover">Inicia sesión</h2> -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="src/login/login.png" id="icon" alt="User Icon" />
    </div>
   
    <!-- Login Form -->
    <form method="POST">
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="Nombre de usuario" required>
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Contraseña"  required>
      <input type="submit" class="fadeIn fourth" value="Iniciar Sesión" name="btnlogin" id="btnlogin" >
    

    </form>
   
    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Olvidó su contraseña?</a>
    </div>
    <?php
include_once("conexion/conexion.php");

if(isset($_POST['btnlogin'])){

$usuario = $_POST['login'];
$contrasenia = $_POST['password'];


$query = 'SELECT * FROM usuarios WHERE nombre_usuario="'.$usuario.'" AND pass="'.$contrasenia.'"';

$resultado = mysqli_query($conexion, $query);


if (mysqli_num_rows($resultado)>0)
{
// si se encontró
header("Location: http://localhost/CLINICA-MEDICA/home.php");
exit;

} else {
//no se encontró

echo"Usuario o contraseña incorrecto";

}

}


?>

  </div>
</div>
</body>
</html>
