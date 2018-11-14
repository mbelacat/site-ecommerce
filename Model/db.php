<?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=bdecommerce;charset=utf8', 'mbela', 'rootroot');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
 ?>
