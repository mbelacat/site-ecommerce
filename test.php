<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=bdecommerce;charset=utf8', 'mbela', 'rootroot');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
// $bdd = new PDO('mysql:host=localhost;bdname=bdecommerce;charset=utf8', 'mbela', 'rootroot', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
$select = $bdd->query('SELECT * FROM product');
$products = $select->fetchAll(PDO::FETCH_ASSOC);
foreach ($products as $product) {
  echo $product["name"];
} ?>
