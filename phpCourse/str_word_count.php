<?php

$string = "Im the knight, im batman";

$count = str_word_count($string,2);
print_r($count);

echo '<br>';

$count1 = str_word_count($string,1,',');
print_r($count1);

echo '<br>';

$count0 = str_word_count($string,0);
print_r($count0);


?>
<!--

print_r() displays information about a variable in a way that's readable by humans.

-->
