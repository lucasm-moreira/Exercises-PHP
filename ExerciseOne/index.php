<?php 
require('ExerciseOne.php');

echo chr(27).chr(91).'H'.chr(27).chr(91).'J';
echo "##### Exercício 1 - Rotacionar Array #####\n\n";

$inputString = readline("Digite valores numéricos separados por 1 espaço. Exemplo: 1 2 3 - ");
$rotationalIndex = readline("Digite o valor do Índice de Rotação: ");

if(!is_numeric($rotationalIndex)) {
    echo "Digite o valor de índice numérico!";
    exit();
}

$exerciseOne = new ExerciseOne();

try {
    $exerciseOne->run($inputString, $rotationalIndex);
} catch(Exception $e) {
    echo "Error message: " . $e . "!";
}

?>