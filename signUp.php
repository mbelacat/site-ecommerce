<?php
require "Service/formCleaner.php";
require "Service/loginManager.php";
require "Service/errorManager.php";
require "Service/repopulateFormFunction.php";
require "Model/userManager.php";
require "Model/db.php";

$_POST = cleanFormEntries($_POST);
$code = checkResgistration($_POST);
if(strlen($code) > 0){
  postFormIsNotEmpty($_POST);
  header("location: index.php?errors=".$code);
  exit;
}
else{
  // on va verifier si le nom exite en
  $userCheck = getUser($_POST["name"]);
  if(!$userCheck){
    $_POST["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);
    //si existe pas donc empty = On ajoute une entrée dans la table user
    //return true si ajoute user
    if(addUser($_POST)){
      header("Location: index.php?message=Vous êtes bien enregistré(e). Vous pouvez vous connecter.");
      exit;
    }else{
      header("Location: index.php?message= OUPS!!! Une erreur est survenue. Veuillez contacter l'administrateur du site");
      exit;
    }
  }
  else{
   header("Location:index.php?message=Ce nom existe déjà.Veuillez en choisir un autre.");
   exit;
 }
}
?>
