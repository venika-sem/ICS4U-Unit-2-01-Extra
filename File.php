<?php
// Define the File class
class File {
    // Array that contains all of the strings
    private $array;

    // Constructor to initialize the array
    public function __construct() {
        $this->array = [];
    }

    // Method to push strings to the array
    public function push($string) {
        array_push($this->array, $string);
    }

    // Method to print the array to the console
    public function showStack() {
        $stackValues = $this->array[0];

        for ($counter = 1; $counter < count($this->array); $counter++) {
            $stackValues = $stackValues . ", " . $this->array[$counter];
        }

        return $stackValues;
    }
}
?>
