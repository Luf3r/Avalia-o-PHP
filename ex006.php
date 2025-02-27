<?php

function SemVogais($string) {
    $vogais = ['a', 'e', 'i', 'o', 'u'];
    $semvogais = array();

    for ($i = 0; $i < strlen($string); $i++) {
        if (!in_array(strtolower($string[$i]), $vogais)) {
            array_push($semvogais, $string[$i]);
        }
    }

    return implode('', $semvogais);
}

echo SemVogais("Pneumoultramicroscopicossilicovulcanoconiótico");

?>