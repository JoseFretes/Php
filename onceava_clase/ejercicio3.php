<?php

header ("Content-Type:aplication/json");

$peso = $_GET['peso'];
$estatura = $_GET['estatura'];

if (!empty($peso) && !empty($estatura))
{
    $estatura = $estatura /100;

    $imc = $peso / ($estatura * $estatura);

    $imc = round($imc, 2);

    respuesta(200, "tu IMC es de: $imc", $imc);
}
else
{
    respuesta(400, " Bad Request – [Petición Errónea] La petición está malformada, como por ejemplo, si el contenido no fue bien parseado. El error se debe mostrar también en el JSON de respuesta.");
}


function respuesta($estado, $mensaj_estado, $datos)
{
    $respuesta ['estado'] = $estado;
    $respuesta ['mensaje_estado'] = $mensaj_estado;
    $respuesta ['datos'] = $datos;

    
    $respuesta_json = json_encode($respuesta);
    echo $respuesta_json;
}
