<?php 
require('ExerciseFive.php');

echo chr(27).chr(91).'H'.chr(27).chr(91).'J';
echo "##### Exercício 5 - Achar substring dentro de Texto #####\n\n";

$baseText = readline("Digite um texto: ");
$stringToSearch = readline("Digite o texto a ser procurado: ");

$exerciseFive = new ExerciseFive();

try {
    $exerciseFive->run($baseText, $stringToSearch);
} catch(Exception $e) {
    echo "Error message: " . $e . "!";
}

?>