<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
    <?php
    if (!isset($book)) { echo "Create New Book"; } else { echo "Edit a Book"; } 
    ?>
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <?php require 'views/header.php'; ?>
    <?php
    if (isset($_SESSION['update_book']) && $_SESSION['update_book'] == true) {
        echo "<script>";
        echo "window.onload = function() {";
        echo "    alert('Edit book successfully');";
        echo "};";
        echo "</script>";
        unset($_SESSION['update_book']);
    } else if (isset($_SESSION['update_book']) && $_SESSION['update_book'] == false) {
        echo "<script>";
        echo "window.onload = function() {";
        echo "    alert('Edit book failed');";
        echo "};";
        echo "</script>";
        unset($_SESSION['update_book']);
    }
    ?>
    <hr class="border-t border-gray-300 my-4">

    <div class="w-screen bg-gray-400">
        <div class="mx-auto w-[800px] p-8 bg-gray-100">
            <h1 class="text-2xl">
                <?php
                if (!isset($book)) { echo "Create New Book"; } else { echo "Edit Book " . $book->id; } 
                ?>
            </h1>
            <hr class="border-t-2 border-gray-300 my-4">
            <form action="index.php?action=books<?php if (isset($book)) {echo "&verb=update";} ?>" method="post" onsubmit="return validateBook()">
                <!-- id -->
                <div class="hidden">
                    <input type="text" id="id" name="id" value="<?php if (isset($book)) { echo $book->id; } ?>">
                </div>
                <!-- isbn -->
                <div>
                    <label for="isbn" class="font-bold">ISBN (13 kí tự, nullable):</label>
                </div>
                <div>
                    <input type="text" id="isbn" name="isbn" class="w-64" value="<?php if (isset($book)) { echo $book->isbn; } ?>">
                </div>
                <!-- name -->
                <div>
                    <label for="name" class="font-bold">Name (Tối đa 255 kí tự):</label>
                </div>
                <div>
                    <input type="text" id="name" name="name" class="w-64" required value="<?php if (isset($book)) { echo $book->name; } ?>">
                </div>
                <!-- price -->
                <div>
                    <label for="price" class="font-bold">Price (VND):</label>
                </div>
                <div>
                    <input type="text" id="price" name="price" class="w-64" required value="<?php if (isset($book)) { echo $book->price; } ?>">
                </div>
                <!-- author -->
                <div>
                    <label for="author" class="font-bold">Author (Tối đa 255 kí tự, nullable):</label>
                </div>
                <div>
                    <input type="text" id="author" name="author" class="w-64" value="<?php if (isset($book)) { echo $book->author; } ?>">
                </div>
                <!-- description -->
                <div>
                    <label for="description" class="font-bold">Description (Tối đa 5000 kí tự):</label>
                </div>
                <div>
                    <textarea id="description" name="description" rows="4" cols="50" required><?php if (isset($book)) { echo $book->description; } ?></textarea>
                </div>
                <!-- image -->
                <div>
                    <label for="image" class="font-bold">Image (Tối đa 255 kí tự, nullable):</label>
                </div>
                <div>
                    <input type="text" id="image" name="image" class="w-64" value="<?php if (isset($book)) { echo $book->image; } ?>">
                </div>
                <!-- quantity -->
                <div>
                    <label for="quantity" class="font-bold">quantity (Kiểu số nguyên):</label>
                </div>
                <div>
                    <input type="text" id="quantity" name="quantity" class="w-64" required value="<?php if (isset($book)) { echo $book->quantity; } ?>">
                </div>
                <!-- submit -->
                <div>
                    <input type="submit" value="<?php if (!isset($book)) { echo "Create New Book"; } else { echo "Edit Book"; } ?>" class="bg-blue-700 hover:bg-blue-500 p-1 border-solid border-2 border-black text-white font-bold rounded"></input>
                </div>
            </form>
        </div>
    </div>


    <hr class="border-t border-gray-300 my-4">
    <?php require 'views/footer.php'; ?>
    <script src="assets/js/validate_book.js"></script>
</body>
</html>