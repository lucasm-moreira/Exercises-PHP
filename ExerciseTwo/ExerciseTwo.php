<?php

class ExerciseTwo
{
    public function run(string $inputString): void
    {
        $numberArray = $this->transformStringToNumberArray($inputString);
        $numberArraySorted = $this->sortArrayPairOdd($numberArray);
        $outputString = $this->transformNumberArrayToString($numberArraySorted);

        echo $outputString;
    }

    protected function transformStringToNumberArray(string $inputString): array
    {
        $numberArray = array_map("intval", explode(" ", $inputString));
        return $numberArray;
    }

    protected function transformNumberArrayToString(array $numberArraySorted): string
    {
        $stringArrayProcessed = array_map("strval", $numberArraySorted);         
        $outputString = implode(", ", $stringArrayProcessed);
        return $outputString;
    }

    protected function sortArrayPairOdd(array $numberArray): array
    {
        $filteredNumbers = $this->filterPairOddNumbers($numberArray);
        $pairArray = $filteredNumbers['pair'];
        $oddArray = $filteredNumbers['odd'];

        $processedNumberArray = $this->appendItemsToArray($pairArray, $oddArray);

        return $processedNumberArray;
    } 
    
    protected function filterPairOddNumbers(array $numberArray): array
    {
        $pairArray= [];
        $oddArray = [];

        foreach($numberArray as $number) {
            if(($number % 2) == 0) {
                array_push($pairArray, $number);
            }
            else {
                array_push($oddArray, $number);
            }
        }

        sort($pairArray);
        rsort($oddArray);

        $filteredNumbers = [
            'pair' => $pairArray,
            'odd' => $oddArray
        ];

        return $filteredNumbers;
    }

    protected function appendItemsToArray(array $pairArray, array $oddArray): array
    {
        $processedNumberArray = [];

        foreach($pairArray as $pairNumber) {
            array_push($processedNumberArray, $pairNumber);
        }

        foreach($oddArray as $oddNumber) {
            array_push($processedNumberArray, $oddNumber);
        }

        return $processedNumberArray;
    }
}

?>