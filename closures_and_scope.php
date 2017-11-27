<?php

/**
 * Shameless copied from a user-contributed note in the PHP Manual
 */

/* Watch out when 'importing' variables to a closure's scope  -- it's easy to miss / forget that they are actually being *copied* into the closure's scope, rather than just being made available.

So you will need to explicitly pass them in by reference if your closure cares about their contents over time: */

$result = 0;

$one = function() { 
    var_dump($result);
};

$two = function() use ($result) { 
    var_dump($result); 
};

$three = function() use (&$result) { 
    var_dump($result); 
};

$result++;

$one();    // Gives notice and outputs NULL: $result is not in scope
$two();    // outputs int(0): $result was copied
$three();    // outputs int(1)