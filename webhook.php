<?php

require_once "./libreria_dialogflow.php";
require_once './conexion.php';

$intent = obtener_intent();

switch($intent){

    case "ordenar inicio - yes":
        //intent para ordenar
        break;

    case "consulta_precios":
      // intent para consulta de precios
      break;


    case "menu":
       //intent para consulta del menú
       // el menu debe ser enviado como imagen
      break;
}



?>
