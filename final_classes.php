<?php

//T he final keyword is used to mark a class as final

final class AClass {

}

// which prevents it from being subclassed

// -- throws error --

/*
class BClass extends AClass {

}
*/

// However, the dynamic nature of PHP means that the class definitions aren't preserved.
// It's always possible to directly modify the objects of a final class, so this 'safety'
// is limited to inheritance only

$a = new AClass();
$a->name = 'Jojo';

var_dump($a);