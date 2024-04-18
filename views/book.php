<!DOCTYPE html>
<html>
<head>
    <title>Book Details</title>
</head>
<body>
    <h1>Book Details</h1>
    <p>ID: <?php echo $book->id; ?></p>
    <p>Name: <?php echo $book->name; ?></p>
    <p>Price: $<?php echo $book->price; ?></p>
    <a href="index.php">Back to Home</a>
</body>
</html>
