<?php
// Including the trait
require_once 'CollatzTrait.php';

class Collatz {
    private $number;

    public function __construct($number) {
        $this->number = (int)$number;
    }

    public function generateSequence() {
        $n = $this->number;
        $sequence = [];
        $max = $n;
        $steps = 0;

        while ($n > 1) {
            $sequence[] = $n;
            if ($n > $max) {
                $max = $n;
            }

            if ($n % 2 == 0) {
                $n = $n / 2;
            } else {
                $n = 3 * $n + 1;
            }

            $steps++;
        }

        $sequence[] = 1;

        return array(
            'sequence' => $sequence,
            'max' => $max,
            'steps' => $steps
        );
    }
    // Using the trait inside our class
    use CollatzTrait;
}