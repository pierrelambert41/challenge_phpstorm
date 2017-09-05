<?php

$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];

$totalage = 0;
$nbeleve = count($students);

foreach ($students as $key => $value){

    echo $key." ".$students[$key]." ans <br/>";
    $totalage += $students[$key];

}

echo "la moyenne d'age est de ".($totalage / $nbeleve)." années";