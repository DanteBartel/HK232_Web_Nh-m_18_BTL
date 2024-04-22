<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php require 'views/header.php'; ?>
    <hr class="border-t border-gray-300 my-4">
    <div name="body" class="lg:max-w-screen-xl mx-auto bg-teal-100">
        <div>body</div>
        <h1>Home</h1>
        <a href="index.php?action=book&id=<?php echo $book->id; ?>">
            <?php echo $book->name; ?> - $<?php echo $book->price; ?>
        </a>
    </div>
    <hr class="border-t border-gray-300 my-4">
    <?php require 'views/footer.php'; ?>
</body>
</html>
