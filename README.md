# Linio Challenge - Senior Backend Developer

Use this boilerplate or create your own and develop an application.

## Requirements

Write a program that prints all the numbers from 1 to 100. However, for multiples of 3, instead of the number, print "Linio". For multiples of 5 print "IT". For numbers which are multiples of both 3 and 5, print "Linianos".

But here's the catch: you can use only one `if`. No multiple branches, ternary operators or `else`.

Conver the following features in your program:

  - 1 if
  - You can't use `else`, `else if` or ternary
  - Unit tests
  - Feel free to apply your SOLID knowledge
  - You can write the challenge in any language you want. Here at Linio we are big fans of PHP, Kotlin and TypeScript

### Requirements

- php-cli or wamp/lamp
- PHP 7.1, preferred 7.1.6
- Composer (see: https://getcomposer.org/doc/00-intro.md)

### Installation

1. Download or clone the repository
2. Execute the composer command in project root:
```
    composer install
```
4. Run challenge php script in project root:
```
    php index.php
```

### Unit test

To run the PHPUnit tests execute the follow command in Terminal from project root:

```
    cd vendor/bin
    phpunit ../../tests/FormAddTest
    phpunit ../../tests/WriterTest
```

Written by Junior Hernandez