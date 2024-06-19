<?php
require_once 'libs/connection.php';
/**
 * Register a user
 *
 * @param string $email
 * @param string $username
 * @param string $password
 * @param bool $is_admin
 * @return bool
 */
function register_user(string $username, string $email, string $password): bool
{
    $sql = 'INSERT INTO users(username, email, password) VALUES (:username, :email, :password)';

    $statement = db()->prepare($sql);

    $statement->bindValue(':username', $username, PDO::PARAM_STR);
    $statement->bindValue(':email', $email, PDO::PARAM_STR);
    $statement->bindValue(':password', password_hash($password, PASSWORD_BCRYPT), PDO::PARAM_STR);

    return $statement->execute();
}


function find_user_by_username(string $username)
{
    $sql = 'SELECT user_id, username, password
            FROM users
            WHERE username=:username';

    $statement = db()->prepare($sql);
    $statement->bindValue(':username', $username, PDO::PARAM_STR);
    $statement->execute();

    return $statement->fetch(PDO::FETCH_ASSOC);
}

function find_role_by_username(string $username)
{
    $sql = 'SELECT user_id, username, is_admin
            FROM users
            WHERE username=:username';

    $statement = db()->prepare($sql);
    $statement->bindValue(':username', $username, PDO::PARAM_STR);
    $statement->execute();
    return $statement->fetch(PDO::FETCH_ASSOC);

}

function find_All_by_username(string $username)
{
    $sql = 'SELECT *
            FROM users
            WHERE username=:username';

    $statement = db()->prepare($sql);
    $statement->bindValue(':username', $username, PDO::PARAM_STR);
    $statement->execute();
    return $statement->fetch(PDO::FETCH_ASSOC);

}

function login(string $username, string $password): bool
{
    $user = find_user_by_username($username);

    // if user found, check the password
    if ($user && password_verify($password, $user['password'])) {

        // prevent session fixation attack
        session_regenerate_id();

        // set username and user_id in the session
        $_SESSION['username'] = $user['username'];
        $_SESSION['user_id'] = $user['user_id'];

        return true;
    }

    return false;
}

function is_user_logged_in(): bool
{
    return isset($_SESSION['username']);
}

function require_login(): void
{
    if (!is_user_logged_in()) {
        redirect_to('login.php');
    }
}

function logout(): void
{
    if (is_user_logged_in()) {
        unset($_SESSION['username'], $_SESSION['user_id']);
        session_destroy();
        redirect_to('login.php');
    }
}

function current_user()
{
    if (is_user_logged_in()) {
        return $_SESSION['username'];
    }
    return null;
}

function getUsers()
{
    $sql = "SELECT * FROM users";
    $statement = db()->query($sql);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function addUser($data)
{
    $pdo = db();
    $stmt = $pdo->prepare('INSERT INTO users (username, email, role, password) VALUES (:username, :email, :role, :password)');
    $stmt->execute([
        ':username' => $data['username'],
        ':email' => $data['email'],
        ':password' => password_hash($data['password'], PASSWORD_BCRYPT)
    ]);
}

function editUser($data)
{
    $pdo = db();
    $stmt = $pdo->prepare('UPDATE users SET username = :username, email = :email, is_admin = :is_admin WHERE user_id = :user_id');
    $stmt->execute([
        ':username' => $data['username'],
        ':email' => $data['email'],
        ':is_admin' => $data['is_admin'],
        ':user_id' => $data['user_id']
    ]);
}

function delete_users(array $user_ids): bool
{
    if (empty($user_ids)) {
        return false;
    }

    // Create a string of placeholders for the IN clause
    $placeholders = implode(',', array_fill(0, count($user_ids), '?'));

    // SQL query with IN clause
    $sql = "DELETE FROM users WHERE id_user IN ($placeholders)";

    $statement = db()->prepare($sql);

    // Bind values
    foreach ($user_ids as $index => $id) {
        $statement->bindValue($index + 1, $id, PDO::PARAM_INT); // PDO placeholders are 1-indexed
    }

    try {
        return $statement->execute();
    } catch (PDOException $e) {
        error_log($e->getMessage());
        return false;
    }
}
