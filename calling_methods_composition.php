<?php

/*
 * Calling methods in object composition
 *
 * When objects are composed together, what is the right way to call the 
 * methods of the inside object? One way to handle this is to let the
 * containing object 'intercept' the method calls and route them to the
 * contained object.
 */

class Address {
    protected $city;

    public function setCity($city) {
        $this->city = $city;
        echo "City set to $city\n";
    }
}

class Person {
    protected $name; // this won't be used in this example
    protected $address; // yay, composition!

    public function __construct() {
        $this->address = new Address();
    }

    public function __call($method, $arguments) {
        if(method_exists($this->address, $method)) {
            return call_user_func_array([$this->address, $method], $arguments);
        }
    }
}

$p = new Person();
$p->setCity('Delhi'); // outputs: 'City set to Delhi'