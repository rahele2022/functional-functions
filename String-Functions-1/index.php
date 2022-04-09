<?php

$text = 'Here you can find activities to practise your reading skills. Reading will help you to improve your understanding of the language and build your vocabulary';

echo 'String Length :'. strlen($text).'</br>' ;

echo 'String Words : '. str_word_count($text).' </br> ';

echo 'String Position :' . strpos($text , 'practise') . '</br>';

echo 'String Replace :' . str_replace('skills' , 'proficiency' , $text) . '</br>';

echo 'String to Lower :' . strtolower($text) . '</br>';

echo 'String to upper :' . strtoupper($text);
