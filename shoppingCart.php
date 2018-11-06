<?php require("Service/functionsShoppingCart.php") ?>

<?php
session_start();
if(!isset($_SESSION["user"])){
  header("Location: index.php");
  exit;
}

// var_dump($_SESSION);
 ?>
<?php include("template/header.php"); ?>

<div class="row">


<h2 class="col-12 ">Votre panier</h2>

<table class="table col-12">
  <thead>
    <tr>
      <th scope="col">Article</th>
      <th scope="col">Description</th>
      <th scope="col">Quantité</th>
      <th scope="col">Montant</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

</div>
















<?php include("template/footer.php"); ?>
