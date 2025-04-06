<?php

trait CollatzTrait {
    // Method to print the Collatz sequence
    public function printSequence() {
        echo "Sequence: " . implode(" → ", $this->generateSequence()['sequence']) . "<br>";
        echo "Max Value: " . $this->generateSequence()['max'] . "<br>";
        echo "Steps: " . $this->generateSequence()['steps'] . "<br>";
    }
}