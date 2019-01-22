<?php
if(isset($_POST['roll']))
{
    $rand = rand(1,6);
    echo $rand;
}
?>
<form action="makingDiceApp.php" method="post">
    <input type="submit" value="roll" name="roll">
</form>
