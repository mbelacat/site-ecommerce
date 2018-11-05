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
  $_SESSION["shoppingCart"] = $shoppingCart;
}
 ?>
