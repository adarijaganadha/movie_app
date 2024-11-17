<?php
// Function to fetch all movies
function get_all_movies() {
    global $conn;
    $sql = "SELECT * FROM movies";
    $result = $conn->query($sql);
    $movies = $result->fetch_all(MYSQLI_ASSOC);
    return $movies;
}

// Function to get user by email
function get_user_by_email($email) {
    global $conn;
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);
    return $result->fetch_assoc();
}

// Function to fetch movies based on year
function get_movies_by_year($year) {
    global $conn;
    $sql = "SELECT * FROM movies WHERE year = '$year'";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

// Function to fetch movies based on hero
function get_movies_by_hero($hero) {
    global $conn;
    $sql = "SELECT * FROM movies WHERE hero = '$hero'";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

// Function to fetch movies based on director
function get_movies_by_director($director) {
    global $conn;
    $sql = "SELECT * FROM movies WHERE director = '$director'";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}
?>
