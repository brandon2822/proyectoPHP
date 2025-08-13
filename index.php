<?php
//ruta por default
$controladorIndex="ControladorIndex";
$metodoIndex="Index";
$rutaIndex=__DIR__."/Controlador/{$controladorIndex}.php";

require_once $rutaIndex;
$indexControlador=new $controladorIndex();

//ruta
$controller=isset($_GET["controlador"])?"Controlador".ucfirst($_GET["controlador"]):"ControladorIndex";
$action=isset($_GET["metodo"])?ucfirst($_GET["metodo"]):"Index";

//ruta del server
$controllerFile=__DIR__."/Controlador/{$controller}.php";

//verificar si el archivo existe
if(file_exists($controllerFile)) {
    require_once $controllerFile;
    //reviso clase y metodo
    if(class_exists($controller)){
        $controlador=new $controller();
        if(method_exists($controlador,$action))
            $controlador->$action();
        else
            $indexControlador->$metodoIndex();
    }
    else
        $indexControlador->$metodoIndex();
}
else
    $indexControlador->$metodoIndex();