<!-- voici la page qui n'est accessible que si l'utilisateur est connecté, qui affiche les produit et les informations sur l'utilisateur -->
<?php include("template/header.php"); ?>


<?php
require "Model/function.php";
$products = getProducts();
$users = getUsers();
session_start();
// var_dump($_SESSION);
?>
<main class="container m-0 ">
  <div class="row">
    <?php include("template/aside.php"); ?>
    <div class="col-lg-9">
      <h2 class="text-center"><?php echo "Le panier de " . $_SESSION["user"]["name"];
        ?>
      </h2>
      <div class="row">

        <?php   foreach ($products as $key => $product) {
          echo
          '<div class="col-12 col-md-6 col-lg-4 mt-4 mb-4">
            <div class="card ">
              <div class="row card-img-top" style="height: 9rem;">
                <div class="card-category col-6 ">' . $product["category"] . '</div>
                <div class="card-price col-6 text-right">' . $product["price"] . '$ </div>
              </div>
              <div class="card-body">
                <h5 class="card-title">' . $product["name"] . '</h5>
                <h6 class="card-stock">' . $product["stock"] . '</h6>
                <p class="card-description">'. $product["description"] . '</p>
              </div>
              <div class="card-body-link text-center">
                <a href="product.php" class="card-link">Voir</a>
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
