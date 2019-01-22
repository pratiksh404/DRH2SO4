<?php

$string = "My name is Batman";
$string_new = substr_replace($string,'pratik',11,6);
echo $string_new;


?>

<!--
substr_replace = takes four argument
1.string to serach for
2 .string to replace
3.position to start
4.number of character to replace
-->
