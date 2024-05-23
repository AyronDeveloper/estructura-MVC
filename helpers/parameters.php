<?php 
$protocol=isset($_SERVER['HTTPS'])&&$_SERVER['HTTPS']=='on'?'https':'http';

$host=$_SERVER['HTTP_HOST'];

//$uri=$_SERVER['REQUEST_URI'];

$url=$protocol.'://'.$host."/proyectos/PHP/estructura-MVC/";
//COMPLETAR CON LA URL DE TU PROYECTO COMO EL EJEMPLO DE ARRIBA
//$url=$protocol.'://'.$host;

define("URL",$url);
define("controllerDefault","homeController");
define("actionDefault","index");
?>
