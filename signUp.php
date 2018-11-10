<?php
session_start();
require "Service/formCleaner.php";
require "Service/loginManager.php";
require "Service/errorManager.php";
require "Service/repopulateFormFunction.php";
$_POST = cleanFormEntries($_POST);
$code = checkResgistration($_POST);
if(strlen($code) > 0){
  $_POST = cleanFormEntries($_POST);
  $code = checkResgistration($_POST);
  postFormIsNotEmpty($_POST);
  header("location: index.php?errors=".$code);
  exit;
}else{
  header("Location: products.php?message=Vous êtes bien enregistré!");
  exit;
}
?>
