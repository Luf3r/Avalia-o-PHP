<?php

$fibonacci = array();

$fibo = 1;
$nacci = 1;

for ($i = 0; $i < 10; $i++) {
    array_push($fibonacci, $fibo);
    $temp = $fibo + $nacci;        
    $fibo = $nacci;               
    $nacci = $temp;               
}

foreach ($fibonacci as $fibo) {
    echo $fibo . ", ";
}

?>