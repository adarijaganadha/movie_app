<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'db/config.php';
    include 'db/movie_db.php';

    $email = $_POST['email'];
    $password = $_POST['password']; // Password validation logic can be added

    $user = get_user_by_email($email);

    if ($user) {
        $_SESSION['user_id'] = $user['user_id'];
        header('Location: index.php');
    } else {
        echo "Invalid login credentials!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="login.php">
        <label for="email">Email:</label><br>
        <input type="email" name="email" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>

