<?php include "Template/header.php" ?>

<div class="container border border-6 bg-lgt-green border-white m-5 p-5 h-50">
<form class=" mb-5 mt-5 bg-lgt-green w-100 text-white" action="addProduct.php" method="post">
  <h2 class="text-center">Modifier le produit</h2>
  <div class="form-row flex-column d-flex flex-column">
    <div class="col-12 mb-3">
      <input type="text" class="form-control bg-lgt-green border-white rounded-0"  name="article" placeholder="Article" value="<?php if (isset($_SESSION["form"]['name'])){echo $_SESSION["form"]['name'];} ?>">
      <label for="article">Article</label>
    </div>

    <div class="col-12 mb-3">
      <input type="text" class="form-control bg-lgt-green border-white rounded-0"  name="category" placeholder="Category" value="<?php if (isset($_SESSION["form"]['name'])){echo $_SESSION["form"]['name'];} ?>">
      <label for="category">Category</label>
    </div>
    <div class="col-12 mb-3">
      <input type="text" class="form-control bg-lgt-green border-white rounded-0"  name="made_in" placeholder="Made_in" value="<?php if (isset($_SESSION["form"]['name'])){echo $_SESSION["form"]['name'];} ?>">
      <label for="made_in">Made_in</label>
    </div>
    <div class="col-12 mb-3">
      <input type="text" class="form-control bg-lgt-green border-white rounded-0"  name="price" placeholder="Price" value="<?php if (isset($_SESSION["form"]['name'])){echo $_SESSION["form"]['name'];} ?>">
      <label for="price">Price</label>
    </div>
    <div class="col-12 mb-3">
      <select class="custom-select rounded-0 bg-lgt-green border-white" name="disponibilite" placeholder="disponibilite" value="">
        <option selected>Disponibilité</option>
        <option value="enStock">En stock</option>
        <option value="epuisé">Epuisé</option>
      </select>
      <label for="disponibilite">Disponibilité</label>
    </div>
    <div class="col-12 mb-3">
      <input type="text" class="form-control bg-lgt-green border-white rounded-0"  name="description" placeholder="Description" value="<?php if (isset($_SESSION["form"]['name'])){echo $_SESSION["form"]['name'];} ?>">
      <label for="description">Description</label>
    </div>
    <button class="btn bg-dark btn-lg  mb-3 p-1  align-self-baseline rounded-0 d-none d-lg-block col-lg-2 w-75" type="submit">Ajouter</button>
  </div>
</form>
</div>


<?php include "Template/footer.php" ?>
