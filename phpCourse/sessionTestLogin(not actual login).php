<?php
session_start();
$username = $_SESSION['name'];
if(isset($_SESSION['name']))
{
     
echo "welcome ".$username;
}
else
{
    error_reporting(0);
    echo "please login";
}
?>
