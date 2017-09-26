<?php

// In PHP, object assignment is by reference

$a = new stdClass();
$a->name = 'Ankush';

$b = $a;

echo (int)($b === $a); // outputs 1
echo "\n";

// However, there is a clone keyword that makes a copy of the object

$c = clone $a;
echo (int)($c === $a); // outputs 0
echo "\n";

// That said, the 'clone' keyword makes a shallow copy, which means that if some properties of the cloned object are other objects, these will be shared by reference. (ouch?)

// To make a deep copy of an object in PHP, override the default __clone() method
// make a 'clone' of the objects inside. Of course, if there are more nested objects,
// you need to keep doing the hard work!

