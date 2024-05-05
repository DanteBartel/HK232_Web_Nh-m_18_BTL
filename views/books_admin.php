<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Books</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php require 'views/header.php'; ?>
    <?php
    if (isset($_SESSION['new_book']) && $_SESSION['new_book'] == true) {
        echo "<script>";
        echo "window.onload = function() {";
        echo "    alert('New book created successfully');";
        echo "};";
        echo "</script>";
        unset($_SESSION['new_book']);
    } else if (isset($_SESSION['new_book']) && $_SESSION['new_book'] == false) {
        echo "<script>";
        echo "window.onload = function() {";
        echo "    alert('New book failed to create');";
        echo "};";
        echo "</script>";
        unset($_SESSION['new_book']);
    }
    if (isset($_SESSION['delete_book']) && $_SESSION['delete_book'] == true) {
        echo "<script>";
        echo "window.onload = function() {";
        echo "    alert('Delete book successfully');";
        echo "};";
        echo "</script>";
        unset($_SESSION['delete_book']);
    } else if (isset($_SESSION['delete_book']) && $_SESSION['delete_book'] == false) {
        echo "<script>";
        echo "window.onload = function() {";
        echo "    alert('Delete book failed');";
        echo "};";
        echo "</script>";
        unset($_SESSION['delete_book']);
    }
    ?>
    <hr class="border-t border-gray-300 my-4">

    <div class="w-screen">
        <div class="mx-auto lg:max-w-screen-xl p-2 pr-2 md:p-8 bg-violet-100 rounded-3xl">
            <div class="shadow-md border-2 border-gray-900 w-96 mx-auto rounded-2xl bg-red-600 bg-opacity-70 py-1">
                <h1 class="text-2xl  mx-auto text-center uppercase font-extrabold text-slate-100">
                    Read Books
                </h1>
            </div>
            <hr class="border-t-2 border-gray-300 my-4">
            <form action="index.php" method="GET">
                <input type="hidden" name="action" value="books"></input>
                <input type="hidden" name="verb" value="new"></input>
                <input type="submit" value="Create New Book" class="bg-violet-900 bg-opacity-70 hover:bg-violet-700 p-1 border-solid border-2 border-black text-white font-bold rounded"></input>
            </form>
            <table class="mt-4 min-w-full mr-2">
                <thead>
                    <tr>
                        <th class="text-center md:min-w-12 border-2 border-gray-400">ID</th>
                        <th class="text-center md:min-w-32 border-2 border-gray-400">Name</th>
                        <th class="text-center border-2 border-gray-400">Description</th>
                        <th class="text-center md:min-w-32 border-2 border-gray-400">Price</th>
                        <th class="text-center md:min-w-40 border-2 border-gray-400">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if ($books) {
                            foreach ($books as $book) {
                    ?>
                                <tr>
                                    <td class="text-center border-2 border-gray-400"><?php echo $book->id; ?></td>
                                    <td class="text-center border-2 border-gray-400"><?php echo $book->name; ?></td>
                                    <td class="border-2 border-gray-400"><?php echo $book->description; ?></td>
                                    <td class="text-center border-2 border-gray-400 font-semibold"><?php echo $book->price; ?> VND</td>
                                    <td class="border-2 border-gray-400 align-top">
                                        <div class="flex py-10 md:pl-6">
                                            <form action="index.php" method="get" class="pr-2">
                                                <input type="hidden" name="action" value="books">
                                                <input type="hidden" name="verb" value="edit">
                                                <input type="hidden" name="id" value="<?php echo $book->id; ?>">
                                                <input type="submit" value="Edit" class="bg-violet-900 bg-opacity-50 hover:bg-violet-700 p-1 border-solid border-2 border-black text-white font-bold rounded"></input>
                                            </form>
                                            <form action="index.php?action=books&verb=destroy&page=<?php echo $page; ?>" method="post">
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

    <?php require 'views/pagination.php'; ?>
    <hr class="border-t border-gray-300 my-4">
    <?php require 'views/footer.php'; ?>
</body>
</html>








