
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
        <link rel="stylesheet" href="css/estilo.css">
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

function cambiaf_a_espanol($fecha){
    preg_match( '/([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})/', $fecha, $mifecha);
    $lafecha=$mifecha[3]."/".$mifecha[2]."/".$mifecha[1];
    return $lafecha;
}
function sex($sexo){

    if($sexo == "F"){

        return "Femenino";

    }else{

        return "Masculino";
    }
}


include_once("conexion.php");

$id = $_GET['id'];

//con esta consulta llamaremos a todos los pacientes y l
$sql = " select fecha_consulta, motivo_consulta, apellido1,apellido2,nombre1,nombre2,sexo, 
YEAR(fecha_consulta)-YEAR(`pacientes`.`f_nacimiento`) + 
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



      <?php  $contador =0; while($filas=mysqli_fetch_assoc($resultado)) { $contador++;?>
      
        <h4> Fecha de la consulta: </h4>
        <?php echo cambiaf_a_espanol($filas['fecha_consulta']) ?>
        
      <h4> Nombre completo: </h4> <?php echo $filas['apellido1'] ?>
        <?php echo $filas['apellido2'] ?>
        <?php echo $filas['nombre1'] ?>
        <?php echo $filas['nombre2'] ?>
        <h4> Sexo: </h4>
        <?php echo sex( $filas['sexo'])?>
        <h4> Teléfono: </h4>
        <?php echo $filas['telefono'] ?>
        <h4> Edad: </h4>
        <?php echo $filas['EDAD_ACTUAL'] ?>
        <h4> Motivo de la consulta: </h4>
        <?php echo $filas['motivo_consulta'] ?>
        <h4> Historia: </h4>
        <?php echo $filas['historia'] ?>
        <h4> Antecedentes familiares: </h4>
        <?php echo $filas['antecedentes_familiares'] ?>
        <h4> Antecedentes Médicos: </h4>
        <?php echo $filas['antecedentes_medicos'] ?>
        <h4> Antecedentes Quirúrgicos: </h4>
        <?php echo $filas['antecedentes_quirurgicos'] ?>
        <h4> Antecedentes Traumáticos: </h4>
        <?php echo $filas['antecedentes_traumaticos'] ?>
        <h4> Antecedentes Alérgicos: </h4>
        <?php echo $filas['antecedentes_alergicos'] ?>

        <h4> Obstétricos: </h4>
        <?php echo $filas['obstetricos'] ?>
        <h4> Meses de gestación: </h4>
        <?php echo $filas['gestacion'] ?>
        <h4> Partos: </h4>
        <?php echo $filas['partos'] ?>
        <h4> Cesareas: </h4>
        <?php echo $filas['cesareas'] ?>
        <h4> Abortos: </h4>
        <?php echo $filas['abortos'] ?>
        <h4> Menarquia: </h4>
        <?php echo $filas['menarquia'] ?>
        <h4> Ultima Regla: </h4>
        <?php echo $filas['ur'] ?>
        <h4> Hábitos: </h4>
        <?php echo $filas['habitos'] ?>
        <h4> Presion Arterial: </h4>
        <?php echo $filas['presion_arterial'] ?>
        <h4> Pulso: </h4>
        <?php echo $filas['pulso'] ?>
        <h4> Frecuencia Respiratoria: </h4>
        <?php echo $filas['freq_resp'] ?>
        <h4> Frecuencia Cardiaca: </h4>
        <?php echo $filas['freq_cardiaca'] ?>
        <h4> Temperatura: </h4>
        <?php echo $filas['temperatura']."℃" ?>
        <h4> Talla (estatura): </h4>
        <?php echo $filas['talla']."ctms." ?>
        <h4> Peso: </h4>
        <?php echo $filas['peso']."lbs." ?>
        <h4> IMC: </h4>
        <?php echo $filas['imc'] ?>
        <h4> Categoría de peso: </h4>
        <?php echo $filas['peso_cat'] ?>
        <h4> Peso ideal: </h4>
        <?php echo $filas['peso_ideal']."lbs." ?>
        <h4> Exeso de peso : </h4>
        <?php echo $filas['exceso_peso']."lbs." ?>
        <h4> Observaciones: </h4>
        <?php echo $filas['observaciones'] ?>




     

      <?php } ?>
     
    </tbody>
  </table>
</div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
      
      
      </div>
		</div>
        <script src="js/olcu.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>