# TDD

## Enoncé

Exercice 1
==========
L'objectif est de compléter une fonction permettant de déterminer si l'année
passée en paramètre est bissextile ou non. Une année bissextile est divisible
par 4 mais pas par 100, sauf si elle est également divisible par 400.

Exercice 2
==========
L'objectif est d'écrire une méthode permettant de calculer les facteurs
premiers d'un nombre entier positif passé en paramètre. Cette liste devra
être triée par ordre croissant.

Un nombre premier est un nombre entier supérieur ou égal à deux qui a
exactement deux diviseurs : 1 et lui-même.


Exercice 3
==========
L'objectif est d'écrire une fonction qui prend une chaine de caractères en
paramètre et vérifie que si celle-ci contient des parenthèses, ces parenthèses
sont "équilibrées". Dans cet exercice, des parenthèses sont dites équilibrées
si :
- il y a autant de parenthèses ouvrantes que de parenthèses fermantes
- les parenthèses fermantes n'apparaissent qu'après avoir été "ouvertes"

Par exemple, les chaines suivantes devraient être jugées équilibrées :
- ""
- "()"
- "(foo(bar))"
- "foo"

alors que celles-ci ne le sont pas :
- "((foo)"
- ")(()"

Vous devez implémenter cette fonction, ainsi que la classe de test contenant
toutes les assertions permettant de garantir son bon fonctionnement.


## Installation

Install Composer dependencies

    composer install

## Run the tests

    ./vendor/bin/phpunit tests

## Make them pass!

Edit `src/BankAccountRegexTest.php.php` to make each test pass, one exercise at a time.
