<?php
// Including the Collatz class
require_once 'classes/Collatz.php';
?>

    <form method="get">
        <label>Enter a number:</label>
        <input type="number" name="number" required>
        <button type="submit">Submit</button>
    </form>

<?php
if (isset($_GET['number'])) {
    $n = intval($_GET['number']);
    $collatz = new Collatz($n);

    // Now we are using the printSequence method from trait
    $collatz->printSequence();
}
?>