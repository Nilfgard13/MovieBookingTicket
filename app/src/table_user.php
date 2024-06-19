<?php
require_once 'auth.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];

    if ($action === 'register') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (register_user($username, $email, $password)) {
            header('Location: ../../public/views/admin/user_admin.php');
            exit();
        } else {
            header('Location: ../../public/views/admin/user_admin.php?error=register');
            exit();
        }
    } elseif ($action === 'delete') {
        $user_ids = $_POST['user_ids'] ?? [];
        if (delete_users($user_ids)) {
            header('Location: ../../public/views/admin/user_admin.php');
            exit();
        } else {
            header('Location: ../../public/views/admin/user_admin.php?error=delete');
            exit();
        }
    } elseif ($action === 'edit') {
        $data = [
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'is_admin' => $_POST['is_admin'],
            'user_id' => $_POST['user_id']
        ];
        if (editUser($data)) {
            header('Location: ../../public/views/admin/user_admin.php?success=edit');
            exit();
        } else {
            header('Location: ../../public/views/admin/user_admin.php?error=edit');
            exit();
        }
    }
}