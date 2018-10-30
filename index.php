<!-- Voici la page qui va afficher le formulaire dans le template -->
<?php include("template/header.php"); ?>

<main >
  <div class="container border mb-5">
    <form class="needs-validation mb-5 mt-5" novalidate>
      <div class="form-row">
        <div class="col-md-6 col-lg-5 mb-3">
          <input type="text" class="form-control  rounded-0" id="validationCustom01" placeholder="First name" value="Mbela" required>
          <label for="validationCustom01">First name</label>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-6 col-lg-5 mb-3">
          <span class="border-bottom"> <input type="text" class="form-control rounded-0 " id="validationCustom02" placeholder="Last name" value="Mbemba" required></span>
          <label for="validationCustom02">Last name</label>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-6 col-lg-5 mb-3">
          <input type="text" class="form-control rounded-0" id="validationCustom03" placeholder="********" required>
          <label for="validationPassword">Password</label>
          <div class="invalid-feedback">
            Please enter a password.
          </div>
        </div>
        <div class="col-md-6 col-lg-5 mb-3">
          <input type="text" class="form-control rounded-0" id="validationCustom04" placeholder="********" required>
          <label for="validationPasswordRepeat">Password</label>
          <div class="invalid-feedback">
            Please enter the same password.
          </div>
        </div>
          <button class="btn btn-primary btn-lg  mb-3 pt-0 pl-1 pr-1 align-self-baseline rounded-0 d-none d-lg-block col-lg-2" type="submit">Sign Up</button>

      </div>
      <button class="btn btn-primary rounded-0 d-lg-none " type="submit">Sign Up</button>
    </form>
  </div>
</main>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

<?php include("template/footer.php"); ?>
