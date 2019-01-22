<?php

$http_client_ip = $_SERVER['HTTP_CLIENT_IP']; 
$http_x_forwarded_for = $_SERVER['HTTP_X_FORWAREDED_FOR'];
$remote_addr = $_server['REMOTE_ADDR'];

IF(!empty($http_client_ip))
{$ip_address = $http_client_ip;} 
elseif(!empty($http_x_forwarded_for))
{$ip_address=$http_x_forwarded_for;}
else{$ip_address=$remote_addr;}
?>


<!--

WE USED HTTP_X_FORWARED_FOR TO CHECT IF USER IS ACCESING INTERNET FROM POXY SERVER


remote_addr gives u the ip of machine 

http_client_ip gives you the ip of network(internet) u are connected in

-->