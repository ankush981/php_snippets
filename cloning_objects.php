<?php

// In PHP, object assignment is by reference

$a = new stdClass();
$a->name = 'Ankush';

$b = $a;

echo ($b == $a); // outputs 1
