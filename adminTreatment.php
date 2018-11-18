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
elseif($_GET["action"] === "delete" ){
  deleteProduct($_GET['id']);
  header("Location: admin.php?message=Votre article a été supprimé.");
  exit;
}
elseif(isset($_POST["updateProduct"])){
  var_dump($_POST);
  var_dump($_GET);
  $id = $_GET;
  updateProduct($_POST, $id);
  header("Location: admin.php?message=Votre article a bien été modifié.");
  exit;
}

 ?>
