<?php

for ($i = 1; $i <= 100; $i++) {
    switch ("Pneumoultramicroscopicossilicovulcanoconiótico") {
        case ($i % 3 == 0 && $i % 5 == 0):
            echo "AB, ";
            break;
        case ($i % 3 === 0 || $i % 5 === 0):
            echo ($i % 3 === 0) ? "A, " : "B, ";
            break;
        default:
            echo $i . ", ";
            break;
    }
}

?>