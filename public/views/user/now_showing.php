<?php
require __DIR__ . '../../../../app/src/bootstrap.php'; ?>

<?php view('/header', ['title' => 'Get Ticket | Dashboard']) ?>

<?php if (isset($errors['login'])) : ?>
    <div class="alert alert-error">
        <?= $errors['login'] ?>
    </div>
<?php endif ?>

<?php
// Cek apakah pengguna sudah login
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $sql_user = "SELECT username, email, is_admin FROM users WHERE username = :username";
    try {
        // Get database connection
        $pdo = db();

        // Siapkan dan jalankan query
        $stmt = $pdo->prepare($sql_user);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();

        // Ambil data pengguna
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Cek apakah pengguna ditemukan
        if (!$user) {
            echo "User not found.";
            exit;
        }
    } catch (PDOException $e) {
        // Handle potential errors here
        die("Error accessing database: " . $e->getMessage());
    }
} else {
    echo "User is not logged in.";
    exit;
}
?>

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

    <!-- CSS -->
    <link rel="stylesheet" href="../../../app/assets/css/style.css">

    <script src="../../../app/assets/js/realtime_date.js"></script>
</head>

<body>
    <div class="container-scroller d-flex">

        <!-- partial:./partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item sidebar-category">
                    <p>User Dashboard</p>
                    <span></span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./dashboard_user.php">
                        <i class="mdi mdi-view-quilt menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item sidebar-category">
                    <p>Looking for</p>
                    <span></span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./cinemas.php">
                        <i class="mdi mdi-theater menu-icon"></i>
                        <span class="menu-title">Cinemas</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./films.php">
                        <i class="mdi mdi-film menu-icon"></i>
                        <span class="menu-title">Films</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./now_showing.php">
                        <i class="mdi mdi-play-circle menu-icon"></i>
                        <span class="menu-title">Now Showing</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./book_ticket.php">
                        <i class="mdi mdi-file-send menu-icon"></i>
                        <span class="menu-title">Book Ticket</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./myticket.php">
                        <i class="mdi mdi-ticket-confirmation menu-icon"></i>
                        <span class="menu-title">My Ticket</span>
                    </a>
                </li>

            </ul>
        </nav>

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:./partials/_navbar.html -->
            <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <div class="navbar-brand-wrapper">
                        <a class="navbar-brand brand-logo" href="index.html"><img src="../../../app/assets/images/films/getfilm-logo.png" alt="logo" width="50px" /></a>
                    </div>
                    <h2 class="font-weight-bold mb-0 d-none d-md-block mt-1">Welcome to Get Films, <?php echo htmlspecialchars($user['username']); ?></h2>

                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item">
                            <h2 class="mb-0 font-weight-bold d-none d-xl-block">
                                <?php
                                // Panggil file dengan fungsi tanggal
                                require_once('../../../public/templates/date_functions.php');

                                // Panggil fungsi getRealTimeDate untuk menampilkan tanggal
                                echo getRealTimeDate();
                                ?>
                            </h2>
                        </li>
                        <!-- Notification (SOON) -->
                        <li class="nav-item dropdown me-2">
                            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                                <i class="mdi mdi-email-open mx-0"></i>
                                <span class="count bg-danger">1</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                                <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-success">
                                            <i class="mdi mdi-information mx-0"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                        <p class="font-weight-light small-text mb-0 text-muted">
                                            Just now
                                        </p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-warning">
                                            <i class="mdi mdi-settings mx-0"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject font-weight-normal">Settings</h6>
                                        <p class="font-weight-light small-text mb-0 text-muted">
                                            Private message
                                        </p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-info">
                                            <i class="mdi mdi-account-box mx-0"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject font-weight-normal">New user registration</h6>
                                        <p class="font-weight-light small-text mb-0 text-muted">
                                            2 days ago
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="mdi mdi-menu"></span>
                    </button>
                </div>
                <div class="navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex align-items-center">
                    <ul class="navbar-nav mr-lg-2">
                        <li class="nav-item nav-search d-none d-lg-block">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Here..." aria-label="search" aria-describedby="search">
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                                <img src="../../../app/assets/images/faces/face5.jpg" alt="profile" />
                                <span class="nav-profile-name"><?php echo htmlspecialchars($user['username']); ?></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                                <a class="dropdown-item">
                                    <i class="mdi mdi-settings text-primary"></i>
                                    Settings
                                </a>
                                <a href="../logout.php" class="dropdown-item">
                                    <i class="mdi mdi-logout text-primary"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>
                </div>
            </nav>

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title text-center">Get Films | Now Showing</h4><br>
                                    <div class="row">
                                        <?php if ($user['is_admin'] == 0) { ?>
                                            <h2>User now-display ui here</h2>
                                        <?php } elseif ($user['is_admin'] == 1) { ?>
                                            <h2>Admin now-display ui here</h2>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- content-wrapper ends -->

                <!-- partial:./partials/_footer.html -->
                <footer class="footer">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex justify-content-center justify-content-sm-between py-2">
                                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2021</span>
                                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a href="https://www.bootstrapdash.com/" target="_blank"> Bootstrap dashboard </a> templates</span>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- base:js -->
    <script src="../../../app/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="../../../app/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../../../app/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../../../app/assets/js/off-canvas.js"></script>
    <script src="../../../app/assets/js/hoverable-collapse.js"></script>
    <script src="../../../app/assets/js/template.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="../../../app/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="../../../app/assets/js/dashboard.js"></script>
    <!-- End custom js for this page-->
</body>

</html>