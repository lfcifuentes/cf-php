<?php
$loginSuccessfull = false;

if(
  isset($_SERVER['PHP_AUTH_USER']) and
  isset($_SERVER['PHP_AUTH_PW'])
){
  $user = $_SERVER['PHP_AUTH_USER'];
  $pass = $_SERVER['PHP_AUTH_PW'];
  if($user == "Luis" and $pass = "Luis"){
    $loginSuccessfull = true;
  }
}

if(!$loginSuccessfull){
  header("www-authenticate: basic");
  header("HTTP/1.0 401 Unautorized");
  echo "Error";
}
?>
