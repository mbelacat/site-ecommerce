<?php
function addToShoppingCart($product){
  $idProduct = array_column($_SESSION['shoppingCart'], "id");
     // if the Idproduct exist we add product
     $keyProduct = array_search($product['id'], $idProduct);

     if ($keyProduct === false){
       $product['productQuantity'] = 1;
       array_push( $_SESSION['shoppingCart'],$product);
     }
     else{
        $_SESSION['shoppingCart'][$keyProduct]['productQuantity'] += 1 ;
     }
}

function  addToShoppingCartForeach($products){
  $products = getProducts();
  $_GET['id'] = intval($_GET['id']) ;
  foreach ($products as $key => $product) {
    if ($_GET['id'] === $product["id"]) {
      addToShoppingCart($product);
      $productPrice =intval($product['price']);
    }
  }
}

function emptyShoppingCart(){
  unset($_SESSION['shoppingCart']);
  $_SESSION['shoppingCart']= [];
}

function removeToShoppingCart($key){
  $key = intval($_GET['key']);
  unset($_SESSION['shoppingCart'][$key]);
}

function increaseProduct($key){
    $_SESSION['shoppingCart'][$key]['productQuantity'] += 1;
}

function decreaseProduct($key){
  if ($_SESSION['shoppingCart'][$key]['productQuantity'] > 0) {
    $_SESSION['shoppingCart'][$key]['productQuantity'] -= 1;
  }else{
    $_SESSION['shoppingCart'][$key]['productQuantity'] = 0;
  }
}

function totalAmount($key){
   $total=0;
  foreach ($_SESSION['shoppingCart'] as $key => $value){
    $total += $_SESSION['shoppingCart'][$key]['productQuantity'] * $value["price"];
   }
   return $total;
}
 function subTotal($key){
   $total = $_SESSION['shoppingCart'][$key]['productQuantity'] * $_SESSION['shoppingCart'][$key]["price"];
   return $total;
 }
//
// function refresh(){
//     for ($i = 0 ; $i < count($prodQuant) ; $i++)
//     {
//       modifTheProductQuantity($_SESSION['shoppingCart']['productName'][$i],round($prodQuant[$i]));
//     }
// }

 ?>
