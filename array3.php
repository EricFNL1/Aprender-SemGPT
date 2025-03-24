<?php 

$numeros = [1, 2, 3, 100, 97];

$menor = $numeros[0];
$maior = $numeros[0];

foreach ($numeros as $numero) {
    if ($numero < $menor) {
        $menor = $numero;
    }
    if ($numero > $maior) {
        $maior = $numero;
    }
}

echo "Maior: $maior, Menor: $menor";
?>
