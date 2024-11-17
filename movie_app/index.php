<?php
include 'db/config.php';
include 'db/movie_db.php';

// Fetch all movies
$movies = get_all_movies();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tollywood Romantic Movies</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
</head>
<body>
    <div id="navbar">
        <div id="menu">
            <span onclick="openMenu()">☰</span>
            <div id="menuContent">
                <a href="search.php">Search</a>
                <a href="login.php">Login</a>
            </div>
        </div>
    </div>

    <div class="movie-list">
        <?php foreach ($movies as $movie): ?>
            <div class="movie-item">
                <img src="images/<?php echo $movie['image_url']; ?>" alt="<?php echo $movie['title']; ?>" />
                <h3><?php echo $movie['title']; ?></h3>
                <p>Year: <?php echo $movie['year']; ?></p>
                <p>Hero: <?php echo $movie['hero']; ?></p>
                <p>Director: <?php echo $movie['director']; ?></p>
                <a href="movie_details.php?id=<?php echo $movie['movie_id']; ?>">More Info</a>
            </div>
        <?php endforeach; ?>
    </div>

    <div id="mode-toggle" onclick="toggleMode()">🌙</div> <!-- Toggle mode button -->
</body>
</html>

