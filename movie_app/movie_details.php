<?php
include 'db/config.php';
include 'db/movie_db.php';

$movie_id = $_GET['id']; // Get movie ID from URL
$movie_sql = "SELECT * FROM movies WHERE movie_id = '$movie_id'";
$movie_result = $conn->query($movie_sql);
$movie = $movie_result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $movie['title']; ?> - Movie Details</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2><?php echo $movie['title']; ?></h2>
    <img src="images/<?php echo $movie['image_url']; ?>" alt="<?php echo $movie['title']; ?>" />
    <p><strong>Year:</strong> <?php echo $movie['year']; ?></p>
    <p><strong>Hero:</strong> <?php echo $movie['hero']; ?></p>
    <p><strong>Director:</strong> <?php echo $movie['director']; ?></p>
    <p><strong>Description:</strong> <?php echo $movie['description']; ?></p>
</body>
</html>
