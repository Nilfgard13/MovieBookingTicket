<?php

require __DIR__ . '/../../app/src/bootstrap.php';
require __DIR__ . '/../../app/src/register.php';
?>

<?php view('header', ['title' => 'Register']) ?>

<!-- Body Wrapper -->
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
                            <h3 id="title-form">Sign Up - Get Film</h3>
                            <a href="#" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                <img src="../../app/assets/images/getfilm-logo.png" width="80" alt="logo-getfilm">
                            </a>
                            <p class="text-center">Discover, Stream, Enjoy: Get Films!</p>
                            <form action="register.php" method="POST">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Name</label>
                                    <input type="text" name="username" id="username"
                                        value="<?= htmlspecialchars($inputs['username'] ?? '') ?>" class="form-control"
                                        aria-describedby="textHelp" placeholder="wafiyanwarul123" required>
                                    <small><?= $errors['username'] ?? '' ?></small>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" name="email" id="email"
                                        value="<?= htmlspecialchars($inputs['email'] ?? '') ?>" class="form-control"
                                        aria-describedby="emailHelp" placeholder="www123@gmail.com" required>
                                    <small><?= $errors['email'] ?? '' ?></small>
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" id="password"
                                        value="<?= htmlspecialchars($inputs['password'] ?? '') ?>" class="form-control"
                                        placeholder="Must be 8 characters" required>
                                    <small><?= $errors['password'] ?? '' ?></small>
                                </div>
                                <div class="mb-4">
                                    <label for="password2" class="form-label">Password Again:</label>
                                    <input type="password" name="password2" id="password2"
                                        value="<?= htmlspecialchars($inputs['password2'] ?? '') ?>" class="form-control"
                                        placeholder="Must be 8 characters" required>
                                    <small><?= $errors['password2'] ?? '' ?></small>
                                </div>
                                <div>
                                    <label for="agree">
                                        <input type="checkbox" name="agree" id="agree" value="1"
                                            <?= isset($inputs['agree']) && $inputs['agree'] ? 'checked' : '' ?> /> I
                                        agree with the <a href="#" title="term of services">terms of services</a>
                                    </label>
                                    <small><?= $errors['agree'] ?? '' ?></small>
                                </div><br>
                                <button class="btn btn-primary w-100 fs-4 mb-4 rounded-2" type="submit">Sign Up</button>
                                <div class="d-flex align-items-center justify-content-center">
                                    <footer class="fs-4 mb-0 fw-bold">Already have an Account?<a
                                            class="text-primary fw-bold ms-2" href="login.php">Sign In</a></footer>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../../app/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../../app/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<?php view('footer') ?>