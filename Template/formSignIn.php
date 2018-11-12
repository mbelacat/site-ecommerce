<?php
  if(isset($_GET["message"])){
    $message = htmlspecialchars($_GET["message"]);
    echo "<p>Attention:" . $message . "</p>";
  }
  ?>
<form class=" mb-5 mt-5" action="login.php" method="post">
  <div class="form-row text-white d-flex flex-column">
    <div class="mb-3">
      <input type="text" class="form-control  rounded-0 bg-lgt-green border-white"  name="name" placeholder="Nom" >
      <label for="name">Name</label>
    </div>
    <div class=" mb-3">
      <input type="text" class="form-control rounded-0 bg-lgt-green border-white" name="password" placeholder="********">
      <label for="password">Password</label>
    </div>
    <button class="btn bg-dark btn-lg  mb-3 p-1  align-self-baseline rounded-0 d-none d-lg-block col-lg-2 w-75" type="submit">Me connecter</button>
  </div>
  <button class="btn bg-dark rounded-0 d-lg-none  col-md-6 col-xs-12" type="submit">Me connnecter</button>
</form>
