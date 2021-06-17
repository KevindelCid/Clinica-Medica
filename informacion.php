
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
  	<title>Consultas de </title>



    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/styletab.css">








    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Raleway:300,400,500,700">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="./css/libs.css">
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="./css/style.css">
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

        <h2 class="mb-4">aqui solo llamo toda la info de esta consulta...</h2>

<?php


include_once("conexion.php");

$id = $_GET['id'];

//con esta consulta llamaremos a todos los pacientes y l
$sql = " select fecha_consulta, motivo_consulta, apellido1,apellido2,nombre1,nombre2,sexo, 
YEAR(CURDATE())-YEAR(`pacientes`.`f_nacimiento`) + 
IF(DATE_FORMAT(CURDATE(),'%m-%d') > DATE_FORMAT(`pacientes`.`f_nacimiento`,'%m-%d'), 0 , -1 ) 
AS `EDAD_ACTUAL`, `pacientes`.`telefono`,`historias`.`historia`,`antecedentes`.`antecedentes_familiares`,
`antecedentes`.`antecedentes_medicos`,`antecedentes`.`antecedentes_quirurgicos`,`antecedentes`.`antecedentes_traumaticos`,
`antecedentes`.`obstetricos`,`antecedentes`.`gestacion`,`antecedentes`.`partos`,`antecedentes`.`cesareas`,
`antecedentes`.`abortos`,`antecedentes`.`menarquia`,`antecedentes`.`ur`,`antecedentes`.`habitos`,`antecedentes`.`antecedentes_alergicos`,
`examenes_fisicos`.`presion_arterial`,`examenes_fisicos`.`pulso`,`examenes_fisicos`.`freq_resp`,`examenes_fisicos`.`freq_cardiaca`,
`examenes_fisicos`.`temperatura`,`examenes_fisicos`.`talla`,`examenes_fisicos`.`peso`,`examenes_fisicos`.`imc`,
`examenes_fisicos`.`peso_cat`,`examenes_fisicos`.`peso_ideal`,`examenes_fisicos`.`exceso_peso`,`examenes_fisicos`.`observaciones`
from consultas inner join pacientes 
ON consultas.id_paciente = pacientes.id_paciente
inner join historias ON consultas.id_consulta = historias.id_consulta
inner join antecedentes ON consultas.id_consulta = antecedentes.id_consulta
inner join examenes_fisicos on consultas.id_consulta = examenes_fisicos.id_consulta
where consultas.id_consulta = $id";

$resultado = mysqli_query($conexion,$sql);


?>



<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Apelido 1</th>
        <th scope="col">Apellido 2</th>
        <th scope="col">Nombre 1</th>
        <th scope="col">Nombre 2</th>
        <th scope="col">Sexo</th>
        <th scope="col">Teléfono</th>
        <th scope="col">Edad</th>
        <th scope="col">IMC</th>
        <th scope="col">Actuadores</th>
       
        
      </tr>
    </thead>
    <tbody>
      <?php  $contador =0; while($filas=mysqli_fetch_assoc($resultado)) { $contador++;?>
      <tr>
        <th scope="row"><?php echo $contador ?></th>
        <td><?php echo $filas['apellido1'] ?></td>
        <td><?php echo $filas['apellido2'] ?></td>
        <td><?php echo $filas['nombre1'] ?></td>
        <td><?php echo $filas['nombre2'] ?></td>
        <td><?php echo $filas['sexo'] ?></td>
        <td><?php echo $filas['telefono'] ?></td>
        <td><?php echo $filas['EDAD_ACTUAL'] ?></td>
        <td><?php echo $filas['imc'] ?></td>
     
<td>

        <input onclick="location.href='informacion.php?id=<?php echo $filas['id_paciente'] ?>';" type="submit" name="nconsul" id="nconsul"  value="Información" class="btn btn-block btn-primary rounded-0 py-2 px-4">
        </td>

      </tr>
      <?php } ?>
     
    </tbody>
  </table>
</div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
      
      
      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>