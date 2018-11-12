<?php
session_start();
if(!isset($_SESSION["user"])){
  header("Location: index.php");
  exit;
}
?>
<?php require("Service/functionsShoppingCart.php") ?>
<?php include("template/header.php"); ?>

<div class="row d-flex flex-column w-75">
  <?php if(isset($_GET["message"])){
    $message = htmlspecialchars($_GET["message"]);
      echo "<p>$message</p>";
  } ?>
  <?php if(!empty($_SESSION['shoppingCart'])) { ?>
  <h2 class="col-12 ">Votre panier</h2>
  <table class="table col-12 text-center">
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
        echo '<td><a href="shopping.php?action=decrease&key='. $key .'"> < </a>'.$value["productQuantity"].'<a href="shopping.php?action=increase&key='. $key .'"> > </a></td>';
        echo '<td>'.subTotal($key)." $</td>";
        echo '<td><a href="shopping.php?action=remove&key='. $key .'" class="card-link"><i class="fas fa-trash-alt"></i></a></td>';
        echo '</tr>';
      }
      ?>
    </tbody>
  </table>
  <h3>Total de votre panier : <?php echo totalAmount($key)?> $</h3>
  <p><a href="shopping.php?action=empty">Vider mon panier</a></p>
  <p> <a href="products.php">retour à l'acceuil</a></p>
  <?php }else{?>
  <div class="text-center">
    <h2> Votre panier est vide</h2>
    <a href="products.php">retour à l'acceuil</a>
  </div>
<?php } ?>
</div>
<?php include("template/footer.php"); ?>
