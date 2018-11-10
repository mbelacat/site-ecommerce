<?php

session_start();
require "Service/errorManager.php";
require "Service/repopulateFormFunction.php";
if(isset($_GET["errors"])){
  $code = htmlspecialchars($_GET["errors"]);
  for ($i=0; $i < strlen($code) ; $i++) {
    echo "<p>Erreur n°".$i .":" . $errors[$code[$i]]. "</p>";
  }
}
// isset($_SESSION["form"]['name'])){
//
// }
  ?>
<form class=" mb-5 mt-5" action="signUp.php" method="post">
  <div class="form-row flex-column text-white d-flex flex-column">
    <div class="col-12 mb-3">
      <input type="text" class="form-control  rounded-0 bg_pink border-white"  name="name" placeholder="Nom" value="<?php if (isset($_SESSION["form"]['name'])){echo $_SESSION["form"]['name'];} ?>">
      <label for="name">Name</label>
    </div>
    <div class="col-12 mb-3">
      <input type="text" class="form-control rounded-0 bg_pink border-white" name="password" placeholder="********" value="<?php if (isset($_SESSION["form"]['password'])){echo $_SESSION["form"]['password'];} ?>">
      <label for="password">Password</label>
    </div>
    <div class="mb-3">
      <input type="text" class="form-control rounded-0 bg_pink border-white" name="confirmedPassword" placeholder="********" value="<?php if (isset($_SESSION["form"]['confirmedPassword'])){echo $_SESSION["form"]['confirmedPassword'];} ?>">
      <label for="confirmedPassword">Confirmed Password</label>
    </div>
    <button class="btn bg-dark btn-lg  mb-3 p-1  align-self-baseline rounded-0 d-none d-lg-block col-lg-2 w-75" type="submit">M'inscrire</button>
  </div>
  <button class="btn bg-dark rounded-0 d-lg-none  col-md-6 col-xs-12" type="submit">M'inscrire</button>
</form>
