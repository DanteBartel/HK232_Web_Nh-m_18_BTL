<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Books</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php require 'views/header.php'; ?>
    <hr class="border-t border-gray-300 my-4">
    <div name="body" class="lg:max-w-screen-xl mx-auto ">
        <h1 class="text-2xl font-bold mb-4 ">Books</h1>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
            <?php foreach ($books as $book): ?>
                <?php require 'views/bookcard.php'; ?>
            <?php endforeach; ?>
        </div>
    </div>
    <hr class="border-t border-gray-300 my-4">
    <?php require 'views/footer.php'; ?>
</body>
</html>








