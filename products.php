<!-- voici la page qui n'est accessible que si l'utilisateur est connecté, qui affiche les produit et les informations sur l'utilisateur -->
<?php include("template/header.php"); ?>
<?php
session_start();
// var_dump($_SESSION);
echo "Bonjour : " . $_SESSION["user"]["name"];
?>
<?php include("template/aside.php"); ?>






<?php include("template/footer.php"); ?>
