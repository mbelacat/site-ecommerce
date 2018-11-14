<?php
function connectToDataBAse($dbname){
  try
  {
	   $db = new PDO('mysql:host=localhost;dbname='.$dbname.';charset=utf8', 'mbela', 'rootroot');
  }
  catch (Exception $e)
  {
    die('Erreur : ' . $e->getMessage());
  }

}

function allItems($dbname){
  connectToDataBAse($dbname);
  $select = $db->query('SELECT * FROM product');
  $products = $select->fetchAll(PDO::FETCH_ASSOC);
  var_dump($products);
  foreach ($products as $product) {
  echo $product["name"];
  }
}
var_dump(allItems("dbecommerce")); ?>
