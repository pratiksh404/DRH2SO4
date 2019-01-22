<!--   CONNECTION  -->
<?php
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_pass = "";
$database = "myfirstdatabase";
$con = @mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$database);
if(!$con)
{
    die('Couldn\'t Connect');
}
else{
    echo "connected";
}



?>


<!--

in old version we have to specify mysqli_select_db to connect database but in new version mysql_connect does the work
-->
