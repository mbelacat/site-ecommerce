<!-- Voici la page qui va afficher le formulaire dans le template -->
<?php include("Template/header.php"); ?>

<?php
  if(isset($_GET["message"])){
    $message = $_GET["message"];
    echo "<p>Attention:" . $message . "</p>";
  }
  ?>

<main >
  <div class="container border mb-5">
    <form class=" mb-5 mt-5" action="login.php" method="post">
      <div class="form-row">
        <div class="col-md-6 col-lg-5 mb-3">
          <input type="text" class="form-control  rounded-0"  name="name" placeholder="name" required>
          <label for="name">name</label>
          <!-- <div class="valid-feedback">
            Looks good!
          </div> -->
        </div>
        <div class="col-md-6 col-lg-5 mb-3">
          <input type="text" class="form-control rounded-0" name="password" placeholder="********" required>
          <label for="password">Password</label>
          <!-- <div class="invalid-feedback">
            Please enter a password.
          </div> -->
        </div>

          <button class="btn btn-primary btn-lg  mb-3 pt-0 pl-1 pr-1 align-self-baseline rounded-0 d-none d-lg-block col-lg-2" type="submit">Sign Up</button>
      </div>
      <button class="btn btn-primary rounded-0 d-lg-none " type="submit">Sign Up</button>
    </form>
  </div>
</main>


<?php include("template/footer.php"); ?>
