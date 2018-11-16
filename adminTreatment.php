<?php
require "Model/productManager.php" ;
require "Model/db.php";
?>

<?php
if(isset($_POST["addProduct"])){
  var_dump($_POST);
  addProduct($_POST);
  header("Location: admin.php?message=Votre article a bien été ajouté.");
  exit;
 }
//elsif($_GET["action"]=== "delete" ){
//   deleteProduct($_GET['key']);
//   header("Location: admin.php?message=Votre article a été supprimé.");
//   exit;
// }

 ?>
