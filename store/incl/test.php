<?php
//Gets the IP Address from the visitor
$PublicIP = $_SERVER['REMOTE_ADDR'];
//Uses ipinfo.io to get the location of the IP Address, you can use another site but it will probably have a different implementation
$json     = file_get_contents("http://ipinfo.io/$PublicIP/geo");
//Breaks down the JSON object into an array
$json     = json_decode($json, true);
//This variable is the visitor's county
echo $country  = $json['country'];
//This variable is the visitor's region
$region   = $json['region'];
echo $city     = $json['city'];
?>