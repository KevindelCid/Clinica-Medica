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





        <h2 class="mb-4">Antecedentes</h2>
        <h6>Ingresar los datos que se solicitan</h6> 
 

        <div class="col-md-12">
          <div class="box">
            <!-- <h3 class="heading">How Can We Help?</h3> -->
            <form class="mb-5" method="post" id="contactForm" name="contactForm">
              <div class="row">
                
                <div class="col-md-6 form-group">
                  <label for="name" class="col-form-label">Antecedentes familiares</label>
                  <input type="text" class="form-control" name="fam" id="fam" placeholder="Familiares">
                </div>
                <div class="col-md-6 form-group">
                  <label for="name" class="col-form-label">Antecedentes Médicos</label>
                  <input type="text" class="form-control" name="med" id="med" placeholder="Médicos">
                </div>
                <div class="col-md-6 form-group">
                  <label for="name" class="col-form-label">Antecedentes Alérgicos</label>
                  <input type="text" class="form-control" name="aler" id="aler" placeholder="Alérgicos">
                </div>
                <div class="col-md-6 form-group">
                  <label for="name" class="col-form-label">Antecedentes Quirúrgicos</label>
                  <input type="text" class="form-control" name="quir" id="quir" placeholder="Quirúrgicos">
                </div>
                <div class="col-md-12 form-group">
                  <label for="name" class="col-form-label">Antecedentes Traumáticos</label>
                  <input type="text" class="form-control" name="trau" id="trau" placeholder="Traumáticos">
                </div>
           
                <div class="col-md-12 form-group">
                <h6>Obstétricos</h6> 
 
                  <label for="name" class="col-form-label">Antecedentes Obstétricos</label>
                  <input type="text" class="form-control" name="obs" id="obs" placeholder="Obstétricos">
                </div>
                <div class="col-md-6 form-group">
                <label for="name" class="col-form-label">Meses de gestación</label>
                  <input type="number" class="form-control" name="gest" id="gest" placeholder="Gestación">
                </div>
                <div class="col-md-6 form-group">
                <label for="name" class="col-form-label">Numero de Partos</label>
                  <input type="number" class="form-control" name="part" id="part" placeholder="Partos">
                </div>
                <div class="col-md-6 form-group">
                <label for="name" class="col-form-label">Numero de Cesáreas</label>
                  <input type="number" class="form-control" name="cesar" id="cesar" placeholder="Cesáreas">
                </div>
                <div class="col-md-6 form-group">
                <label for="name" class="col-form-label">Numero de Abortos</label>
                  <input type="number" class="form-control" name="ab" id="ab" placeholder="Abortos">
                </div>
                <div class="col-md-6 form-group">
                <label for="name" class="col-form-label">Menarquia</label>
                  <input type="text" class="form-control" name="mena" id="mena" placeholder="Menarquia">
                </div>
                <div class="col-md-6 form-group">
                <label for="name" class="col-form-label">Última regla</label>
                  <input type="text" class="form-control" name="ur" id="ur" placeholder="Última regla">
                </div>


           
                <div class="col-md-12 form-group">
                  <label for="message" class="col-form-label">Hábitos</label>
                  <textarea placeholder="Hábitos..." class="form-control" name="hab" id="hab" cols="30" rows="3"></textarea>
                </div>
            
                <div class="col-md-12  form-group">
                  <input type="submit" name="aggpacyc" id="aggpacyc"  value="Siguiente" class="btn btn-block btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
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
$variable1=$_GET["id_consulta"];

if(isset($_POST['aggpacyc'])){



    
$sql = "INSERT INTO antecedentes  VALUES (null, ".$variable1.", '".$_POST['fam']."','".$_POST['med']."','".$_POST['quir']."','".$_POST['trau']."','".$_POST['obs']."','".$_POST['gest']."','".$_POST['part']."','".$_POST['cesar']."','".$_POST['ab']."','".$_POST['mena']."','".$_POST['ur']."','".$_POST['hab']."','".$_POST['aler']."')";


if (mysqli_query($conexion, $sql)) {

 

      echo "<p style=\"color: white;\">-</p> <span class=\"input-group-addon\" style=\"color: white;\">--------------------------------------------------------------------------------</span> El paciente se ha ingresado a la base de datos  <img src=\"src/sistema/success.png\"
      alt=\"La cabeza y el torso de un esqueleto de dinosaurio; tiene una cabeza grande con dientes largos y afilados\" width=\"30\"height=\"30\">";


      header("Estamos redireccionandote...");



      header("Location: http://localhost/CLINICA-MEDICA/examen-fisico.php?id_consulta=". $variable1);
      
      exit;


} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}






}



?>
<?php
ob_end_flush();
?>