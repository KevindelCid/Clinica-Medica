<?php
ob_start();

session_start();
$sesion = $_SESSION['usuario'];

if($sesion == null || $sesion == ""){



  header("Location: http://localhost/CLINICA-MEDICA/login.php");
  exit;

}


?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Página principal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href='fullcalendar/main.css' rel='stylesheet' />
    <script src='fullcalendar/main.js'></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/formpacientes.css"/>
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active">
				<h1><a href="home.php" class="logo">CM</a></h1>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="home.php"><span class="fa fa-home"></span> Página principal</a>
          </li>
          <li class="active">
            <a href="consulta.php"><span class="fa fa-pencil-square-o"></span> Nueva Consulta</a>
          </li>
          <li>
              <a href="nuevo_paciente.php"><span class="fa fa-user"></span> Nuevo Paciente</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-users"></span> Pacientes</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-money"></span> Facturación</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-table"></span> Agenda</a>
          </li>
        </ul>

        <div class="footer">
        	<p>
					  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
					</p>
        </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Pagina Principal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>





        <h2 class="mb-4">Primera cosulta</h2>
        <h6>Ingrese los datos que se solicitan a continuación</h6> 
 
        <!-- <form method="POST" action="primera-consulta.php">
<div class="container">
  <div class="row">
    <div class="col-xs-6 col-md-10">
      <div class="form-group">
        <label for="">Información básica del nuevo paciente</label>
        <div class="input-group">
          <input name="ape1" id="remitosucursal" type="text" required class="form-control" placeholder="Primer Apellido">
          <span class="input-group-addon" style="color: white;">-</span>
          <input name="ape2" id="ape2" type="text" required class="form-control" placeholder="Segundo Apellido">
          <span class="input-group-addon" style="color: white;">--------------</span>
          <input name="nom1" id="remitosucursal" type="text" required class="form-control" placeholder="Primer Nombre">
          <span class="input-group-addon" style="color: white;">-</span>
          <input name="nom2" id="remitonumero" type="text" required class="form-control" placeholder="Segundo Nombre">
        </div>
        <label for="">Nro. remito</label>
        <div class="input-group">
          <input name="fecha" id="remitosucursal" type="date" required class="form-control" placeholder="Fecha de Nacimiento">
          <span class="input-group-addon" style="color: white;">-</span>
          <select name="sexo" value="Hombre/Mujer" id="remitonumero" type="text" required class="form-control" placeholder="Segundo Apellido">
          <option value="value1"selected >Seleccione el Sexo</option>
  <option value="value2" >Masculino</option>
  <option value="value3">Femenino</option>
        </select>
          <span class="input-group-addon" style="color: white;">--------------</span>
          <input name="naci" id="remitosucursal" type="text" required class="form-control" placeholder="Lugar de nacimiento">
          <span class="input-group-addon" style="color: white;">-</span>
          <input name="resi" id="remitonumero" type="text" required class="form-control" placeholder="Lugar de recidencia">
        </div>
        <label for="">Información clínica</label>
        <div class="input-group">
        <textarea name="Text1" cols="40" class="input-group-addon" rows="5" placeholder="Motivo de la consulta"></textarea>
          <span class="input-group-addon" style="color: white;">-</span>
         
        </div>
      </div>
    </div>
  </div>
  <p></p>
  <button type="submit" class="btn btn-primary" name="aggpac" id="aggpac" >Agregar el nuevo Paciente.</button>
  <button onclick="location.href='primera-consulta.php'"type="submit" name="aggpacyc" id="aggpacyc" class="btn btn-success">Agregar y Continuar con una consulta</button>
