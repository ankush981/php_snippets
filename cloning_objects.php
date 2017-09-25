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

