<?php

$db_host = "localhost";
$db_user = "semin";
$db_password = "semin123";
$db_name = "test1";

session_start(); // 세션
$con = new mysqli($db_host, $db_user, $db_password, $db_name); // 데이터베이스 접속
if ($con->connect_errno) { 
	die('Connection Error : '.$con->connect_error); 
} // 오류가 있으면 오류 메세지 출력


// $id = $_POST['id']; // 아이디
// $pw = $_POST['password']; // 패스워드
$id = $_GET['id'];
$pw = $_GET['password'] ;

  
$query = "select * from users where name='$id' and password='$pw'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);


if($id==$row['loginid'] && $pw==$row['password']){ // id와 pw가 맞다면 login

   $_SESSION['id']=$row['id'];
   $_SESSION['name']=$row['name'];
   echo "로그인에 성공 하였습니다" ;
  

}else{ // id 또는 pw가 다르다면 login 폼으로

	http_response_code(403) ;

}

?>
