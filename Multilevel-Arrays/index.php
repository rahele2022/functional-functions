<?php

$users =[

    [
        'name' => 'ali',
        'age' => 27
    ],

    [
        'name' => 'sara',
        'age' => 19
    ],

    [
        'name' => 'reza',
        'age' => 50
    ]
];

var_dump($users);

//----------------------------------------

foreach ($users as $user){
    foreach ($user as $u){
        echo $u . '<br>';
    }
}

//-----------------------------------------

var_dump(array_column($users , 'name'));

//-----------------------------------------

$filterusers = array_filter($users ,fn($user) => $user['age'] > 20);


var_dump($filterusers);
