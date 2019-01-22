<?php

$handle = fopen('names.txt','w');
    fwrite($handle,'pratik'."\n");
fwrite($handle,'batman'."\n");

?>


<!--
fopen takes teo arguement 
1 file names
2 operation to be performed
    w write
    r read
    a append
-->
