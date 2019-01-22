<form action="WordCensoringPart1.php" method="get">
    <textarea name="user_input" id="" cols="30" rows="10"></textarea>
    <br>
    <input type="text" name="find" placeholder="find">
    <br>
    <input type="text" name="replace" placeholder="replace">
    <input type="submit" value="submit">


</form>
<?php



 if(isset($_GET['user_input'])&&!empty($_GET['user_input']))
 {
     $find=array($_GET['find']);
$replace=array($_GET['replace']);
     $user_input = $_GET['user_input'];
     
     $user_inputNew = str_replace($find,$replace,$user_input);
     
     echo $user_inputNew;
     
     
 }
?>
