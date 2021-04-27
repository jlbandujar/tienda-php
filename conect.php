<?php
function compruebaLogeado(){
session_start();
//echo "<h1>Usuario: ".$_SESSION["usuario_logeado"]."</h1>";
 
 
 if ( !isset($_SESSION["usuario_logeado"])) {
	
	header("Location: login.html"); 

 }  
  
}

function conectarse() {
   error_reporting(E_ALL | E_STRICT); //para que muestre los errores
    ini_set('display_errors', "On");
$usuario = "id16351736_admin2";
$contrasena = "Bosco@20202021";// puede ser “” 
$servidor = "localhost";
$basededatos = "id16351736_tienda2";
$conexion = mysqli_connect( $servidor, $usuario, $contrasena ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
return $conexion;

}

function pintaMenu(){
    echo '<html>
<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="estilos.css">
</head><body>';
	echo '<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="http://andujar.inforbosco.nl/tienda">Bosco S.L</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
    <!-- Dropdown -->
    
     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="listaclientes.php" id="navbardrop" data-toggle="dropdown">
        Clientes
      </a>
      <div class="dropdown-menu">
		   <a class="dropdown-item" href="listaclientes.php">Listar</a>
        <a class="dropdown-item" href="insertacliente1.php">Nuevo</a>
              
      </div>
    </li>
    
      <li class="nav-item">
        <a class="nav-link" href="#">Artículos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Dónde estámos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contacto</a>
      </li>
      
    </ul>
  </div>
  <span style="color:white">Usuario:'.$_SESSION["usuario_logeado"].'</span>
  |<a href=logout.php>Logout</a></nav>';
	
	
	}
?>
