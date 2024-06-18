<?php

if (is_user_logged_in()) {
//    redirect_to('index.php');
}

$errors = [];
$inputs = [];
$success_message = '';

if (is_post_request()) {
    // Ambil input dari form
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $password2 = $_POST['password2'] ?? '';
    $agree = isset($_POST['agree']) ? true : false;

    // Validasi input
    if (empty($username)) {
        $errors['username'] = 'Username is required';
    }

    if (empty($email)) {
        $errors['email'] = 'Email is required';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid email format';
    }

    if (empty($password)) {
        $errors['password'] = 'Password is required';
    } elseif (strlen($password) < 8) {
        $errors['password'] = 'Password must be at least 8 characters long';
    }

    if ($password !== $password2) {
        $errors['password2'] = 'Passwords do not match';
    }

    if (empty($agree)) {
        $errors['agree'] = 'You need to agree to the terms of services to register';
    }

    if (empty($errors)) {
        // Register user
        // register_user($username, $email, $password);
        if (register_user($username, $email, $password)) {
            $success_message = 'Your account has been created successfully. Please login here.';
            redirect_with_message('login.php', $success_message);
        } else {
            $errors['general'] = 'Failed to register user. Please try again.';
        }
    }

    $inputs = [
        'username' => $username,
        'email' => $email,
        'password' => $password,
        'password2' => $password2,
        'agree' => $agree
    ];

    redirect_with('register.php', [
        'inputs' => $inputs,
        'errors' => $errors
    ]);
} else if (is_get_request()) {
    [$inputs, $errors, $success_message] = session_flash('inputs', 'errors', 'success_message');
}
