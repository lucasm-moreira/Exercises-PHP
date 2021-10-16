<?php 

class ExerciseFour
{
    public function run(string $inputString): void
    {
        $numberArray = $this->transformStringToNumberArray($inputString);
        $permutedNumberArray = $this->permuteAllNumbersFromArrayOnThree($numberArray, count($numberArray));
        $outputString = $this->transformNumberArrayToString($permutedNumberArray);

        echo $outputString;
    }

    protected function transformStringToNumberArray(string $inputString): array
    {
        $numberArray = array_map("intval", explode(" ", $inputString));
        return $numberArray;
    }

    protected function transformNumberArrayToString(array $permutedNumberArray): string
    {
        $outputString = '';
        $arrayStrings = [];
        $count = 0;

        foreach($permutedNumberArray as $nodeArray) {
            $stringArrayProcessed = array_map("strval", $nodeArray);   
            $triangleType = $this->defineTriangleTypes($nodeArray);   
            
            if($count == 0) {
                $outputString = implode(", ", $stringArrayProcessed);
            }
            else {                                
                $outputString = $outputString . ' | ' . implode(", ", $stringArrayProcessed);
            }
            
            $count++;

            $outputString = $outputString . ' -> ' . $triangleType;
        }

        return $outputString;
    }

    protected function permuteAllNumbersFromArrayOnThree(array $numberArray, int $length): array
    {
        $permutedNumberArray = [];
        $auxiliarNumberArrayOfThree = [];

        for($i = 0; $i < $length; $i++) {
            for($j = $i + 1; $j < $length; $j++) {
                for($k = $j + 1; $k < $length; $k++) {
                    if($numberArray[$i] + $numberArray[$j] > $numberArray[$k] &&
                       $numberArray[$i] + $numberArray[$k] > $numberArray[$j] &&
                       $numberArray[$k] + $numberArray[$j] > $numberArray[$i]) {
                           $auxiliarNumberArrayOfThree = [
                               $numberArray[$i],
                               $numberArray[$j],
                               $numberArray[$k]
                           ];
                           array_push($permutedNumberArray, $auxiliarNumberArrayOfThree);
                       }
                }
            }
        }

        return $permutedNumberArray;
    }

    protected function defineTriangleTypes(array $nodeArray): string
    {
        if($nodeArray[0] == $nodeArray[1] && $nodeArray[1] == $nodeArray[2]) {
            return 'Equilátero';
        }

        else if (($nodeArray[0] == $nodeArray[1] && $nodeArray[0] !== $nodeArray[2]) ||        
        ($nodeArray[0] == $nodeArray[2] && $nodeArray[0] !== $nodeArray[1]) ||
        ($nodeArray[1] == $nodeArray[2] && $nodeArray[1] !== $nodeArray[0])) {
            return 'Isósceles';
        }

        return 'Escaleno';
    }
}

?>