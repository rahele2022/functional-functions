<?php

$userdata = [

    'name' => 'ali',
    'family'=> 'mousavi',
    'country'=> 'iran',
    'age'=> 27
];

$extradata = [

    'id'=> 120,
    'id-color'=> 'red'
];

echo count($userdata) . '</br>';

echo sizeof($userdata) . '</br>';

//------------------------------------------------

echo is_array($userdata) . '</br>';

//------------------------------------------------

var_dump(in_array('ali' , $userdata)) . '</br>';

//-------------------------------------------------

print_r($userdata) . '</br>';

//-------------------------------------------------

$list = array_merge($userdata , $extradata);

var_dump($list);

//-------------------------------------------------

var_dump(array_values($list));

//-------------------------------------------------

var_dump(array_keys($list));