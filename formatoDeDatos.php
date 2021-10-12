<?php
$textUpper="TEXT UPPER";
$textTags="<h1>textTags</h1>";
$textLower="text lower";
//convierte el texto a mayusculas
$textConvertUpper=strtoupper($textLower);
var_dump($textConvertUpper);
//convierte el texto a minusculas
$textConvertLower=strtolower($textUpper);
var_dump($textConvertLower);
//convierte el primer caracter a mayusculas
$ucfirst=ucfirst($textLower);
var_dump($ucfirst);
//convierte el primer caracter a minusculas
$lcfirst=lcfirst($textUpper);
var_dump($lcfirst);
//reemplaza los caracteres que son espacios por guiones
$slug=str_replace(' ','_',$textLower);
var_dump($slug);
//el caracter contenga 14 caracteres y los faltantes los rellena con # y selecciona en que direccion se rellenaran
$strPad=str_pad($textLower,14,'#');
//agrega caracteres hacia los dos lados
//$strPad=str_pad($textLower,14,'#',STR_PAD_BOTH);
//se agrega caracteres hacia la izquierda
//$strPad=str_pad($textLower,14,'#',STR_PAD_LEFT);
var_dump($strPad);
//elimina etiquetas que contenga <> 
$stripTags=strip_tags($textTags);
var_dump($stripTags);

