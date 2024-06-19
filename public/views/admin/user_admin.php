<?php
require __DIR__ . '../../../../app/src/bootstrap.php'; ?>

<?php view('/header', ['title' => 'Get Ticket | Dashboard']) ?>

<?php if (isset($errors['login'])): ?>
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
                    <a class="nav-link" href="dashboard_admin.php">
                        <i class="mdi mdi-view-quilt menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item sidebar-category">
                    <p>System Admin</p>
                    <span></span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="user_admin.php">
                        <i class="mdi mdi-account-multiple-plus menu-icon"></i>
                        <span class="menu-title">Users</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="film_admin.php">
                        <i class="mdi mdi-film menu-icon"></i>
                        <span class="menu-title">Film</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ticket_admin.php">
                        <i class="mdi mdi-barcode-scan menu-icon"></i>
                        <span class="menu-title">Ticket Booking</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="payment_admin.php">
                        <i class="mdi mdi-cash-usd menu-icon"></i>
                        <span class="menu-title">Payment</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="mdi mdi-database-plus menu-icon"></i>
                        <span class="menu-title">Admin</span>
                    </a>
                </li>

            </ul>
        </nav>

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:./partials/_navbar.html -->
            <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <div class="navbar-brand-wrapper">
                        <a class="navbar-brand brand-logo" href="index.html"><img
                                src="../../../app/assets/images/films/getfilm-logo.png" alt="logo" width="50px" /></a>
                    </div>
                    <h2 class="font-weight-bold mb-0 d-none d-md-block mt-1">Welcome to Get Films,
                        <?php echo htmlspecialchars($user['username']); ?>
                    </h2>

                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item">
                            <h2 class="mb-0 font-weight-bold d-none d-xl-block">
                                <?php
                                // Panggil file dengan fungsi tanggal
                                require_once ('../../../public/templates/date_functions.php');

                                // Panggil fungsi getRealTimeDate untuk menampilkan tanggal
                                echo getRealTimeDate();
                                ?>
                            </h2>
                        </li>
                        <!-- Notification (SOON) -->
                        <li class="nav-item dropdown me-2">
                            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center"
                                id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                                <i class="mdi mdi-email-open mx-0"></i>
                                <span class="count bg-danger">1</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="notificationDropdown">
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
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                        <span class="mdi mdi-menu"></span>
                    </button>
                </div>
                <div class="navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex align-items-center">
                    <ul class="navbar-nav mr-lg-2">
                        <li class="nav-item nav-search d-none d-lg-block">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Here..." aria-label="search"
                                    aria-describedby="search">
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                                <img src="../../../app/assets/images/faces/face5.jpg" alt="profile" />
                                <span class="nav-profile-name"><?php echo htmlspecialchars($user['username']); ?></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                                aria-labelledby="profileDropdown">
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
                        <?php
                        $getuser = getUsers();
                        ?>
                        <!-- Body Content -->
                        <div class="col-lg-13 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Table User</h4>
                                    
                                    <div class="table-responsive">
                                        <form method="post" action="../../../app/src/table_user.php">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th><input type="checkbox" id="select-all"></th>
                                                        <th>User ID</th>
                                                        <th>Username</th>
                                                        <th>Email</th>
                                                        <th>Is Admin</th>
                                                        <th>Created At</th>
                                                        <th>Updated At</th>
                                                        <th>Edit</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($getuser as $user): ?>
                                                        <tr>
                                                            <td><input type="checkbox" class="user-checkbox"
                                                                    name="user_ids[]"
                                                                    value="<?php echo $user['user_id']; ?>"></td>
                                                            <td><?php echo $user['user_id']; ?></td>
                                                            <td><?php echo $user['username']; ?></td>
                                                            <td><?php echo $user['email']; ?></td>
                                                            <td><?php echo $user['is_admin']; ?></td>
                                                            <td><?php echo $user['created_at']; ?></td>
                                                            <td><?php echo $user['updated_at']; ?></td>
                                                            <td>
                                                                <button type="button" class="btn btn-success"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#editModal<?php echo $user['user_id']; ?>">Edit</button>

                                                                <!-- Edit Modal -->
                                                                <div class="modal fade"
                                                                    id="editModal<?php echo $user['user_id']; ?>"
                                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">Edit User</h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form method="post"
                                                                                    action="../../../app/src/table_user.php">
                                                                                    <input type="hidden" name="id_user"
                                                                                        value="<?php echo $user['user_id']; ?>">
                                                                                    <div class="mb-3">
                                                                                        <label for="username"
                                                                                            class="form-label">Username</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            name="username"
                                                                                            value="<?php echo $user['username']; ?>"
                                                                                            required>
                                                                                    </div>
                                                                                    <div class="mb-3">
                                                                                        <label for="email"
                                                                                            class="form-label">Email</label>
                                                                                        <input type="email"
                                                                                            class="form-control"
                                                                                            name="email"
                                                                                            value="<?php echo $user['email']; ?>"
                                                                                            required>
                                                                                    </div>
                                                                                    <div class="mb-3">
                                                                                        <label for="role"
                                                                                            class="form-label">Role</label>
                                                                                        <select class="form-control"
                                                                                            name="is_admin" required>
                                                                                            <option value="0" <?php echo $user['is_admin'] == 0 ? 'selected' : ''; ?>>User
                                                                                            </option>
                                                                                            <option value="1" <?php echo $user['is_admin'] == 1 ? 'selected' : ''; ?>>Admin
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button"
                                                                                            class="btn btn-secondary"
                                                                                            data-bs-dismiss="modal">Close</button>
                                                                                        <button type="submit" name="action"
                                                                                            value="edit"
                                                                                            class="btn btn-primary">Save
                                                                                            changes</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">Tambah</button>
                                            <button type="submit" name="action" value="delete"
                                                class="btn btn-danger">Delete Selected</button>
                                        </form>

                                        <!-- Add User Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Pengguna
                                                            Baru</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" action="../../../app/src/table_user.php">
                                                            <div class="mb-3">
                                                                <label for="username"
                                                                    class="form-label">Username</label>
                                                                <input type="text" class="form-control" name="username"
                                                                    required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="email" class="form-label">Email</label>
                                                                <input type="email" class="form-control" name="email"
                                                                    required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="password"
                                                                    class="form-label">Password</label>
                                                                <input type="password" class="form-control"
                                                                    name="password" required>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" name="action" value="register"
                                                                    class="btn btn-primary">Register</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ©
                                    <a href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com
                                    </a>2021</span>
                                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best
                                    <a href="https://www.bootstrapdash.com/" target="_blank"> Bootstrap dashboard </a>
                                    templates</span>
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

    <script>
        function submitAddUserForm() {
            document.getElementById('addUserForm').submit();
        }
    </script>
    <script>
        // Event listener for select-all checkbox
        document.getElementById('select-all').addEventListener('change', function () {
            const checkboxes = document.querySelectorAll('.user-checkbox');
            for (const checkbox of checkboxes) {
                checkbox.checked = this.checked;
            }
        });

        // Optional: Ensure 'select-all' checkbox is correctly set when individual checkboxes are changed
        const checkboxes = document.querySelectorAll('.user-checkbox');
        for (const checkbox of checkboxes) {
            checkbox.addEventListener('change', function () {
                if (!this.checked) {
                    document.getElementById('select-all').checked = false;
                } else if (document.querySelectorAll('.user-checkbox:checked').length === checkboxes.length) {
                    document.getElementById('select-all').checked = true;
                }
            });
        }
    </script>
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