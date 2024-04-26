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

    <div class="w-screen bg-gray-400">
        <div class="mx-auto w-[1000px] p-8 bg-gray-100">
            <h1 class="text-2xl">
                Read Books
            </h1>
            <hr class="border-t-2 border-gray-300 my-4">
            <form action="b.php" method="get">
                <input type="submit" value="Create New Book" class="bg-blue-700 hover:bg-blue-500 p-1 border-solid border-2 border-black text-white font-bold rounded"></input>
            </form>
            <table class="mt-4 min-w-full">
                <thead>
                    <tr>
                        <th class="text-left min-w-12 border-2 border-gray-300">ID</th>
                        <th class="text-left min-w-32 border-2 border-gray-300">Name</th>
                        <th class="text-left border-2 border-gray-300">Description</th>
                        <th class="text-left min-w-32 border-2 border-gray-300">Price</th>
                        <th class="text-left min-w-40 border-2 border-gray-300">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if ($books) {
                            foreach ($books as $book) {
                    ?>
                                <tr>
                                    <td class="border-2 border-gray-300"><?php echo $book->id; ?></td>
                                    <td class="border-2 border-gray-300"><?php echo $book->name; ?></td>
                                    <td class="border-2 border-gray-300"><?php echo $book->description; ?></td>
                                    <td class="border-2 border-gray-300"><?php echo $book->price; ?> VND</td>
                                    <td class="border-2 border-gray-300 align-top">
                                        <div class="flex">
                                            <form action="c.php" method="get">
                                                <input type="hidden" name="id" value="<?php echo $book->id; ?>">
                                                <input type="submit" value="Edit" class="bg-blue-700 hover:bg-blue-500 p-1 border-solid border-2 border-black text-white font-bold rounded"></input>
                                            </form>
                                            <form action="d.php" method="post">
                                                <input type="hidden" name="id" value="<?php echo $book->id; ?>">
                                                <input type="submit" value="Delete" class="bg-rose-700 hover:bg-rose-500 p-1 border-solid border-2 border-black text-white font-bold rounded"></input>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                    <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <hr class="border-t border-gray-300 my-4">
    <?php require 'views/footer.php'; ?>
</body>
</html>








