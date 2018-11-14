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
  if(empty($userCheck)){
    // si existe dc nom empty = On ajoute une entrée dans la table user
    addUser($_POST);
    if($userCheck($_POST["name"])){
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



// else{
//   header("Location: index.php?message=Vous n'etes pas enregistré. Veuillez contacter l'administrateur du site.");
//   exit;
// }
?>
