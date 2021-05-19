<!doctype html>
<html lang="en">
  <head>
  	<title>Página principal</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Raleway:300,400,500,700">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/libs.css">
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
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

        <h2 class="mb-4">Página Principal</h2>
       
      
      
        <nav class="site-navigation">

       
    
    
            <div class="col-xs-10 col-sm-6">
                <div class="card" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('src/sistema/consulta.jpg');">
     
                  <div class="card-description">
                    <h2 style="color: white;">Nueva Consulta</h2>
                    <p>Ha llegado una persona a consulta...</p>
                  </div>
                  <img class="card-user avatar avatar-large" src="images/about-me.jpg">
                  <a class="card-link" href="consulta.php" ></a>
                </div>
              </div>
              <div class="col-xs-10 col-sm-6">
                <div class="card" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('src/sistema/nuevopaciente.jpg');">
          
                  <div class="card-description">
                    <h2 style="color: white;">Ingresar un nuevo paciente</h2>
                    <p>Ingresar un paciente a la base de datos</p>
                  </div>
                  <img class="card-user avatar avatar-large" src="images/danielCard.jpg">
                  <a class="card-link" href="#" ></a>
                </div>
              </div>
              <div class="col-xs-10 col-sm-6">
                <div class="card" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('src/sistema/pacientes.png');">
     
                  <div class="card-description">
                    <h2 style="color: white;">Listado de pacientes</h2>
                    <p>Visualizar o buscar pacientes/ acceder a su información(Acceso restringido)</p>
                  </div>
                  <img class="card-user avatar avatar-large" src="images/about-me.jpg">
                  <a class="card-link" href="libros.html" ></a>
                </div>
              </div>
              <div class="col-xs-10 col-sm-6">
                <div class="card" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('src/sistema/sat.png');">
          
                  <div class="card-description">
                    <h2 style="color: white;">Facturar en linea</h2>
                    <p>Facturar el linea desde el portal de la SAT</p>
                  </div>
                  <img class="card-user avatar avatar-large" src="images/danielCard.jpg">
                  <a class="card-link" target="_blank" href="https://portal.sat.gob.gt/portal/" ></a>
                </div>
              </div>
              <div class="col-xs-10 col-sm-6">
                <div class="card" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('src/sistema/agenda.jpg');">
          
                  <div class="card-description">
                    <h2 style="color: white;">Agenda</h2>
                    <p>Visualizar las citas y programar nuevas citas</p>
                  </div>
                  <img class="card-user avatar avatar-large" src="images/danielCard.jpg">
                  <a class="card-link" href="#" ></a>
                </div>
              </div>
            
            
        
   
    
        <!-- Including Bootstrap JS (with its jQuery dependency) so that dynamic components work -->
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