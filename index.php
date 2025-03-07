<?php
// short comments are this way
/*
    multi-line comment
*/

// välja printimiseks print(); or
echo 'Hello world';

$var = 'Moonika';
$var = 4; //int
$var = 4.1; //float
$var = true; //boolean
$var = NULL; //väärtuse puudumine
$var = new StdClass(); //object
$var = ['hello', 1, 1.5, true]; //array

foreach($var as $key => $value) {
    var_dump($key);
    var_dump($value);
}

$var = [
    'name' => 'Moonika',
    'age' => '26',
    'hasCat' => 'true',
    2,
    true
];

var_dump($var);
var_dump($var['name']);
var_dump($var[1]);

function hello($name) {
    echo 'Hello ' . $name;
}

hello('Moonika');

$name = 'Moon';
echo ".\n.\n Don't be an a** $name!";
// '' ei tööta muutjutate printimine ja \n