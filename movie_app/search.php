<?php
include 'db/config.php';
include 'db/movie_db.php';

$search_query = '';
if (isset($_POST['search'])) {
    $search_query = $_POST['search'];
    // Search for movies based on query
    $sql = "SELECT * FROM movies WHERE title LIKE '%$search_query%' OR hero LIKE '%$search_query%' OR director LIKE '%$search_query%'";
} else {
    $sql = "SELECT * FROM movies";
}
$result = $conn->query($sql);
$movies = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Movies</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Search Movies</h2>
    <form method="POST" action="search.php">
        <input type="text" name="search" value="<?php echo $search_query; ?>" placeholder="Search by title, hero, or director" required>
        <button type="submit">Search</button>
    </form>

    <div class="movie-list">
        <?php foreach ($movies as $movie): ?>
            <div class="movie-item">
                <img src="images/<?php echo $movie['image_url']; ?>" alt="<?php echo $movie['title']; ?>" />
                <h3><?php echo $movie['title']; ?></h3>
                <a href="movie_details.php?id=<?php echo $movie['movie_id']; ?>">More Info</a>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
