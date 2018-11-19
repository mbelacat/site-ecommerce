<?php
session_start();
if(!isset($_SESSION["user"])){
  header("Location: index.php");
  exit;
}
?>
<?php
include "Template/header.php" ;
require "Service/formCleaner.php";
require "Service/loginManager.php";
require "Model/db.php";
require "Model/productManager.php";
?>


<div class="row d-flex flex-column w-75">
<?php
  if(isset($_GET["message"])){
    $message = htmlspecialchars($_GET["message"]);
    echo "<p>$message</p>";
  }
?>
<?php
  $products = getProducts();

?><div class="">
    <h2 class="col-12 ">Tous les produits</h2>
    <a href="addProductForm.php">ajouter un produit</a>
  </div>
  <table class="table col-12 text-center">
    <thead>
      <tr>
        <th scope="col">Article</th>
        <th scope="col">Category</th>
        <th scope="col">Made in</th>
        <th scope="col">Price</th>
        <th scope="col">Stock</th>
        <th scope="col">Changer le stock</th>
        <th scope="col">Modifier</th>
        <th scope="col">Supprimer</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($products as $key => $value) {
        echo '<tr>';
        echo '<th scope="row">'.$value["name"]."</th>";
        echo '<td scope="row">'.$value["category"]."</th>";
        echo '<td scope="row">'.$value["made_in"]."</th>";
        echo '<td scope="row">'.$value["price"]." $</th>";
        if($value["stock"]){
          $value["stock"] = "en stock";
        }else{
          $value["stock"] = " épuisé ";
        }
        echo '<td scope="row">'.$value["stock"]."</th>";
        echo '<td><a href="" class="card-link"></a></td>';
        echo '<td><a href="updateProductForm.php?id='. $value["id"] .'" class="card-link">Modifier</a></td>';
        echo '<td><a href="adminTreatment.php?action=delete&id='. $value["id"] .'" class="card-link"><i class="fas fa-trash-alt"></i></a></td>';

        // echo '<td><a href="shopping.php?action=decrease&key='. $key .'"> < </a>'.$value["productQuantity"].'<a href="shopping.php?action=increase&key='. $key .'"> > </a></td>';
        // echo '<td><a href="shopping.php?action=remove&key='. $key .'" class="card-link"><i class="fas fa-trash-alt"></i></a></td>';
        // echo '<th scope="row">'.$value["name"]."</th>";
        echo '</tr>';

      }
      ?>
    </tbody>
  </table>
</div>










<?php  include "Template/footer.php";  ?>
