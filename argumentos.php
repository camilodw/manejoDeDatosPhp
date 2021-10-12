<?php
$data="texto en variable";
function data($data){
   var_dump($data);
}

//para cambiar el valor de una variable global se usa el parametro por referencia
//debido a que sino solo se cambia localmente en la funcion
function dataReference(&$data){
    $data="se cambio el texto";
}
data($data);
dataReference($data);
var_dump($data);