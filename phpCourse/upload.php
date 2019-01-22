<form action="upload.php" method="GET" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="upload">
</form>
<?php

$uploadname = $_FILES['file']['name'];
//$size = $_FILES['file']['size'];
$type = $_FILES['file']['type'];

$temp_location = $_FILES['file']['tmp_name'];

$extension = strtolower(substr($uploadname,strpos($uploadname,'.')+1));


if(isset($uploadname)&&!empty($uploadname)&&($extension=="jpg")||($extension=="jpeg"))
{
    $location = 'uploads/';
    
    
    move_uploaded_file($temp_location,$location.$uploadname);
    echo "alert('uploaded')";
}
else{
    echo "please choose file or upload only jpg..jpeg file";
}
?>



<!--
remember!!!
$_files is associative array so specifiy variablr and name with {}
when we upload file it goes to the temporary location in your server..developer should process it..ie to specified location ...
-->
