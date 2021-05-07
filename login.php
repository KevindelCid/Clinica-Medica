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
    <form>
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="Nombre de usuario">
      <input type="password" id="password" class="fadeIn third" name="login" placeholder="Contraseña">
      <input type="submit" class="fadeIn fourth" value="Iniciar Sesión">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Olvidó su contraseña?</a>
    </div>

  </div>
</div>
</body>
</html>