<?php 
$protocol=isset($_SERVER['HTTPS'])&&$_SERVER['HTTPS']=='on'?'https':'http';

$host=$_SERVER['HTTP_HOST'];

//$uri=$_SERVER['REQUEST_URI'];


//ESTA URL ES PARA UTILIZARLO EN TU SERVIDOR CUANDO TU PROYECTO ESTE TERMINADO
//$url=$protocol.'://'.$host."/";


//COMPLETAR CON LA URL DONDE ESTA ALOJADO TU PROYECTO
//EN MI CASO ES ESTE MI URL ES ESTA DEBIDO A QUE HAY UNA CARPETA 
//proyectos en el htdocs de xampp y
//asu vez proyectos tiene una carpeta php donde esta alojado mi pryecto que la estructura-MVC 
//$url=$protocol.'://'.$host."/proyectos/PHP/estructura-MVC/";



$url=$protocol.'://'.$host."/COLOCA-DONDE-ESTA-TU-PROYECTO/";

function metodoName($metodoName){
    if(strpos($metodoName,"-")!==false){
        $metodoName=str_replace("-","_",$metodoName);
    }
    return $metodoName;
}

define("URL",$url);
define("controllerDefault","homeController");
define("actionDefault","index");
?>