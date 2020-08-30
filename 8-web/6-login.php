<?php

$user = "Luis";
$pass = "Luis";

session_start();

if(
  $_POST["username"] and $_POST["username"] == $user and
  $_POST["password"] and $_POST["password"] == $pass
){
  $_SESSION["login"] = "Admin";
  header("location: 6-index.php");
}

?>
