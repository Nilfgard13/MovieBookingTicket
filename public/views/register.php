<?php

require __DIR__ . '/../../app/src/bootstrap.php';
require __DIR__ . '/../../app/src/register.php';
?>

<?php view('header', ['title' => 'Get Ticket | Register']) ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Spica Admin</title>
    <!-- base:css -->
    <link rel="stylesheet" href="../../../app/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../../app/assets/vendors/css/vendor.bundle.base.css">
    <!-- inject:css -->
    <link rel="stylesheet" href="../../../app/assets/css/style.css">
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
                            <h4>New part of Get Film?</h4>
                            <h6 class="font-weight-light">Join us! Discover, Stream, Enjoy: Get Films!</h6>
                            <form action="register.php" method="POST" class="pt-3">
                                <div class="form-group">
                                    <label for="username" class="form-label">Username</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="mdi mdi-account-outline text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="text" name="username" id="username" value="<?= htmlspecialchars($inputs['username'] ?? '') ?>" class="form-control form-control-lg border-left-0" placeholder="Create username (no-space)" required>
                                        <small><?= $errors['username'] ?? '' ?></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="mdi mdi-email-outline text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="email" name="email" id="email" value="<?= htmlspecialchars($inputs['email'] ?? '') ?>" class="form-control form-control-lg border-left-0" placeholder="Input Email" required>
                                        <small><?= $errors['email'] ?? '' ?></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="mdi mdi-lock-outline text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="password" name="password" id="password" value="<?= htmlspecialchars($inputs['password'] ?? '') ?>" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Create Password" required>
                                        <small><?= $errors['password'] ?? '' ?></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password2" class="form-label">Confirm Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="mdi mdi-lock-outline text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="password" name="password2" id="password2" value="<?= htmlspecialchars($inputs['password2'] ?? '') ?>" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Must be 8 characters" required>
                                        <small><?= $errors['password2'] ?? '' ?></small>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="form-check">
                                        <label for="agree">
                                            <input type="checkbox" name="agree" id="agree" value="1" <?= isset($inputs['agree']) && $inputs['agree'] ? 'checked' : '' ?> required> I
                                            agree with the <a href="#" title="term of services">terms of services</a>
                                        </label>
                                        <small><?= $errors['agree'] ?? '' ?></small>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN UP</button>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Already have an account? <a href="./login.php" class="text-primary">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 register-half-bg d-none d-lg-flex flex-row">
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