<?php
require "Model/productManager.php" ;
require "Model/db.php";
?>

<?php
if(isset($_POST["addProduct"])){
  addProduct($_POST);
  header("Location: admin.php?message=Votre article a bien été ajouté.");
  exit;
 }
elseif($_GET["action"]=== "delete" ){
  deleteProduct($_GET['id']);
  header("Location: admin.php?message=Votre article a été supprimé.");
  exit;
}

 ?>
