<?php
define ('LIVE',FALSE);
define ('EMAIL', 'it@okt-s.com');
define ('BASE_URL', 'http://127.0.0.1:8888/testinscription');
define ('MYSQL', 'mysqli_connect.php');
date_default_timezone_set('US/Eastern');

    function my_error_handler ($e_number, $e_message, $e_file ,$e_line, $e_vars){
       $message="<p>une erreure dans le script '$e_file' a la ligne '$e_line' $e_message\n <br/>";
	   $message  .="DATE/Time:"  .date('n-j-Y H:i:s') . "\n<br/>";
	   $message .="<pre>" .print_r($e_vars, 1) ."</pre>\n</p>";
	   if(!LIVE){
	   echo '<div>' .$message. '</div><br>';
	   } else{
	   mail(EMAIL ,'Site Error!', $message, 'From :it@okt-s.com');
	     if($e_number != E_NOTICE){
		 echo'<div> A system error sdkfhkhg . </div><br>';}
		 

    }}
	set_error_handler('my_error_handler');
	?>
