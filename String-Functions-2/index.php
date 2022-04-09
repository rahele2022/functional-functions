<?php

echo str_repeat('=>' , 20) . '</br>';

//-------------------------------------

$text = 'Classic Texts ';

echo substr($text , 8 , 3) . '</br>';

//--------------------------------------

$text = '       Classic Texts';

echo trim($text) . '</br>';

//--------------------------------------

$text = 'Classic-Texts';

var_dump(explode('-' , $text));

//---------------------------------------

$text = '     Classic Texts   ';

var_dump(explode(' ' , trim($text)));

//---------------------------------------

$list = ['Classic' , 'Texts'];

var_dump(implode(' ',$list ));

//-----------Delete html tags--------------

$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';

var_dump(strip_tags($text , '<p>'));
