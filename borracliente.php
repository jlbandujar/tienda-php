<html>
<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    

<?php
include("conect.php");
$conexion=conectarse();
$consulta = "DELETE FROM CLIENTES WHERE idcliente=".$_GET["idcliente"];
//echo $consulta;
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal al borrar el registro");
echo "<p style='text-align:center' class='alert alert-success' >Cliente borrado</p>";
mysqli_close( $conexion );
?>
<p></p><a href=listaclientes.php>Volver</a></p>
</body>
</html>