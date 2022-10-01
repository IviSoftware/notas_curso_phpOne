<?php
/**Tipos de datos
 * Numericos -> integer,float,double
 * Cadenas de caracteres -> char, string
 * Booleanos -> bool
 * Sin valor -> null, undefined
 */

 //PHP CONVIERTE INPLICITAMENTE COMO JS
  $numerito = 5;
  $numeritoString = "15";
  
  echo $numerito + $numeritoString; // 20

 /**
* ¿ Qué es el casting ?
* Convertir explicitamente una variable en un tipo de dato deseado
*/

  $numberString = "5";
  var_dump($numberString); // string(1);

  $number = (int) $numberString;
  var_dump($number); // Int(1)