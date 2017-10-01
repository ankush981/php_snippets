<?php

// This technique is best used when you’re providing an object relational map (ORM) or
// creating a proxy class. For instance, you want to expose findBy() methods that translate
// to database queries or RESTful APIs.

// For example, you have users of your application and want to let people retrieve them
// using a varied set search terms: ID, email address, telephone number. You could create
// one method per term: findById() , findByEmail() , findByPhone() . However, the un‐
// derlying code is largely identical, so you can put that in one place.
// Here’s where __callStatic() comes in.

class Users {
    static function find($args) {
        // here's where the real logic lives
        // for example a database query:
        // SELECT user FROM users WHERE $args['field'] = $args['value']
    }

    static function __callStatic($method, $args) {
        if (preg_match('/^findBy(.+)$/', $method, $matches)) {
            return static::find(array('field' => $matches[1], 'value' => $args[0]));
        }
    }
}

$user = User::findById(123);
$user = User::findByEmail('ankush@example.org');