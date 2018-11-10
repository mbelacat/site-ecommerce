
<?php
session_start();
require "Service/functionsShoppingCart.php";
require "Model/function.php";
require "Service/loginManager.php";
?>

<?php
if($_GET['action'] === "add") {
    addToShoppingCartForeach($products);
    header("Location: products.php?message=Votre article a bien été ajouté.");
    exit;
}elseif ($_GET['action'] === "remove") {
    removeToShoppingCart($_GET['key']);
    header("Location: shoppingCart.php?message=Votre article a été supprimé.");
    exit;
}elseif($_GET['action'] === "empty"){
    emptyShoppingCart();
    header("Location: shoppingCart.php");
    exit;
}elseif($_GET['action'] === "decrease"){
    decreaseProduct($_GET['key']);
    header("Location: shoppingCart.php?message=Votre article a été supprimé.");
    exit;
}elseif($_GET['action'] === "increase"){
    increaseProduct($_GET['key']);
    header("Location: shoppingCart.php?message=Votre article a bien été ajouté.");
    exit;
}
 ?>
