<?php
// try
// {
// 	$bdd = new PDO('mysql:host=localhost;dbname=bdecommerce;charset=utf8', 'mbela', 'rootroot');
// }
// catch (Exception $e)
// {
//         die('Erreur : ' . $e->getMessage());
// }
// $select = $bdd->query('SELECT * FROM user');
// $users = $select->fetchAll(PDO::FETCH_ASSOC);
// foreach ($users as $user) {
//   echo $user["name"];
// }
?>

<?php
function connectToDataBAse(){
  try
  {
	   $db = new PDO('mysql:host=localhost;dbname=bdecommerce;charset=utf8', 'mbela', 'rootroot');
  }
  catch (Exception $e)
  {
    die('Erreur : ' . $e->getMessage());
  }
	return $db;
}


function getUsers(){
  $db = connectToDataBAse();
  $select = $db->query('SELECT * FROM user');
  $users = $select->fetchAll(PDO::FETCH_ASSOC);
  return $users;
}

function getProduct(){
	$db = connectToDataBAse();
  $select = $db->query('SELECT * FROM product');
  $product = $select->fetchAll(PDO::FETCH_ASSOC);
  return $product;
}
var_dump(allItems());

?>
