<html>
    
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
 	<link rel="stylesheet" type="text/css" href="estilos.css"> 
</head>
<body>

<?php
include("conect.php");
pintaMenu();
compruebaLogeado();
$conexion=conectarse();
$consulta = "SELECT * FROM CLIENTES";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
/********************* CÁLCULO DEL NÚMERO DE PÁGINAS *****************/
$num_total_registros = mysqli_num_rows($resultado);
$TAMANO_PAGINA = 3;
if ( !isset($_GET["pagina"])) {
	$inicio = 0; //inicio es el OFFSET
	$pagina=1;
} else {
	$pagina = $_GET["pagina"];
	$inicio=($pagina-1)*$TAMANO_PAGINA;
}
$total_paginas = ceil($num_total_registros/$TAMANO_PAGINA );

$cadena_limit = " limit $inicio, $TAMANO_PAGINA";
$consulta = "SELECT * FROM CLIENTES".$cadena_limit;
//echo $consulta;
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos paginada");
/********* FIN DE CÁLCULO DE PÁGINA *****************/
echo "<main>"; //lo va a meter todo en la capa main para poder darle estilos
echo "<table class='table table-hover'>";
echo "<tr><th>Id_cliente</th><th>Nombre</th><th>Ciudad</th><th>Edad</th><th>Fecha de Nacimiento</th></tr>";
while ($fila = mysqli_fetch_array( $resultado ))
{
 echo "<tr>";
 $cadena= "<td>" . $fila['idcliente'] . "</td><td>" . $fila['nombre'] . "</td><td>" . $fila['ciudad'] . "</td><td>".$fila['edad']."</td><td>".$fila['fecha_nacimiento']."</td>";
 $enlace ="<a onclick='return Confirmacion()' href=borracliente.php?idcliente=" . $fila['idcliente'].">Borrar</a>";
 $cadena = $cadena."<td>$enlace</td>";
 $enlaceActualiza ="<a href=actualizacliente.php?idcliente=" . $fila['idcliente'].">  Actualiza</a>";
 $cadena = $cadena."<td>$enlaceActualiza</td>";
 echo $cadena;
 echo "</tr>";
}
echo "</table>";
echo "<p>Se muestran páginas de $TAMANO_PAGINA registros</p>";
echo "<p>Mostrando página $pagina de $total_paginas</p>";

mysqli_close( $conexion );
//DESPUES DE IMPRIMIR LA TABLA MUESTRA LOS ENLACES A LAS PÁGINAS

if ( $total_paginas >1 ) { 
echo "Páginas:";
	for ($i=1;$i<=$total_paginas;$i++){
			if ( $i!=$pagina ) {	
			echo "<a href='listaclientes.php?pagina=$i'>$i</a>  ";
		     } else {
		     	echo $i;//el enlace a la página donde está no lo pone como enlace
		     }
	}
}

echo "</main>"; //cierra la capa main
?>
<!-- script confirmación de borrado -->
<script>
	function Confirmacion(){
		if ( confirm('¿Está seguro de eliminar el cliente?')==true ) {
			alert("El cliente se borrará");
			return true;
	    } else {
			return false;
		}
	}
</script>	
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
