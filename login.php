<!-- Voici la page qui va recevoir les données du formulaire, les traiter et rediriger l'utilisateur vers la page adéquate -->
<?php
// var_dump($_POST);
require "Model/function.php";
$users = getUsers();
// var_dump($users);

foreach ($_POST as $key => $value) {
 $_POST[$key] = strtoupper("$value") ;
}

foreach ($users as $key => $user) {
  $user["name"] = strtoupper($user['name']) ;
  $user["password"] = strtoupper($user['password']) ;

 // echo $user["name"];
 // echo $user["password"];

 if(($user["name"] === $_POST["name"]) && ($user["password"] === $_POST["password"])){
echo "vous etes dejà inscrit";
   session_start();
   $_SESSION["user"] = $user; 
   header("Location: products.php");
   exit;
   // return; // permet de retun l'echo ci-dessus
 }
}
header("Location: index.php?message=Erreur identifiants");
exit; // important : stop l'execution du script

// var_dump($_POST);
?>
