<?php
session_start();
require "Service/formCleaner.php";
require "Service/loginManager.php";
require "Service/errorManager.php";
require "Service/repopulateFormFunction.php";
require "db.php";

$_POST = cleanFormEntries($_POST);
$code = checkResgistration($_POST);
if(strlen($code) > 0){
  postFormIsNotEmpty($_POST);
  header("location: index.php?errors=".$code);
  exit;
}else{
  // On ajoute une entrée dans la table user
  // $query = $db->exec('INSERT INTO user(id, name, sexe, status, password) VALUES (\' \',\'$_POST["name"]\', \'$_POST["sexe"]\', \'user\', \'$_POST["password"]\')');
  $query = $db->prepare('INSERT INTO user(name, sexe, status, password) VALUES(:name, :sexe, :status, :password)');
  $query->execute(array(
      "name" => $_POST["name"],
      "sexe" => $_POST["sexe"],
      "status" =>  "user",
      "password" => $_POST["password"]));
  // $query->closeCursor();
  if($query){
  header("Location: index.php?message=Vous êtes bien enregistré. Vous pouvez vous connecter.");
  exit;
  }else{
    header("Location: index.php?message=Vous n'etes pas enregistré. Veuillez contacter l'administrateur du site.");
    exit;
  }
}
?>
