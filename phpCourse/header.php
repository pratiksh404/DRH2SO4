<!--header canot be used after output has been send to the page


always use at frst

-->
<?php ob_start(); ?>
<h1>hello</h1>
<?php
$redirect_page = 'http://drh2so4.ga/?i=1';
$redirect = false;
if($redirect==true)
{
    header('Location: http://www.example.com/');
}
ob_end_flush();
?>


<!--
ob_start() Turn on output buffering
ob_end_flush()  Flush (send) the output buffer and turn off output buffering


USED ON LOGIN SITUATION
-->