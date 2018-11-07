
<?php
session_start();
if(!isset($_SESSION["user"])){
  header("Location: index.php");
  exit;
}

// var_dump($_SESSION);
?>
<?php require("Service/functionsShoppingCart.php") ?>

<?php include("template/header.php"); ?>

<div class="row">


  <h2 class="col-12 ">Votre panier</h2>

  <table class="table col-12">
    <thead>
      <tr>
        <th scope="col">Article</th>
        <th scope="col">Quantité</th>
        <th scope="col">Montant</th>
        <th scope="col">Supprimer</th>
      </tr>
    </thead>
    <tbody>

      <?php
      foreach ($_SESSION['shoppingCart'] as $key => $value) {
        echo '<tr>';
        echo '<th scope="row">'.$value["name"]."</th>";
        echo '<td>'.$value["productQuantity"]."</td>";
        echo '<td>'.$value["price"]."</td>";
        echo '<td><a href =""><i class="fas fa-times"></i></a></td>';
        echo '</tr>';
      }
      ?>
    </tbody>

  </table>
  <h3>Total de votre panier :</h3>


</div>
















<?php include("template/footer.php"); ?>
