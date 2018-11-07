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
     var_dump($_SESSION['shoppingCart']);
}

// function removeProduct($productName){
//    //Si le panier existe
//    if (createShoppingCart())
//    {
//       //Nous allons passer par un panier temporaire
//       $temporarySC=array();
//       
//
//       for($i = 0; $i < count($_SESSION['shoppingCart']['productName']); $i++)
//       {
//          if ($_SESSION['shoppingCart']['productName'][$i] !== $productName)
//          {
//             array_push( $temporarySC['productName'],$_SESSION['shoppingCart']['productName'][$i]);
//             array_push( $temporarySC['productQuantity'],$_SESSION['shoppingCart']['productQuantity'][$i]);
//             array_push( $temporarySC['productPrice'],$_SESSION['shoppingCart']['productPrice'][$i]);
//          }
//
//       }
//       //On remplace le panier en session par notre panier temporaire à jour
//       $_SESSION['shoppingCart'] =  $temporarySC;
//       //On efface notre panier temporaire
//       unset($temporarySC);
//    }
// }
//
// function totalAmount(){
//    $total=0;
//    for($i = 0; $i < count($_SESSION['shoppingCart']['productName']); $i++)
//    {
//       $total += $_SESSION['shoppingCart']['productQuantity'][$i] * $_SESSION['shoppingCart']['productPrice'][$i];
//    }
//    return $total;
// }
//
// function refresh(){
//     for ($i = 0 ; $i < count($prodQuant) ; $i++)
//     {
//       modifTheProductQuantity($_SESSION['shoppingCart']['productName'][$i],round($prodQuant[$i]));
//     }
// }
//
//
// function removeShoppingCart(){
//    unset($_SESSION['shoppingCart']);
// }
 ?>
