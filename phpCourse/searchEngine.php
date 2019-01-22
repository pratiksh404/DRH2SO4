<form action="searchEngine.php" method="post">
    <input type="text" name="search_name">
    <input type="submit" value="search">
</form>
<?php
require 'inc_connect.php';
if(isset($_POST['search_name']))
{
    $search_name = $_POST['search_name'];
    if(!empty($search_name))
    {
        $qry = "SELECT Name FROM names WHERE Name LIKE %".mysqli_real_escape_string($con,$search_name)."%";
        $query_run = mysqli_query($con,$qry);
        if((mysqli_num_rows($query_run))>=1)
        {
            echo "results found";
            
            while($query_row = mysqli_fetch_assoc($query_run))
            {
                
$search_result = mysqli_result($query_run,0,'Name');
                echo $search_result;
                
            }
            
        }
        else{
            echo "result not found";
            
        }
    }
}
?>



<!--

The mysqli_real_escape_string() function escapes special characters in a string for use in an SQL statement.
its lke using \ in php statement
line 8 is PROTECTION from SQLINJECTION

-->
