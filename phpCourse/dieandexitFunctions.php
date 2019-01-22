<?php
mysqli_connect('','batman','') or die("couldnt cnnect to database");
echo 'connected';
$adds = $_SERVER['REMOTE_ADDR'];
echo $adds;
?>
