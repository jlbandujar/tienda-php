<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<?php
include("conect.php");
compruebaLogeado();
pintaMenu();

?>
<body>
	<div class="container">
    <h1>Nuevo Cliente</h1>
    <form action="insertacliente.php" method="get">
        <p>Nombre:<input  class="form-control"   type="text" name="nombre"></p>
        <p>Ciudad:<input  class="form-control" type="text" name="ciudad"></p>
        <p>Edad:<input class="form-control" type="number" name="edad"></p>
        <p>Fecha nac.:<input class="form-control" type="date" name="fecha_nacimiento"></p>
        <p><input type="submit" class="btn btn-primary" value="Insertar Cliente"></p>    
    </form>
    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
    
    
</html>
