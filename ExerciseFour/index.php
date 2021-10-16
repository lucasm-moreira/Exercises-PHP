<?php 
require('ExerciseFour.php');

echo chr(27).chr(91).'H'.chr(27).chr(91).'J';
echo "##### Exercício 4 - Quantidade e Tipos de Triângulos #####\n\n";

$firstInputDateString = readline("Digite a 6 números separados por 1 espaço. Exemplo: 1 2 3 4 5 6 - ");

$exerciseFour = new ExerciseFour();

try {
    $exerciseFour->run($firstInputDateString);
} catch(Exception $e) {
    echo "Error message: " . $e . "!";
}

?>