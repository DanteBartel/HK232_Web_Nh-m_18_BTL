<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Books</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <meta http-equip="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" sizes="16x16">
    <script src="https://kit.fontawesome.com/20d7a8279b.js" crossorigin="anonymous"></script>
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
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
    <?php require 'views/pagination.php'; ?>
    <hr class="border-t border-gray-300 my-4">
    <?php require 'views/footer.php'; ?>
    <!-- <script src="assets/js/bookcard.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.5/dist/js.cookie.min.js"></script>
    <script src="assets/js/api_url.js"></script>
    <script src="assets/js/book_card.js"></script>
</body>
</html>








