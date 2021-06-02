<?php
ob_start();
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
        	<!-- <p>
					  Copyright &copy;<script>document.write(new Date().getFullYear());</script>  <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
					</p> -->
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





        <h2 class="mb-4">Exámen Físico</h2>
        <h6>Ingresar los datos que se solicitan</h6> 
 

        <div class="col-md-12">
          <div class="box">
            <!-- <h3 class="heading">How Can We Help?</h3> -->
            <form class="mb-5" method="post" id="contactForm" name="contactForm">
              <div class="row">
                
                <div class="col-md-6 form-group">
                  <label for="name" class="col-form-label">Presión Arterial</label>
                  <input type="text" class="form-control" name="fam" id="fam" placeholder="Presión arterial">
                </div>
                <div class="col-md-6 form-group">
                  <label for="name" class="col-form-label">Pulso (80*min)</label>
                  <input type="number" class="form-control" name="med" id="med" placeholder="Pulso">
                </div>
                <div class="col-md-6 form-group">
                  <label for="name" class="col-form-label">Frecuencia Respiratoria (*min)</label>
                  <input type="number" class="form-control" name="med" id="med" placeholder="Frecuencia Respiratoria">
                </div>
                <div class="col-md-6 form-group">
                  <label for="name" class="col-form-label">Frecuencia Cardiaca (*min)</label>
                  <input type="number" class="form-control" name="med" id="med" placeholder="Frecuencia Cardiaca">
                </div>
                <div class="col-md-12 form-group">
                  <label for="name" class="col-form-label">Temperatura ( ℃ )</label>
                  <input type="number" class="form-control" name="med" id="med" placeholder="Temperatura">
                </div>
           
                <div class="col-md-6 form-group">
                  <label for="name" class="col-form-label">Talla (cms)</label>
                  <input type="number" class="form-control" name="med" id="med" placeholder="Talla">
                </div>
                <div class="col-md-6 form-group">
                  <label for="name" class="col-form-label">Peso (lbs)</label>
                  <input type="number" class="form-control" name="med" id="med" placeholder="Peso">
                </div>
                <div class="col-md-12 form-group">
                  <label for="name" class="col-form-label">Indice de masa corporal (IMC)</label>
                  <label for="name" class="col-form-label">Los campos desabilitados se calcularán automaticamente</label>
            
                </div>

                <div class="col-md-3 form-group">
                <label for="name" class="col-form-label">IMC</label>
                      <input type="number" class="form-control" name="med" id="med" placeholder="IMC" disabled>

                </div>
                <div class="col-md-3 form-group">
                <label for="name" class="col-form-label">Categoría de peso</label>
                      <input type="text" class="form-control" name="med" id="med" placeholder="Categoría de peso" disabled>

                </div>
                
                <div class="col-md-3 form-group">
                <label for="name" class="col-form-label">Peso ideal (lbs)</label>
                      <input type="number" class="form-control" name="med" id="med" placeholder="Peso ideal" disabled>

                </div>
      
                <div class="col-md-3  form-group">
               
                <label for="name" class="col-form-label">Calcular IMC</label>
                  <input type="submit" name="calc" id="calc"  value="Calcular IMC" class="btn btn-block btn-success rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                </div>
            
             



           
                <div class="col-md-12 form-group">
                  <label for="message" class="col-form-label">Observaciones</label>
                  <textarea placeholder="Observaciones..." class="form-control" name="motivo" id="motivo" cols="30" rows="3"></textarea>
                </div>
            
                <div class="col-md-12  form-group">
                  <input type="submit" name="aggpacyc" id="aggpacyc"  value="Finalizar recolección de datos" class="btn btn-block btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                </div>
            
             
            </form>

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



    
$sql = "INSERT INTO pacientes  VALUES (null, '".$_POST['ape1']."', '".$_POST['ape2']."','".$_POST['nom1']."','".$_POST['nom2']."','".$_POST['sexo']."','".$_POST['fecha']."','".$_POST['naci']."','".$_POST['resi']."')";


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

 

  echo "<p style=\"color: white;\">-</p> <span class=\"input-group-addon\" style=\"color: white;\">--------------------------------------------------------------------------------</span> La consulta ha sido agregada  <img src=\"src/sistema/success.png\"
  alt=\"chequess\" width=\"30\"height=\"30\">";

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


header("Estamos redireccionandote...");



header("Location: http://localhost/CLINICA-MEDICA/historia.php");


exit;


}




?>
<?php
ob_end_flush();
?>