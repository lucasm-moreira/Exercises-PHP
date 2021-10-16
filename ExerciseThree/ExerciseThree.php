<?php 

class ExerciseThree
{
    public function run(string $firstInputDateString, string $secondInputDateString): void
    {
        $daysDiffBetweenDates = $this->calculateDaysDifferenceBetweenStringDates($firstInputDateString, $secondInputDateString);

        echo $daysDiffBetweenDates . ' dias';
    }

    protected function calculateDaysDifferenceBetweenStringDates(string $firstInputDateString, string $secondInputDateString): int
    {
        $firstDate = strtotime(implode('-', array_reverse(explode('/', $firstInputDateString))));
        $secondDate = strtotime(implode('-', array_reverse(explode('/', $secondInputDateString))));
        $interval = ($secondDate - $firstDate) / 86400;
        
        $interval > 0 ? $interval : $interval *= -1;

        return $interval;
    }
}

?>