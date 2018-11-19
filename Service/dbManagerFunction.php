<?php

function connectToDataBAse($db){
  try
  {
	   $db = new PDO('mysql:host=localhost;dbname=bdecommerce;charset=utf8', 'mbela', 'rootroot');
  }
  catch (Exception $e)
  {
    die('Erreur : ' . $e->getMessage());
  }

}

function allItems($db){
  connectToDataBAse($db);
  $select = $db->query('SELECT * FROM product');
  $products = $select->fetchAll(PDO::FETCH_ASSOC);
  var_dump($products);
  foreach ($products as $product) {
  echo $product["name"];
  }
}
?>
