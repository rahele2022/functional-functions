<?php

$list = [1,2,5,3,4,5,3];

$newlist = [

    'ali'=> 18,
    'reza'=> 15,
    'sara'=> 20,
    'tina'=> 10
];

sort($list);

var_dump($list);

//---------------Desending Sort--------------------

rsort($list);

var_dump($list);

//--------------------------------------------------

ksort($newlist);

var_dump($newlist);

krsort($newlist);

var_dump($newlist);

//--------------------------------------------------

asort($newlist);

var_dump($newlist);

arsort($newlist);

var_dump($newlist);

//---------------------------------------------------

sort($newlist);

var_dump($newlist);

//---------------------------------------------------


