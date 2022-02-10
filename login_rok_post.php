<?php

// ROK (KHR) on 2020-11-13 

session_start(); // 세션
include ("dbconnect.php"); // DB접속


$id = $_POST['id']; // 아이디
$pw = $_POST['password']; // 패스워드
// $id = $_GET['id'];
// $pw = $_GET['password'] ;

  
$query = "select * from users where loginid='$id' and password='$pw'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);


if($id==$row['loginid'] && $pw==$row['password']){ // id와 pw가 맞다면 login

   $_SESSION['id']=$row['id'];
   $_SESSION['name']=$row['name'];
  

}else{ // id 또는 pw가 다르다면 login 폼으로

	http_response_code(403) ;

}

?>
