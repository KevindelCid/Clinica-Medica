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
  	<title>Agregar Historia</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href='fullcalendar/main.css' rel='stylesheet' />
    <script src='fullcalendar/main.js'></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="css/formpacientes.css"/>
  </head>
  <body>
		

  <div class="contenedor_loader">
     
     <img class ="coso2" src="src/login/login.jpeg" id="icon" alt="User Icon" width="400px" height="300px"/>
   <div class="loader"></div>
   </div>


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





        <h2 class="mb-4">Motivo de Consulta</h2>
        <h6>Ingresar la razon de visita del paciente</h6> 
 




        <div class="col-md-12">
          <div class="box">
            <!-- <h3 class="heading">How Can We Help?</h3> -->
            <form class="mb-5" method="post" id="contactForm" name="contactForm">
              <div class="row">
                
              

           

              <div class="row">
                <div class="col-md-20 form-group">
                  <label for="message" class="col-form-label"></label>
                  <textarea placeholder="Motivo de la consulta..." class="form-control" name="motivo" id="motivo" cols="170" rows="10"></textarea>
                </div>
              </div>
     
              <div class="row">
                <div class="col-md-20">
                  <input type="submit" name="aggpacyc" id="aggpacyc"  value="Siguiente" class="btn btn-block btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                </div>
              </div>
            
            </form>

  </div>
    
  <script src="js/olcu.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
<?php






include_once("conexion.php");

if(isset($_POST['aggpacyc'])){





date_default_timezone_set("America/Guatemala");
$hoy = date("Y-m-d H:i:s");
$id = $_GET['id'];
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



}



?>
<?php
ob_end_flush();
?>