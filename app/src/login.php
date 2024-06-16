<?php

if (is_user_logged_in()) {
    //redirect_to('index.php');
}

$inputs = [];
$errors = [];

if (is_post_request()) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($username) || empty($password)) {
        $errors['login'] = 'Username and password are required';
    }

    if (!$errors) {
        // if login fails
        if (!login($username, $password)) {
            $errors['login'] = 'Invalid username or password';
            $inputs = [
                'username' => $username,
                'password' => $password
            ];
        } else {
            
            $user = find_role_by_username($username);
            $getuser = find_all_by_username($username);
            // $_SESSION['id_user'] = $getuser['id_user'];
            // $getktp = getKtpByIdUser($_SESSION['id_user']);
            // login successfully
             
            if ($user['is_admin'] == 1) {
                $_SESSION['username'] = $getuser['username'];
                redirect_to('admin/dashboard_admin.php');
            } elseif ($user['is_admin'] == 0) {
                $_SESSION['username'] = $getuser['username'];
                redirect_to('user/dashboard_user.php');
            } else{
                redirect_to('index.php');
            }
        }
    }

    if ($errors) {
        $inputs = [
            'username' => $username,
            'password' => $password
        ];
        redirect_with('login.php', [
            'errors' => $errors,
            'inputs' => $inputs
        ]);
    }

} else if (is_get_request()) {
    [$errors, $inputs] = session_flash('errors', 'inputs');
}