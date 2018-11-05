<?php include("template/header.php"); ?>
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

<div class="row">
<?php include("template/aside.php"); ?>
<?php
$_GET['id'] = (int) $_GET['id'];
foreach ($products as $key => $product){
  if ($_GET['id'] === $product['id']){
echo
  '<article class="col-9 mt-4 mb-4">

        <h5 class="card-title text-center">' . $product["name"] . '</h5>

        <div class="card-body">
          <h6 class="card-stock">' . $product["stock"] . '</h6>
          <p class="card-description">'. $product["description"] . '</p>
          <div class="row">
            <div class="card-category col-6 ">' . $product["category"] . '</div>
            <div class="card-price col-6 text-right">' . $product["price"] . '$ </div>
          </div>
        </div>

        <div class="card-body-link text-center">
          <a href="products.php" class="card-link">Retour</a>
        </div>

    </div>';
        }
      }
?>

</article>







<?php include("template/footer.php"); ?>
