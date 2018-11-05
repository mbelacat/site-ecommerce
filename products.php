<!-- voici la page qui n'est accessible que si l'utilisateur est connecté, qui affiche les produit et les informations sur l'utilisateur -->
<?php
session_start();
if(!isset($_SESSION["user"])){
  header("Location: index.php");
  exit;
}
include("template/header.php");
require "Model/function.php";
$products = getProducts();
$users = getUsers();
// var_dump($_SESSION);
?>
<main class="container justify-content-center mw-100">
  <div class="row">
    <?php include("template/aside.php"); ?>
    <div class="col-lg-9">
      <h2 class="text-center">Nos produits</h2>
      <div class="row ">

        <?php   foreach ($products as $key => $product) {
          if ($product["stock"] === true){
            $stock = 'disponible';
          }else{
            $stock = 'non disponible';
          }
          echo
          '<div class="col-12 col-md-6 col-lg-4 mt-4 mb-4">
            <div class="card ">
              <img class="card-img" src="tile.png" alt="Card image">
              <div class="row card-img">
                <div class="card-category col-6 ">' . $product["category"] . '</div>
                <div class="card-price col-6 text-right">' . $product["price"] . '$ </div>
              </div>
              <div class="card-body">
                <h5 class="card-title">' . $product["name"] . '</h5>
                <h6 class="card-stock">' . $stock . '</h6>
              </div>
              <div class="card-body-link text-center">
                <a href="product.php?id=' . $product["id"] . '" class="card-link badge badge-secondary p-2 m-1">Voir</a>
              </div>
            </div>
          </div>';
              }
              ?>
        </div>
    </div>
  </div>
</main>
<?php include("template/footer.php"); ?>
