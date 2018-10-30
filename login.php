<!-- Voici la page qui va recevoir les données du formulaire, les traiter et rediriger l'utilisateur vers la page adéquate -->
<?php
var_dump($_POST);
require("fonctions.php");
$users = getUsers();
var_dump($users);

foreach ($_POST as $key => $value) {
 $_POST[$key] = mb_strtoupper("$value") ;
}

foreach ($users as $key => $user) {
 echo $user["name"]." ".$user["firstname"];
 if($user["name"] === $_POST["name"] && $user["firstname"] === $_POST["firstname"] &&  $user["password"] === $_POST["password"] && $user["password"] ===  $user["PasswordRepeat"]){
   session_start();
   $_SESSION["user"] = $_POST;
   header("Location: products.php");
   exit;
   // echo "vous etes dejà inscrit";
   return;
 }
}
header("Location: index.php?message=Erreur identifiants");
exit; // important : stop l'execution du script

var_dump($_POST);
?>
