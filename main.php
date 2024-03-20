<?php
require_once 'File.php';

// Array to store strings
$basicStack = new File();

for ($counter = 0; $counter < 3; $counter++) {
    // Prompt for string input
    echo "Enter a string: ";
    $stringValue = readline();

    // Push string to stack
    $basicStack->push($stringValue);
}

// Show the stack's values
$stackValues = $basicStack->showStack();
echo $stackValues . "\n";

// Indicate the program is done
echo "\nDone.\n";
?>
