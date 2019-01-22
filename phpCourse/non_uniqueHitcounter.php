<?php

$filename = "count.txt";
    
    $handle = fopen($filename,'r');
    $current = fread($handle,filesize($filename));
    fclose($handle);
    $current += 1;
    
    


$handle = fopen($filename,'w');
    fwrite($handle,$current);
    fclose($handle);

?>
