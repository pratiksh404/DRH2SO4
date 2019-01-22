<?php
$time =time();
$actualtime = date('D:M:Y',$time);
$modified_tiime = date('D:M:Y',strtotime('+ 1year  2weeks 4 hours'));
echo $actualtime.'<br>';
echo $modified_tiime;

?>
<!--date takes two paramatere-->
