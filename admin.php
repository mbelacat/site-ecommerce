<?php
include "Template/header.php" ;
require "Service/formCleaner.php";
require "Service/loginManager.php";
require "Model/db.php";
require "Model/productManager.php";
?>


<div class="row d-flex flex-column w-75">
<?php
  // if(isset($_GET["message"])){
  //   $message = htmlspecialchars($_GET["message"]);
  //     echo "<p>$message</p>";
  // }
?>
<?php
  $products = getProducts();

?>
  <h2 class="col-12 ">Tous les produits</h2>
  <table class="table col-12 text-center">
    <thead>
      <tr>
        <th scope="col">Article</th>
        <th scope="col">category</th>
        <th scope="col">made_in</th>
        <th scope="col">price</th>
        <th scope="col">stock</th>
        <th scope="col">Ajouter</th>
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
        echo '<td><a href="addProduct.php?action=add&key='. $key .'" class="card-link">Ajouter</a></td>';

        echo '<td><a href="adminTreatment.php?action=add&key='. $key .'" class="card-link">Ajouter</a></td>';
        echo '<td><a href="updateProduct.php?action=update&key='. $key .'" class="card-link">Modifier</a></td>';
        echo '<td><a href="adminTreatment.php?action=remove&key='. $key .'" class="card-link"><i class="fas fa-trash-alt"></i></a></td>';

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
