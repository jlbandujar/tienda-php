<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php
$usuario = "id16351736_admin2";
$contrasena = "Bosco@20202021";
$servidor = "localhost";
$basededatos = "id16351736_tienda2";

$conexion = mysqli_connect( $servidor, $usuario, $contrasena ) or die ("No se ha podido conectar al servidor de Base de datos");

$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

$consulta = "SELECT * FROM articulos"; 

$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

echo "<h1>Lista de Artículo</h1>";
echo "<table class='table table-striped table-dark'>";
echo "<tr><th>idarticulo</th><th>codigo</th><th>modelo</th><th>marca</th><th>pvp</th></tr>";

while ($fila = mysqli_fetch_array( $resultado ))
{
$cadenaBorrar = "<td><a href=borraarticulo.php?idarticulo=".$fila['idarticulo'].">Borrar</a></td>";
 echo "<tr>";
 echo "<td>" . $fila['idarticulo'] . "</td><td>" . $fila['codigo'] . "</td><td>" . $fila['modelo'] . "</td><td>".$fila['marca']."</td><td>".$fila['pvp']."</td>".$cadenaBorrar;
 echo "</tr>";
}
echo "</table>";
mysqli_close( $conexion );
?>
</body>
</html>