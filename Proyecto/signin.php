<?php include('functions.php');
$sex = getSex();
$rol = getRol();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Matricula</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<form class="needs-validation" method="post" action="insert.php" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">First name</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="first_name" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Last name</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" name="last_name" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
        </div>
        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" name="username" required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="inputPassword6">Password</label>
      <div class="input-group">
        <input type="password" class="form-control mx-sm-3" id="validationCustomPasswordS" placeholder="Password" aria-describedby="passwordHelpInline" name="password"required>
        <div class="invalid-feedback">
          Please create a password.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Country</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="Country"  name="country" required>
      <div class="invalid-feedback">
        Please provide a valid country.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">City</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="City" name="city" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="sex">
    <?php
          foreach($sex as $id => $sex) {
            echo "<option value=\"$id\">$sex</option>";
          }
    ?>
  </select><select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref2" name="rol">
    <label for="validationCustom06">Rol</label>
    <?php
          foreach($rol as $id => $rol) {
            echo "<option value=\"$id\">$rol</option>";
          }
    ?>
  </select>
  </div>
  
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>
<br>
<br>
<a href="index.php">
  <button class="btn btn-primary">Return to home page</button>
 </a>
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
    <br>   
  </div>
</body>
</html>