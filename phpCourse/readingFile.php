<?php
if(isset($_POST['name'])&&!empty($_POST['name']))
{
    $name = $_POST['name'];
    $handle = fopen('logName.txt','a');
    fwrite($handle,$name."\n");
    fclose($handle);
    
    $readin = file('logName.txt');
    foreach($readin as $fname)
    {
        echo trim($fname).'<br>';
    }
}
else
{
    echo "please type name";
}
?>
<form action="readingFile.php" method="post">

    <input type="text" name="name">
    <input type="submit" value="submit">
</form>
<h4>record are being saved locally at logName.txt also..</h4>


<!--
\n is not working dont know why
-->
