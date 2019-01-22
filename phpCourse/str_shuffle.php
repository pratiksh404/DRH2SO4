<?php

$password = "This is My Password";

$shuffle = str_shuffle($password);

echo $shuffle;

echo '<br>';

$half = substr($shuffle,0,strlen($shuffle)/2);

echo $half;

echo '<br>';

$reverse = strrev($shuffle);

echo $reverse;

echo '<br'; 

$str1 = 'my name is batman';
$str2 = 'my name is wonderwoman';

$result = similar_text($str2,$str1);

echo $result;


?>

<!--

substr() = Returns the portion of string specified by the start and length parameters.

-->
