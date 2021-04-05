<?php
session_start();
if(session_destroy()) // Destruye todas las sesiones
{
header("Location: login.html"); // Redireccionando a la pagina login.html
}
?>