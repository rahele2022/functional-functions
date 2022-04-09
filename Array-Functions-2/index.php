<?php

$userdata = [

  'name'=> 'ali',
  'family'=> 'mousavi'
];

$extradata =[

    'country'=> 'iran',
    'age'=> 20
];

$list = array_merge($userdata , $extradata);

var_dump(array_key_exists('name' , $list));

//-------------------------------------------------

array_push($list , 'id');

var_dump($list);

//-------------------------------------------------

array_pop($list);

var_dump($list);

//--------------------------------------------------

array_shift($list);

var_dump($list);

//--------------------------------------------------

$list1 = array_flip($list);

var_dump($list1);

//--------------------------------------------------

var_dump(array_rand($list));

//--------------------------------------------------

var_dump(array_reverse($list));

//--------------------------------------------------

$newlist = [1,2,3,4,5,2,3,1];

var_dump(array_unique($newlist));

//--------------------------------------------------

var_dump(array_slice($newlist , 2 , 3));