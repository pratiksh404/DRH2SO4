<?php


$food = array('healthy'=>array('papaya','rice','egg'),'unhealthy'=>array('momo','icecream','alcohol'));

foreach($food as $element => $inner_array)
{
    echo '<strong>'.$element.'</strong><br>';
    foreach($inner_array as $item)
      {  echo $item.'<br>';}
}

?>
