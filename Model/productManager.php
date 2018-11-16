<?php

// function getProduct($name){
//   $db = connectToDataBAse();
//   $select = $db->prepare("SELECT * FROM product WHERE name= ?");
//   $select->execute([$name]);
//   $user = $select->fetch(PDO::FETCH_ASSOC);
//   if ($user){
//     return true;
//   }
// }

function getProducts(){
  $db = connectToDataBAse();
  $select = $db->query('SELECT * FROM product');
  $products = $select->fetchAll(PDO::FETCH_ASSOC);
  return $products;
}

function addProduct($product){
  $db = connectToDataBAse();
  $query = $db->prepare('INSERT INTO product(name, price, description, made_in, category, stock) VALUES(:name, :price, :description, :made_in, :category, :stock)');
  $result = $query->execute(array(
      "name" => $product["name"],
      "price" => $product["price"],
			"description" => $product["description"],
			"made_in" => $product["made_in"],
      "category" => $product["category"],
      "stock" => $product["stock"]));
  return $result;
  $query->closeCursor();
}

function updateProduct($product){
	$db = connectToDataBAse();
	$query = $bd->prepare('UPDATE product SET name = :new_name, price = :new_price, description = :new_description, made_in = :new_made_in, category = :new_category, stock = :new_stock' );
	$result = $query->execute(array(
		"new_name" => $product["name"],
		"new_price" => $product["price"],
		"description" => $product["description"],
		"made_in" => $product["made_in"],
		"category" => $product["category"],
		"stock" => $product["stock"]));
		return $result;
		$query->closeCursor();
}

function removeProduct($product){
	$db = connectToDataBAse();

}
 ?>
