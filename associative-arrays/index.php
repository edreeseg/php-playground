<?php

// In an associative array, we assign a key to each of our array values.

$person = [
  'age' => 31,
  'hair' => 'brown',
  'career' => 'web developer'
];

// Adding a new value onto our associative array
$person['name'] = 'Jeffrey';


$animals = ['dog', 'cat', 'horse'];
// With a traditional array, you can push onto the array with this syntax.
$animals[] = 'elephant';

// Removing the item at index 1 with the unset function.  You can also use unset for
// associative arrays.
unset($animals[1]);

// The die function will cause the program to cease, therefore not continuing to 
// subsequent lines.
die(var_dump($animals));

require 'index.view.php';