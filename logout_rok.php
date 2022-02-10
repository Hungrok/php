<?php

session_start(); // 세션

if($_SESSION['id']!=null){
   session_destroy();
	http_response_code(200) ;
}
else{
	http_response_code(400) ;		
}

?>
