<?php
$hours = readline("Ingrese las horas \n");
$minuts = readline("Ingrese los minutos \n");
$seconds = readline("Ingrese los segundos \n");

$minutsToSeconds = $minuts * 60;
$hoursToSeconds =  $hours * 3600;
$finalResult = $seconds + $minutsToSeconds + $hoursToSeconds;

echo "Son $finalResult segundos \n ";

var_dump(true && false);

