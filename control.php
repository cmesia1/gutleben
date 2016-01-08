<?php

$conn = mysql_connect("localhost","uxjrzpcb_cmesia","tarapoto1");
//--- Selecciono la base
mysql_select_db("uxjrzpcb_gutleben",$conn);

//--- Genero la consulta
$sql_query = "select * from administrador where users='" . $_POST["usuario"] . "' and passw='" . $_POST["contrasena"] . "'";
//--- Ejecuto la consulta
$sql_resul = mysql_query($sql_query, $conn);




if(mysql_num_rows($sql_resul) != 0){
session_start();
session_register('autentificado');

$autentificado = "SI";

header ("Location: Gutleben/index.html");	
	
}else { 
   	//si no existe le mando otra vez a la portada 
   	//header("Location: index.php?errorusuario=si"); 
   	header("Location: index.html"); 

} 
mysql_free_result('$rs'); 
mysql_close('$conn'); 
?>