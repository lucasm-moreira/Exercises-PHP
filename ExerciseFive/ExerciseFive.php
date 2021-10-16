<?php 

class ExerciseFive
{
    public function run(string $baseText, $stringToSearch): void
    {
        $outputString = $this->searchSubstringInsideTextBase($baseText, $stringToSearch);

        echo $outputString;
    }

    protected function searchSubstringInsideTextBase($baseText, $stringToSearch): string
    {
        return str_contains($baseText, $stringToSearch) ? 
        'String ' . $stringToSearch . ' encontrada!' : 
        'String ' . $stringToSearch . ' não encontrada!';
    }
}

?>