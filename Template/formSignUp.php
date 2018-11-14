<?php
session_start();
require "Service/errorManager.php";
require "Service/repopulateFormFunction.php";
?>

<div class="alert alert-danger" role="alert">
  <?php
  if(isset($_GET["errors"])){
    $code = htmlspecialchars($_GET["errors"]);
    for ($i=0; $i < strlen($code) ; $i++) {
      echo "<div>Erreur n°".$i .":" . $errors[$code[$i]]. "</div>";
    }
  }
  ?>
</div>

<form class=" mb-5 mt-5 bg-lgt-green h-75 text-white" action="signUp.php" method="post">
  <div class="form-row flex-column d-flex flex-column">
    <div class="col-12 mb-3">
      <input type="text" class="form-control bg-lgt-green border-white rounded-0"  name="name" placeholder="Nom" value="<?php if (isset($_SESSION["form"]['name'])){echo $_SESSION["form"]['name'];} ?>">
      <label for="name">Name</label>
    </div>
    <div class="col-12 mb-3">
      <select class="custom-select rounded-0 bg-lgt-green border-white" name="sexe">
        <option selected>Sexe</option>
        <option value="Homme">Homme</option>
        <option value="Femme">Femme</option>
      </select>
      <label for="name">Name</label>
    </div>
    <div class="col-12 mb-3">
      <input type="text" class="form-control rounded-0 bg-lgt-green border-white" name="password" placeholder="********" value="<?php if (isset($_SESSION["form"]['password']) && !empty($_SESSION["form"]['password'])){echo $_SESSION["form"]['password'];} ?>">
      <label for="password">Password</label>
    </div>
    <div class="mb-3">
      <input type="text" class="form-control rounded-0 bg-lgt-green border-white" name="confirmedPassword" placeholder="********" value="<?php if (isset($_SESSION["form"]['confirmedPassword'])){echo $_SESSION["form"]['confirmedPassword'];} ?>">
      <label for="confirmedPassword">Confirmed Password</label>
    </div>
    <button class="btn bg-dark btn-lg  mb-3 p-1  align-self-baseline rounded-0 d-none d-lg-block col-lg-2 w-75" type="submit">M'inscrire</button>
  </div>
  <button class="btn bg-dark rounded-0 d-lg-none  col-md-6 col-xs-12" type="submit">M'inscrire</button>
</form>
