<!-- Voici la page qui va recevoir les données du formulaire, les traiter et rediriger l'utilisateur vers la page adéquate -->
<?php
require "Model/userManager.php";
require "Service/formCleaner.php";
require "Service/loginManager.php";
require "Model/db.php";


//On vérifie si le formulaire a été rempli
if(!empty($_POST)) {
  $_POST = cleanFormEntries($_POST);
  //On récupère les utilisateurs stockés sur le site (ici pour l'exercice ils sont stockés dans une fonction)
  // $users = getUsers();
  //On vérifie si on trouve une correspondance avec les infromations du formulaire
  $user = getUser($_POST["name"]);
  $hashedPassword = $user["password"];
  $correctPassword = password_verify($_POST["password"], $hashedPassword);
  var_dump($correctPassword);
  if($correctPassword == true) {
    startUserSession($user);
    header("Location: products.php");
    exit;
  }
  else {
    header("Location: index.php?message=Nous n'avons aucun utilisateur avec ce nom ou ce mot de passe");
    exit;
  }
}
//Si le formulaire n'est pas rempli on renvoie l'utilisateur sur la page de login avce un message
else {
header("Location: index.php?message=Vous devez remplir les champs du formulaire");
exit;
}
?>
