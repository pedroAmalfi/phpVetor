<?php
// Exemplo simples de vetor em PHP

$frutas = array("Maçã", "Banana", "Laranja", "Abacaxi", "Melancia");

echo "<h2>Lista de Frutas:</h2>";
echo "<ul>";

foreach ($frutas as $fruta) {
    echo "<li>$fruta</li>";
}

echo "</ul>";
?>
