
<aside class="col-lg-3 bg-lgt-green pl-5 pt-5 ">
  <div class="row aside-info d-none d-sm-block">
    <h3 class="col-12">Mes Infos</h3>
    <div class="user col-md-6 col-lg-12">
      Mon speudo:
      <?php echo $_SESSION["user"]["name"] ?>
    </div>
    <div class="sexe col-md-6 col-lg-12">
        Sexe:
      <?php  if ($_SESSION["user"]["sexe"] === "homme"){
          echo '    <i class="fas fa-male"></i>';
        }else{
          echo '    <i class="fas fa-female"></i>';
        }
      ?>
    </div>
    <div class="status  col-md-6 col-lg-12">
      Status: <?php echo $_SESSION["user"]["status"] ?>
    </div>
    <div class="password  col-md-6 col-lg-12">
        My password: <?php echo $_SESSION["user"]["password"]  ?>
    </div>

  </div>
  <div class="row">
    <h3 class="col-12">Mon panier <a href="shoppingCart.php">(
      <?php

    // poor style very dirty!!!!!!!!!!!
    if(isset($_SESSION['shoppingCart']) && !empty($_SESSION['shoppingCart'])){
      foreach ($_SESSION['shoppingCart'] as $key => $value) {

      }
      echo numberOfItems($key) ;
    }else{
      echo "0";
    }


      ?>
       )</a> </h3>
    <ul class="list-group">
    <?php
    // foreach on the shopping cart stocked on session
    foreach ($_SESSION['shoppingCart'] as $key => $value) {
      echo "<li class='list-group-item bg-lgt-green'>  - " .$value["name"] ."  ".$value["productQuantity"]."</li>";
    }
    ?>
  </ul>
  </div>
</aside>
