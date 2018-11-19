<?php

function getProduct($id){
  $db = connectToDataBAse();
  $select = $db->prepare("SELECT * FROM product WHERE id= ?");
  $select->execute([$id]);
  $product = $select->fetch(PDO::FETCH_ASSOC);
	$select->closeCursor();
	return $product;
}

function getProducts(){
  $db = connectToDataBAse();
  $select = $db->query('SELECT * FROM product');
  $products = $select->fetchAll(PDO::FETCH_ASSOC);
  return $products;
	$select->closeCursor();
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
  $query->closeCursor();
	return $result;
}

function updateProduct($product, $id){
	$db = connectToDataBAse();
	$query = $db->prepare("UPDATE product SET name = :new_name, price = :new_price, description = :new_description, made_in = :new_made_in, category = :new_category, stock = :new_stock WHERE id='".$id['id']."' ");
	$result = $query->execute(array(
		"new_name" => $product["name"],
		"new_price" => $product["price"],
		"new_description" => $product["description"],
		"new_made_in" => $product["made_in"],
		"new_category" => $product["category"],
		"new_stock" => $product["stock"]));
		return $result;
		$query->closeCursor();
}

function deleteProduct($id){
	$db = connectToDataBAse();
	$select = $db->prepare('DELETE FROM product WHERE id= ?');
	$select->execute([$id]);
	$select->closeCursor();
}

 ?>
