<aside class="col-lg-3 bg-info ">
  <div class="row">
    <h3>Mes Infos</h3>
    <div class="user col-12">
      <?php
        echo $_SESSION["user"]["name"];
        if ($_SESSION["user"]["sexe"] === "homme"){
          echo '<i class="fas fa-male"></i>';
        }else{
          echo '<i class="fas fa-female"></i>';
        }
    echo
    '</div>
    <div class="status col-12">
        Status: ' . $_SESSION["user"]["status"] .
    '</div>
    <div class="password">
        My password: ' . $_SESSION["user"]["password"];
        ?>
    </div>
  </div>
</aside>
