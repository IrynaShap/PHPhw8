<?php
$i = 1;
while ($i <= 10) {
    echo $i . "\n";
    $i++;
}

$number = 5;
$factorial = 1;
$i = 1;
while ($i <= $number) {
    $factorial *= $i;
    $i++;
}
echo "Факторіал числа 5: " . $factorial . "\n";

$i = 1;
while ($i <= 20) {
    if ($i % 2 === 0) {
        echo $i . "\n";
    }
    $i++;
}
