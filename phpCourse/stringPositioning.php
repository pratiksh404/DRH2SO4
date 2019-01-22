<?php

if(isset($_GET['Username'])&&!empty($_GET['Username']))
{
    echo $username = $_GET['Username'];
}


?>
<form action="stringPositioning.php" method="GET">

    <input type="text" name="Username">
    <br>
    <input type="submit" value="submit">

</form>


<!--isset — Determine if a variable is set and is not NULL-->
