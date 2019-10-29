<?php
// For anything you want to be interpreted as PHP, you want to use the above.

// Print to the screen, essentially console.log
echo 'Hello World';
// Can use single or double quotes for strings - though there is a slight difference between the two.
// Semi-colons are required to indicate end of sequence.

// php -S localhost:8888  <-- Launch a server on localhost:8888, server will begin listening.

// Declare a variable named $greeting.  Variables in PHP must be prefaced with $.
$greeting = 'Hello World';
// Identical to the above code.
echo $greeting;

$name = 'Ed Reeseg';
// Double quotes can be used to interpolate variables!  Will not work with single quotes.
echo "Hello $name";
// Sometimes people will use braces to make it more obvious they are referencing a variable.
echo "Hello {$name}";
// String concatenation can be done using the . operator.  This is equivalent to `'Hello, ' + name` in JS.
echo 'Hello, ' . $name;