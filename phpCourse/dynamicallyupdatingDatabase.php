<?php
include('inc_connect.php');
//checking the form is submitted or not
if(isset($_POST['submit']))
{
    //getting the data from form
    $name=$_POST['name'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
   
//making statement
$stmt="INSERT INTO names(Name, Address, Phone) VALUES ('$name', '$address', $phone )";
//making connection

//making query
$qry=mysqli_query($con, $stmt) or die(mysqli_error($con));
//giving the message
if($qry)
{ echo "User Registered";}
else {echo "Somthing wrong while register the user";}

}
?>


<form action="dynamicallyupdatingDatabase.php" method="post">
    NAME: <input type="text" name="name"><br>
    ADDRESS: <input type="text" name="address"><br>
    PHONE: <input type="number" name="phone"><br>
    <br>
    <input type="submit" value="submit" name="submit">
</form>
