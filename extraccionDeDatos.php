<?php
$text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem aut voluptates sed, ipsum neque et numquam ipsam facilis quae assumenda totam laboriosam molestias temporibus error odit in sequi, suscipit sit";
//corta una cadena de caracteres con una posicion inicial y final
$extract=substr($text,0,10);
//var_dump($extract);
$data="Javascript,sql,php,css,html5";
//convierte en array una cadena de caracteres y va separando el array al encontrar una coma
$array=explode(',',$data);
//var_dump($array);
//elimina espacios demas hacia la izquierda
$text=ltrim($text);
var_dump($text);