<?php
function getProduct(){
	$db = connectToDataBAse();
  $select = $db->query('SELECT * FROM product');
  $product = $select->fetchAll(PDO::FETCH_ASSOC);
  return $product;
}
 ?>
