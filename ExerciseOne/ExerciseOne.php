<?php

class ExerciseOne
{
    public function run(string $inputString, int $rotationalIndex): void
    {
        $numberArray = $this->transformStringToNumberArray($inputString);
        $numberArrayRotated = $this->rotateNumberArray($numberArray, $rotationalIndex);
        $outputString = $this->transformNumberArrayToString($numberArrayRotated);

        echo $outputString;
    }

    protected function transformStringToNumberArray(string $inputString): array
    {
        $numberArray = array_map("intval", explode(" ", $inputString));
        return $numberArray;
    }

    protected function transformNumberArrayToString(array $numberArrayRotated): string
    {
        $stringArrayProcessed = array_map("strval", $numberArrayRotated);         
        $outputString = implode(", ", $stringArrayProcessed);
        return $outputString;
    }

    protected function rotateNumberArray(array $numberArray, int $rotationalIndex): array
    {
        for($count = 0; $count < $rotationalIndex; $count++) {
            $elementOne = array_shift($numberArray);
            array_push($numberArray, $elementOne);
        }

        return $numberArray;
    }
}

?>