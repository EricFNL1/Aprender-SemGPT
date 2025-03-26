<?php

$nomes = ["Eric ","Daniela ", "Brayan ","Sarah ", "Guilherme "];

foreach ($nomes as $nome) {
    echo $nome;
}


$nomes[] = "Fernanda";// como adicionar nomes a lista
$nomes[] = "Gabriel";// como adicionar nomes a lista

array_shift($nomes);// função que remove o primeiro item da lista

echo count($nomes);// Conta os elementos

?>