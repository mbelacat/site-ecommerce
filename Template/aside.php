<aside class="col-lg-3 bg-info ">
  <div class="row aside-info d-none d-sm-block">
    <h3 class="col-12">Mes Infos</h3>
    <div class="user col-md-6 col-lg-12">
      Mon speudo:
      <?php
        echo $_SESSION["user"]["name"] .
    '</div>
    <div class="sexe col-md-6 col-lg-12">
        Sexe: ';
        if ($_SESSION["user"]["sexe"] === "homme"){
          echo '    <i class="fas fa-male"></i>';
        }else{
          echo '    <i class="fas fa-female"></i>';
        }
    echo
    '</div>
    <div class="status  col-md-6 col-lg-12">
        Status: ' . $_SESSION["user"]["status"] .
    '</div>
    <div class="password  col-md-6 col-lg-12">
        My password: ' . $_SESSION["user"]["password"];
        ?>
      </div>
      <div class="login col-12 text-center badge badge-light">
        <a href="logout.php" class="logout-link">Déconnection</a>
      </div>
  </div>
</aside>
