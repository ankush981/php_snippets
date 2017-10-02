<?php

// Consider this contrived example

class ParentClass {
    public static function sayHello() {
        echo "Hello, I'm Parent!\n";
    }

    public function callHello() {
        self::sayHello();
    }
}

class ChildClass extends ParentClass {
    public static function sayHello() {
        echo "Hello, I'm Child!\n";
    }
}

$c = new ChildClass();
$c->callHello();

// even though we'd (rightly) expect the child's method to be called, what
// we actually get is the message "Hello, I'm parent!". The problem is that
// in case of static methods, PHP forgets to resolve the class the method
// belongs to, and ends up calling the parent's static method with the same
// name. To overcome this, resolve the method by calling 'static::' instead
// of 'self::'.

class ParentClassNew {
    public static function sayHello() {
        echo "Hello, I'm Parent!\n";
    }

    public function callHello() {
        // note the 'static' here!
        static::sayHello();
    }
}

class ChildClassNew extends ParentClassNew {
    public static function sayHello() {
        echo "Hello, I'm Child!\n";
    }
}

$c = new ChildClassNew();
$c->callHello();