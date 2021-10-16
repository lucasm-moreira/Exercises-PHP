<?php 
require('ExerciseThree.php');

echo chr(27).chr(91).'H'.chr(27).chr(91).'J';
echo "##### Exercício 3 - Cálculo de diferença de dias #####\n\n";

$firstInputDateString = readline("Digite a primeira data no seguinte formato dd/mm/aaaa - ");
$secondInputDateString = readline("Digite a segunda data no seguinte formato dd/mm/aaaa - ");

$exerciseThree = new ExerciseThree();

try {
    $exerciseThree->run($firstInputDateString, $secondInputDateString);
} catch(Exception $e) {
    echo "Error message: " . $e . "!";
}

?>