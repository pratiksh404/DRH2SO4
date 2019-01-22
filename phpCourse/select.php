<?php
require'inc_connect.php';

$qry = "SELECT name,addres,phone FROM names ORDER BY name";

 $query_run = mysqli_query($con,$qry);

if($query_run)
{
    echo '<br>'."query sucess".'<br>';
    while($query_row = mysqli_fetch_assoc($query_run))
    {
        $name = $query_row['name'];
        $address = $query_row['address'];
        $phone = $query_row['phone'];
        
       // echo "$name,$address,$phone <br>";
    }
}
else
{
    echo '<br>'."query failed";
    echo '<br>'.mysqli_error($con);
}

?>


<!--
mysqli_query = expects two parameters the connection and query
mysqli_num_rows($query_run) = returns number of rows in table
-->
