<!-- Voici la page qui va afficher le formulaire dans le template -->
<?php include("Template/header.php"); ?>

<?php
  if(isset($_GET["message"])){
    $message = htmlspecialchars($_GET["message"]);
    echo "<p>Attention:" . $message . "</p>";
  }
  ?>

<main class="bg_pink  pt-5 pb-5   d-flex justify-content-center align-items-center" >
  <div class="container border border-6  border-white m-0 h-50">
    <form class=" mb-5 mt-5" action="login.php" method="post">
      <div class="form-row text-white d-flex justify-content-center">
        <div class="col-md-6 col-lg-4 mb-3">
          <input type="text" class="form-control  rounded-0 bg_pink border-white"  name="name" placeholder="Polo" required>
          <label for="name">name</label>
          <!-- <div class="valid-feedback">
            Looks good!
          </div> -->
        </div>
        <div class="col-md-6 col-lg-4 mb-3">
          <input type="text" class="form-control rounded-0 bg_pink border-white" name="password" placeholder="********" required>
          <label for="password">Password</label>
          <!-- <div class="invalid-feedback">
            Please enter a password.
          </div> -->
        </div>

        <button class="btn bg-dark btn-lg  mb-3 p-1  align-self-baseline rounded-0 d-none d-lg-block col-lg-2 w-75" type="submit">Sign Up</button>
      </div>
      <button class="btn bg-dark rounded-0 d-lg-none  col-md-6 col-xs-12" type="submit">Sign Up</button>
    </form>
  </div>
</main>


<?php include("template/footer.php"); ?>
