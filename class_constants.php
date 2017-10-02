<?php

// There are situations where we might need class-level constants.
// These are achieved in PHP by using 'const' declarations

class Circle {
    const pi = 3.14159;
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        // Notice that 'pi' can be used directly here
        return $this->radius * $this->radius * pi;
    }
}

// Do note that PHP doesn't allow any kind of expressions in the const declarations;
// even 'const $three = 1 + 2;' is not allowed.