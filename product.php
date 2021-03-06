<?php include("template/header.php");
 require("Service/functionsShoppingCart.php")?>
<?php
session_start();
if(empty($_SESSION)){
  header("Location: index.php");
  exit;
}
require "Model/function.php";
$products = getProducts();
$users = getUsers();

// var_dump($_SESSION);
?>

<div class="row product">
<?php include("template/aside.php"); ?>
<?php

$_GET['id'] = intval(htmlspecialchars($_GET['id']));
foreach ($products as $key => $product){
  if ($_GET['id'] === $product['id']){
?>
  <article class="col-9 mt-4 mb-4">
    <h5 class="card-title text-center"><?php echo $product["name"]?></h5>
    <div class="card-body">
      <p class="card-description"><?php echo $product["description"]?></p>
      <div class="row text-center d-flex justify-content-around">
        <div class="card-category col-2 bg-lgt-green "><?php echo $product["category"]?></div>
        <div class="card-avaibility col-2 bg-lgt-green ">
          <?php if ($product["stock"] === false) {
                echo "Victime de son succés";}
                else{
                echo "Disponible";} ?>
        </div>
        <div class="card-made-in col-2 bg-lgt-green"><?php echo $product["made_in"]?></div>
        <div class="card-price col-2 bg-lgt-green font-weight-bold"><?php echo $product["price"]?> $ </div>
      </div>
    </div>
    <div class="card-body-link text-center">
      <a href="products.php" class="card-link">Retour</a>
      <?php if($product["stock"]){?>
        <a href="shopping.php?action=add&id=<?php echo $product["id"]?>" class="card-link">Ajouter</a>
      <?php };?>
    </div>
  </article>
  <?php
        }
      }
    ?>
</div>
<?php include("template/footer.php");?>
