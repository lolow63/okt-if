<?php
DEFINE ('DB_USER','root');
DEFINE ('DB_PASSWORD','');
DEFINE ('DB_HOST','localhost');
DEFINE ('DB_NAME','ch16');

$dbc = @mysqli_connect (DB_HOST, DB_USER , DB_PASSWORD, DB_NAME);

if(!$dbc){
trigger_error ('no connecte: '.mysqli_connect_error());}
?>