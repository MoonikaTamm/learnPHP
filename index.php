<?php

function hello($name) {
    echo 'Hello ' . $name;
}

hello('Moonika');

$name = 'Moon';
echo ".\n.\n Don't be an a** $name!";
// '' ei tööta muutjutate printimine ja \n

class Box {
    public $width;
    public $length;
    public $height;

    public function volume() {
        return $this->width * $this->length * $this->height;
    }
}

$var1 = 1;
$var2 = $var1;
$var2 = 2;
var_dump($var1);


$box1 = new Box();
$box1->width = 10;
$box1->length = 20;
$box1->height = 30;
var_dump($box1);
var_dump($box1->volume());

$box2 = new Box();
$box2->width = 40;
$box2->length = 40;
$box2->height = 60;
var_dump($box2);
var_dump($box2->volume());


$box1= 1;
$box2 = $box1; // box2 ja box1 viitavad samale kohale mälus -ehk üks objekt.
//&? infront of object
// clone $box1 - uus object, samade muutujatega
$box2 = 2;
var_dump($var1);