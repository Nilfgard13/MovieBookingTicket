<?php
require __DIR__ . '/../../app/src/bootstrap.php';
require __DIR__ . '/../../app/src/login.php';
?>

<?php view('/header', ['title' => 'Get Ticket | Login']) ?>

<?php if (isset($errors['login'])) : ?>
  <div class="alert alert-error">
    <?= $errors['login'] ?>
  </div>
<?php endif ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Spica Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../../app/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../app/assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../app/assets/css/style.css">
</head>

<body>
  <div class="container-scroller d-flex">
    <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="../../app/assets/images/films/getfilm-logo.png" alt="logo">
              </div>
              <h4>Welcome back!</h4>
              <h6 class="font-weight-light">Happy to see you again!</h6>
              <form action="./login.php" method="POST" class="pt-3">
                <!-- Field Username -->
                <div class="form-group">
                  <label for="InputUsername">Username</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" name="username" id="username" value="<?= $inputs['username'] ?? '' ?>" class="form-control form-control-lg border-left-0" placeholder="Username">
                    <small><?= $errors['username'] ?? '' ?></small>
                  </div>
                </div>

                <!-- Field Password -->
                <div class="form-group">
                  <label for="InputPassword">Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" name="password" id="password" class="form-control form-control-lg border-left-0" placeholder="Password">
                    <small><?= $errors['password'] ?? '' ?></small>
                  </div>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="my-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">LOGIN</button>
                </div>
                <!-- Social Buttons -->
                <div class="mb-2 d-flex">
                  <button type="button" class="btn btn-facebook auth-form-btn flex-grow me-1" disabled>
                    <i class="mdi mdi-facebook me-2"></i>Facebook
                  </button>
                  <button type="button" class="btn btn-google auth-form-btn flex-grow ml-1" disabled>
                    <i class="mdi mdi-google me-2"></i>Google
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="./register.php" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-none d-lg-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2021 All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="../../app/assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <script src="../../app/assets/js/jquery.cookie.js" type="text/javascript"></script>
  <!-- inject:js -->
  <script src="../../app/assets/js/off-canvas.js"></script>
  <script src="../../app/assets/js/hoverable-collapse.js"></script>
  <script src="../../app/assets/js/template.js"></script>
  <!-- endinject -->
  <?php view('footer') ?>
</body>

</html>