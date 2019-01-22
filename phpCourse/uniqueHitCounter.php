<?php



$http_client_ip = $_SERVER['HTTP_CLIENT_IP']; 
$http_x_forwarded_for = $_SERVER['HTTP_X_FORWAREDED_FOR'];
$remote_addr = $_SERVER['REMOTE_ADDR'];

IF(!empty($http_client_ip))
{$ip_address = $http_client_ip;} 
elseif(!empty($http_x_forwarded_for))
{$ip_address=$http_x_forwarded_for;}
else{$ip_address=$remote_addr;}




      $filename = "UNIQUECOUNT.txt";
$ip_file = file($filename);
    foreach($ip_file as $ip)
    {
        $ip_single = trim($ip);
        if($ip_address == $ip_single)
        {
            $found = true;
            break;
        }
        else{
            $found = false;}
    }
    if($found == false)
    {
       $filename = "UNIQUECOUNT.txt";
$handle = fopen($filename, 'r');
$current = fread($handle,filesize($filename));
fclose($handle);

$handle = fopen($filename, 'w');
fwrite($handle,$ip_address."\n");
fclose($handle);
    }

?>



<!--   file — Reads entire file into an array   -->
<!--  here we are also counting visitor with new ip address-->
