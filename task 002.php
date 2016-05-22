<?php

$firstName = "Danijela";
$age = "26";
$height = "1.76";

print_r($firstName);
print_r($age);
print_r($height);

/*
var_dump($firstName);
var_dump($age);
var_dump($height);
*/

$newage = (int)$age;
$newheight = (double)$height;

var_dump($firstName);
var_dump($newage);
var_dump($newheight);





?>