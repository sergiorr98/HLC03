<?php
//Array de las palabras secretas
$array_palabras = array(
    1 => "doramio",
    2 => "polvora",
    3 => "jardineria",
    4 => "everis",
    5 => "minecraft",
    6 => "aplicacion",
	7 => "lugar",
    8 => "documento",
    9 => "guardar",
    10 => "cacahuete",
);

//Generamos el numero aleatorio entre 1 y 10 
$indice = rand(1, 10);

//Se le asigna a nuestra variable de palabra una del array con el indice generado aleatoriamente
$palabra_secreta = $array_palabras[indice];

//Se recorre el bucle para ir rellenando la palabra con barra bajas
$palabra_ahorcado=" ";
for($i=0;$i<count($palabra_secreta);$i++){
    $palabra_ahorcado =  $palabra_ahorcado . " _ ";
} 

//Otra forma sin terminar
//Se recoge el numero de caracteres de la palabra secreta
$numero_caracteres = strlen($palabra_secreta);




/*

' -------
 |/    
 |
 |
 |
 |
 | 
/|\
-------------'

*/


?>
