<?php

function createShoppingCart(){
  // the shopping cart exist in the session? if not we have to create it.
  if(!isset($_SESSION["shoppinCart"])){
    startShoppingCartSession($shoppingCart);
    return true;
  }
}

function startShoppingCartSession(){
  session_start();
  $_SESSION["shoppingCart"] = array();
  $_SESSION["shoppingCart"]["productName"] = array();
  $_SESSION["shoppingCart"]["productPrice"] = array();
  $_SESSION["shoppingCart"]["productQuantity"]= array();
}

function addToShoppingCart($productName, $productPrice, $productQuantity ){
  if (createShoppingCart() )
  {
     // if the product exist we add product
     $keyProduct = array_search($productName,  $_SESSION['shoppingCart']['productName']);

     if ($keyProduct !== false){
        $_SESSION['shoppingCart']['productQuantity'][$keyProduct] += $productQuantity ;
     }
     else{
        //add the product
        array_push( $_SESSION['shoppingCart']['productName'],$productName);
        array_push( $_SESSION['shoppingCart']['productQuantity'],$productQuantity);
        array_push( $_SESSION['shoppingCart']['productPrice'],$productPrice);
     }
  }
}

function removeProduct($productName){
   //Si le panier existe
   if (createShoppingCart())
   {
      //Nous allons passer par un panier temporaire
      $temporarySC=array();
      $temporarySC['productName'] = array();
      $temporarySC['productQuantity'] = array();
      $temporarySC['productPrice'] = array();

      for($i = 0; $i < count($_SESSION['shoppingCart']['productName']); $i++)
      {
         if ($_SESSION['shoppingCart']['productName'][$i] !== $productName)
         {
            array_push( $temporarySC['productName'],$_SESSION['shoppingCart']['productName'][$i]);
            array_push( $temporarySC['productQuantity'],$_SESSION['shoppingCart']['productQuantity'][$i]);
            array_push( $temporarySC['productPrice'],$_SESSION['shoppingCart']['productPrice'][$i]);
         }

      }
      //On remplace le panier en session par notre panier temporaire à jour
      $_SESSION['shoppingCart'] =  $temporarySC;
      //On efface notre panier temporaire
      unset($temporarySC);
   }
}

function totalAmount(){
   $total=0;
   for($i = 0; $i < count($_SESSION['shoppingCart']['productName']); $i++)
   {
      $total += $_SESSION['shoppingCart']['productQuantity'][$i] * $_SESSION['shoppingCart']['productPrice'][$i];
   }
   return $total;
}

function removeShoppingCart(){
   unset($_SESSION['shoppingCart']);
}
 ?>
