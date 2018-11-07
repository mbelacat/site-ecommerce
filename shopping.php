
<?php
session_start();
require "Service/functionsShoppingCart.php";
require "Model/function.php";
require "Service/loginManager.php";
?>


<?php

   $products = getProducts();
   $_GET['id'] = intval($_GET['id']) ;
   foreach ($products as $key => $product) {
     if ($_GET['id'] === $product["id"]) {
       addToShoppingCart($product);
       header("Location: products.php");
       exit;
     }
   }
   //On verifie que $productPrice soit un integer
   $productPrice =intval($product['price']);




// }
// if (!$erreur){
//    switch($action){
//       Case "add":
//       addToShoppingCart($product["name"], $product['price'], 1);
//       break;
//
//       // Case "remove":
//       //    removeProduct($productName);
//       //    break;
//       //
//       // Case "refresh":
//       //    refresh($prodQuant);
//       //    break;
//
//       Default:
//          break;
//    }
// }
 ?>
