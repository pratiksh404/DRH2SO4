<?php
$username = $_COOKIE['username'];
if(isset($_COOKIE['username']))
{echo $username;}
else
{echo "your cookie experied";}
?>
