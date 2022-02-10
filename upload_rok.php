<?php
$HOME = "/home/ubuntu/rokmedia/" ;

if (is_uploaded_file($_FILES['bill']['tmp_name'])) {
    $uploads_dir = $HOME ;
    $tmp_name = $_FILES['bill']['tmp_name'];
    $pic_name = $_FILES['bill']['name'];
    move_uploaded_file($tmp_name, $uploads_dir.$pic_name);

    $filePath = sprintf("file://%s%s",$uploads_dir,$pic_name) ;
    $cmd  = sprintf("MEDIAURI:%s\n",$filePath) ;
    header($cmd) ;
}

else{
  echo "File not uploaded successfully.";
  http_response_code(404) ;
}


?>
