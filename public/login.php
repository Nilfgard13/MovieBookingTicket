<?php

require __DIR__ . '/../src/bootstrap.php';
require __DIR__ . '/../src/login.php';
?>

<?php view('header', ['title' => 'Login']) ?>

<?php if (isset($errors['login'])): ?>
    <div class="alert alert-error">
        <?= $errors['login'] ?>
    </div>
<?php endif ?>

<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
        class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100">
                <div class="col-md-8 col-lg-6 col-xxl-3">
                    <!-- Card Form -->
                    <div class="card mb-0">
                        <div class="card-body">
                            <h3 id="title-form">Sign In - Get Film</h3>
                            <a href="#" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                <img src="../src/assets/images/getfilm-logo.png" width="80" alt="logo-getfilm">
                            </a>
                            <p class="text-center">Discover, Stream, Enjoy: Get Films!</p>
                            <form action="login.php" method="post">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username:</label>
                                    <input type="text" name="username" id="username"
                                        value="<?= $inputs['username'] ?? '' ?>" class="form-control" aria-describedby="emailHelp" placeholder="Enter your email here">
                                    <small><?= $errors['username'] ?? '' ?></small>
                    
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="form-label">Password:</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password here">
                                    <small><?= $errors['password'] ?? '' ?></small>
                                    
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <a class="text-primary fw-bold" href="./index.html">Forgot Password ?</a>
                                </div>
                                <section>
                                    <button type="submit" class="btn btn-primary w-100 fs-4 mb-4 rounded-2">Sign In</button>
                                </section>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="fs-4 mb-0 fw-bold">New to Get Film?</p>
                                    <a class="text-primary fw-bold ms-2" href="register.php">Create an
                                        account</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<?php view('footer') ?>