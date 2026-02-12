<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);

// declare(strict_types=1);

function addition(int $a, int $b): int {
    return $a + $b;
}

function division(int $a, int $b): float {
    if ($b === 0) {
        throw new Exception("Division par zéro interdite");
    }
    return $a / $b;
}

echo addition(4, 6);
echo "\n";

echo $variableNonDefinie;

try {
    echo division(10, 0);
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}


