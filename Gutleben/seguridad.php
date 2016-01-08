<?php
//Inicio la sesion 
session_start(); 

//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO 
if ($_SESSION["autentificado"] != "SI") { 
   	//si no existe, envio a la pagina de autentificacion 
   	header("Location: ../index.html"); 
   	//ademas salgo de este script 
   	exit(); 
}	
?>