<?php
  $segundos = readline("Ingresa el tiempo en segundos \n");

  //1 hora contiene  3600 segundos
$horas = (int) ($segundos / 3600);
  $segundos = (int) ($segundos % 3600); // los segundos que sobran de una hora
$minutos = (int) ($segundos / 60); // con esos segundos sacamos los minutos 
$segundos = (int) ($segundos % 60); // pero ahora sacamos cuantos segundos sobran de esos minutos

  echo "Hay $horas horas, con $minutos minutos y $segundos segundos \n ";