</div>

        </form> -->



        <div class="col-md-6">
          <div class="box">
            <!-- <h3 class="heading">How Can We Help?</h3> -->
            <form class="mb-5" method="post" id="contactForm" name="contactForm">
              <div class="row">
                
                <div class="col-md-6 form-group">
                  <label for="name" class="col-form-label">  </label>
                  <input type="text" class="form-control" name="ape1" id="ape1" placeholder="Primer Apellido">
                </div>
                
                <div class="col-md-6 form-group">
                  <label for="name" class="col-form-label"></label>
                  <input type="text" class="form-control" name="ape2" id="ape2" placeholder="Segundo Apellido">
                </div>
                <div class="col-md-6 form-group">
                  <label for="name" class="col-form-label">  </label>
                  <input type="text" class="form-control" name="nom1" id="nom1" placeholder="Primer Nombre">
                </div>
                <div class="col-md-6 form-group">
                  <label for="name" class="col-form-label"></label>
                  <input type="text" class="form-control" name="nom2" id="nom2" placeholder="Segundo Nombre">
                </div>
                <div class="col-md-6 form-group">
                  <label for="name" class="col-form-label">  </label>
                  <input type="number" class="form-control" name="tel" id="tel" placeholder="Teléfono">
                </div>

                <div class="col-md-6 form-group">
                  <label for="name" class="col-form-label">Fecha de nacimiento</label>
                  <input type="date" class="form-control" name="fecha" id="fecha" placeholder="fecha de nacimiento">
                </div>
                
                <div class="col-md-6 form-group">
                  <label for="name" class="col-form-label">Selecciona el sexo</label>
                  <select class="custom-select" id="sexo" name="sexo">
                  <option value="" >Género...</option>
       <option value="M" >Masculino</option>
    <option value="F">Femenino</option>
      </select>
                </div>
                <div class="col-md-6 form-group">
                  <label for="name" class="col-form-label">  </label>
                  <input type="text" class="form-control" name="naci" id="naci" placeholder="Lugar de nacimiento">
                </div>
                <div class="col-md-6 form-group">
                  <label for="name" class="col-form-label"></label>
                  <input type="text" class="form-control" name="resi" id="resi" placeholder="Lugar de recidencia">
                </div>
              </div>


           

              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="message" class="col-form-label"></label>
                  <textarea placeholder="Motivo de la consulta..." class="form-control" name="motivo" id="motivo" cols="30" rows="7"></textarea>
                </div>
              </div>
     

              <div class="row">
                <div class="col-md-12">
                  <input type="submit" name="aggpacyc" id="aggpacyc"  value="Siguiente" class="btn btn-block btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                </div>
              </div>
            </form>

            <div id="form-message-warning mt-4"></div> 
            <div id="form-message-success">
              Al precionar el botón "Agregar una nueva consulta" este evento consulta será accesible por el Dr. y solamente él podrá editar el resto de la imformacion de esta consulta y visualizarla posteriormente.
            </div>
          </div>
        </div>
      </div>
  </div>
    

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
<?php

include_once("conexion.php");

if(isset($_POST['aggpacyc'])){



    
$sql = "INSERT INTO pacientes  VALUES (null, '".$_POST['ape1']."', '".$_POST['ape2']."','".$_POST['nom1']."','".$_POST['nom2']."','".$_POST['sexo']."','".$_POST['fecha']."','".$_POST['naci']."','".$_POST['resi']."',CURDATE(),'".$_POST['tel']."','".$_POST['tel']."');";


if (mysqli_query($conexion, $sql)) {

 

      echo "<p style=\"color: white;\">-</p> <span class=\"input-group-addon\" style=\"color: white;\">--------------------------------------------------------------------------------</span> El paciente se ha ingresado a la base de datos  <img src=\"src/sistema/success.png\"
      alt=\"La cabeza y el torso de un esqueleto de dinosaurio; tiene una cabeza grande con dientes largos y afilados\" width=\"30\"height=\"30\">";

} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


date_default_timezone_set("America/Guatemala");
$id= mysqli_insert_id($conexion);
$hoy = date("Y-m-d H:i:s");
$sqlc = "INSERT INTO consultas  VALUES (null, '".$id."', '".$hoy."','".$_POST['motivo']."')";
if (mysqli_query($conexion, $sqlc)) {

  $id_consulta= mysqli_insert_id($conexion);

  echo "<p style=\"color: white;\">-</p> <span class=\"input-group-addon\" style=\"color: white;\">--------------------------------------------------------------------------------</span> La consulta ha sido agregada  <img src=\"src/sistema/success.png\"
  alt=\"chequess\" width=\"30\"height=\"30\">";

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sqlcUp = " update pacientes set id_ultima_consulta = $id_consulta where id_paciente =  
(select id_paciente from consultas where id_consulta = $id_consulta)";

if (mysqli_query($conexion, $sqlcUp)) {

  

  echo "<p style=\"color: white;\">-</p> <span class=\"input-group-addon\" style=\"color: white;\">--------------------------------------------------------------------------------</span> La consulta ha sido agregada  <img src=\"src/sistema/success.png\"
  alt=\"chequess\" width=\"30\"height=\"30\">";

} else {
  echo "Error en el update pacientes: " . $sql . "<br>" . mysqli_error($conn);
}





header("Estamos redireccionandote...");
header("Location: http://localhost/CLINICA-MEDICA/historia.php?id_consulta=". $id_consulta);


exit;



}





?>
<?php
ob_end_flush();
?>