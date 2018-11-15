<?php

function getProduct($name){
  $db = connectToDataBAse();
  $select = $db->prepare("SELECT * FROM product WHERE name= ?");
  $select->execute([$name]);
  $user = $select->fetch(PDO::FETCH_ASSOC);
  if ($user){
    return true;
  }
}

function getProducts(){
  $db = connectToDataBAse();
  $select = $db->query('SELECT * FROM product');
  $Products = $select->fetchAll(PDO::FETCH_ASSOC);
  return $Products;
}
 ?>
