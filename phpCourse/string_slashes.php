<?php

$string = 'this is unordered list html code <ul> <li>hi</li>  </ul>';

$htmlentities = htmlentities($string);

echo $htmlentities;

echo '<br>';


$string2 = "i'm Batman.";

$string_slashes = addslashes($string2);
echo $string_slashes;
echo "this is goood for database";

echo '<br>';

echo stripslashes($string_slashes);


?>
<!--

adding slashes is good for database ....for security propose-->
