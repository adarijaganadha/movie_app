<?php
include 'db/config.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $username = $_POST['username'];

    // Insert new user into the database
    $sql = "INSERT INTO users (email, username) VALUES ('$email', '$username')";
    if ($conn->query($sql) === TRUE) {
        echo "Signup successful! You can now <a href='login.php'>Login</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Signup</h2>
    <form method="POST" action="signup.php">
        <label for="email">Email:</label><br>
        <input type="email" name="email" required><br><br>
        <label for="username">Username:</label><br>
        <input type="text" name="username" required><br><br>
        <button type="submit">Signup</button>
    </form>
</body>
</html>
