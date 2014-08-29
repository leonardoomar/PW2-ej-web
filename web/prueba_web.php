<?php
    // parametros para el template
    $dale    = "MASA";
    $titulo  = "PRUEBA DE PROG. WEB 2";
    $archivo = dirname(__FILE__)."/prueba_web_res.php";
    
    
    //logica de aplicacion
    if(array_key_exists('edad', $_GET))
        $edad = (int)$_GET['edad'];
    else
        $edad = 0;
    
    
    //incluir el template
    require_once dirname(__FILE__). '/../template.php';