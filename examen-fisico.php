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
                  <input type="text" class="form-control" name="pa" id="pa" placeholder="Presión arterial">
                </div>
                <div class="col-md-6 form-group">
                  <label for="name" class="col-form-label">Pulso (80*min)</label>
                  <input type="number" class="form-control" name="pul" id="pul" placeholder="Pulso">
                </div>
                <div class="col-md-6 form-group">
                  <label for="name" class="col-form-label">Frecuencia Respiratoria (*min)</label>
                  <input type="number" class="form-control" name="fr" id="fr" placeholder="Frecuencia Respiratoria">
                </div>
                <div class="col-md-6 form-group">
                  <label for="name" class="col-form-label">Frecuencia Cardiaca (*min)</label>
                  <input type="number" class="form-control" name="fc" id="fc" placeholder="Frecuencia Cardiaca">
                </div>
                <div class="col-md-12 form-group">
                  <label for="name" class="col-form-label">Temperatura ( ℃ )</label>
                  <input type="number" class="form-control" name="temp" id="temp" placeholder="Temperatura">
                </div>
           
                <div class="col-md-6 form-group">
                  <label for="name" class="col-form-label">Talla (cms)</label>
                  <input type="number" class="form-control" name="t" id="t" placeholder="Talla">
                </div>
                <div class="col-md-6 form-group">
                  <label for="name" class="col-form-label">Peso (lbs)</label>
                  <input type="number" class="form-control" name="p" id="p" placeholder="Peso">
                </div>
                <div class="col-md-12 form-group">
                  <label for="name" class="col-form-label">Indice de masa corporal (IMC)</label>
                  <label for="name" class="col-form-label">Los campos desabilitados se calcularán automaticamente</label>
            
                </div>

                <div class="col-md-3 form-group">
                <label for="name" class="col-form-label">IMC</label>
                      <input type="number" class="form-control" name="imc" id="imc" placeholder="IMC" >

                </div>
                <div class="col-md-3 form-group">
                <label for="name" class="col-form-label">Categoría de peso</label>
                      <input type="text" class="form-control" name="catpeso" id="catpeso" placeholder="Categoría de peso" >

                </div>
                
                <div class="col-md-3 form-group">
                <label for="name" class="col-form-label">Peso ideal (lbs)</label>
                      <input type="number" class="form-control" name="pesoi" id="pesoi" placeholder="Peso ideal" >

                </div>
                <div class="col-md-3 form-group">
                <label for="name" class="col-form-label">Exceso de peso (lbs)</label>
                      <input type="number" class="form-control" name="ep" id="ep" placeholder="Peso ideal" >

                </div>
      
                <div class="col-md-3  form-group">
               
                <label for="name" class="col-form-label">Calcular IMC</label>
                  <input type="button" name="calc" id="calc" onclick = "funcion();"  value="Calcular IMC" class="btn btn-block btn-success rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                </div>
                <script>
  function funcion(){
    let talla = document.getElementById("t").value; 
    let peso =  document.getElementById("p").value;
    var elem1 = document.getElementById("catpeso");
    let pesos = peso;
    peso = peso/2.2;
    t = talla/100;
    t = t *t;
    let imc = peso/t;

    let pesoideal = talla*0.90;

let expeso = pesos - pesoideal;

  
    document.getElementById("pesoi").value=Math.round(pesoideal);
    document.getElementById("imc").value=Math.round(imc);
    document.getElementById("ep").value=Math.round(expeso);



if(imc<18.5){
    document.getElementById("catpeso").value="Bajo Peso";
    elem1.style.color = "white"
    elem1.style.backgroundColor = "blue";


}else if(imc>18.4 && imc<25){
    document.getElementById("catpeso").value="Peso Normal";
    elem1.style.color = "white"
    elem1.style.backgroundColor = "green";


}else 



if(imc>25 && imc <30){
    document.getElementById("catpeso").value="Sobrepeso";
    elem1.style.color = "white"
    elem1.style.backgroundColor = "#FF9900";


}
else if(imc>30 && imc <35){
    document.getElementById("catpeso").value="Obesidad grado 1";
    elem1.style.color = "white"
    elem1.style.backgroundColor = "#FF6633";

}
else if(imc>34 && imc <40){
    document.getElementById("catpeso").value="Obesidad grado 2";
    elem1.style.color = "white"
    elem1.style.backgroundColor = "#FF3300";

}
else if(imc>39 && imc <50){
    document.getElementById("catpeso").value="Obesidad grado 3";
    elem1.style.color = "white"
    elem1.style.backgroundColor = "red";

}
else if(imc>49 && imc <60){
    document.getElementById("catpeso").value="Súper Obesidad";
    elem1.style.color = "white"
    elem1.style.backgroundColor = "#990000";

}
else if(imc>59){
    document.getElementById("catpeso").value="Súper Súper Obesidad";
    elem1.style.color = "white"
    elem1.style.backgroundColor = "#330000";

}
}
</script>
             



           
                <div class="col-md-12 form-group">
                  <label for="message" class="col-form-label">Observaciones</label>
                  <textarea placeholder="Observaciones..." class="form-control" name="obs" id="obs" cols="30" rows="3"></textarea>
                </div>
            
                <div class="col-md-12  form-group">
                  <input type="submit" name="aggpacyc" id="aggpacyc"  value="Finalizar recolección de datos" class="btn btn-block btn-primary rounded-0 py-2 px-4">
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



    
$sql = "INSERT INTO examenes_fisicos  VALUES (null, ".$variable1.", '".$_POST['pa']."','".$_POST['pul']."','".$_POST['fr']."','".$_POST['fc']."','".$_POST['temp']."','".$_POST['t']."','".$_POST['p']."','".$_POST['imc']."','".$_POST['catpeso']."','".$_POST['pesoi']."','".$_POST['ep']."','".$_POST['obs']."')";


if (mysqli_query($conexion, $sql)) {

 

      echo "<p style=\"color: white;\">-</p> <span class=\"input-group-addon\" style=\"color: white;\">--------------------------------------------------------------------------------</span> El paciente se ha ingresado a la base de datos  <img src=\"src/sistema/success.png\"
      alt=\"La cabeza y el torso de un esqueleto de dinosaurio; tiene una cabeza grande con dientes largos y afilados\" width=\"30\"height=\"30\">";
      

header("Estamos redireccionandote...");



header("Location: http://localhost/CLINICA-MEDICA/home.php?Consulta_Agregada");


exit;

} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}




}




?>
<?php
ob_end_flush();
?>