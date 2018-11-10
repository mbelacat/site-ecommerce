<!-- Voici la page qui va afficher le formulaire dans le template -->
<?php include("Template/header.php"); ?>

  <div class="container border border-6  border-white m-5 p-5 h-50">
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">

        <?php
        if(isset($_GET['errors'])){
         ?>
         <a class="nav-item nav-link " id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Se connecter</a>
         <a class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">S'inscrire</a>
        <?php }else{  ?>
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Se connecter</a>
          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">S'inscrire</a>
        <?php } ?>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <?php
      if(isset($_GET['errors'])){
       ?>
       <div class="tab-pane fade " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><?php include("Template/formSignIn.php") ?></div>
       <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"><?php include("Template/formSignUp.php") ?></div>
      <?php }else{  ?>
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><?php include("Template/formSignIn.php") ?></div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"><?php include("Template/formSignUp.php") ?></div>'
      <?php } ?>
    </div>
  </div>
<?php include("template/footer.php"); ?>
