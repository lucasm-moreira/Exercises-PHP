<?php 
require('ExerciseTwo.php');

echo chr(27).chr(91).'H'.chr(27).chr(91).'J';
echo "##### Exercício 2 - Reordenar Vetor - Pares e Ímpares #####\n\n";

$inputString = readline("Digite valores numéricos separados por 1 espaço. Exemplo: 1 2 3 - ");

$exerciseTwo = new ExerciseTwo();

try {
    $exerciseTwo->run($inputString);
} catch(Exception $e) {
    echo "Error message: " . $e . "!";
}

?>