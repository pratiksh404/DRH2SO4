<?php

require 'inc_connect.php';
include 'core_inc.php';

if(loggedin())
{
    echo "you\'re logged in";
}
else{
    include 'login.php';
}

?>
