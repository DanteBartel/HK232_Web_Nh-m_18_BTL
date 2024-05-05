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
    if (isset($_SESSION['new_ad_image']) && $_SESSION['new_ad_image'] == true) {
        echo "<script>";
        echo "window.onload = function() {";
        echo "    alert('Create additional image successfully');";
        echo "};";
        echo "</script>";
        unset($_SESSION['new_ad_image']);
    } else if (isset($_SESSION['new_ad_image']) && $_SESSION['new_ad_image'] == false) {
        echo "<script>";
        echo "window.onload = function() {";
        echo "    alert('Create additional image failed');";
        echo "};";
        echo "</script>";
        unset($_SESSION['new_ad_image']);
    }
    if (isset($_SESSION['update_ad_image']) && $_SESSION['update_ad_image'] == true) {
        echo "<script>";
        echo "window.onload = function() {";
        echo "    alert('Update additional image successfully');";
        echo "};";
        echo "</script>";
        unset($_SESSION['update_ad_image']);
    } else if (isset($_SESSION['update_ad_image']) && $_SESSION['update_ad_image'] == false) {
        echo "<script>";
        echo "window.onload = function() {";
        echo "    alert('Update additional image failed');";
        echo "};";
        echo "</script>";
        unset($_SESSION['update_ad_image']);
    }
    if (isset($_SESSION['delete_ad_image']) && $_SESSION['delete_ad_image'] == true) {
        echo "<script>";
        echo "window.onload = function() {";
        echo "    alert('Delete additional image successfully');";
        echo "};";
        echo "</script>";
        unset($_SESSION['delete_ad_image']);
    } else if (isset($_SESSION['delete_ad_image']) && $_SESSION['delete_ad_image'] == false) {
        echo "<script>";
        echo "window.onload = function() {";
        echo "    alert('Delete additional image failed');";
        echo "};";
        echo "</script>";
        unset($_SESSION['delete_ad_image']);
    }
    ?>
    <hr class="border-t border-gray-300 my-4">

    <div class="w-screen">
        <div class="mx-auto lg:max-w-screen-md p-2 pr-2 md:p-8 bg-violet-100 rounded-3xl">
            <div class="shadow-md border-2 border-gray-900 w-96 mx-auto rounded-2xl bg-red-600 bg-opacity-70 py-1">
                <h1 class="text-2xl mx-auto text-center uppercase font-extrabold text-slate-100">
                    <?php
                    if (!isset($book)) { echo "Create New Book"; } else { echo "Edit Book " . $book->id; } 
                    ?>
                </h1>
            </div>
            <form action="index.php?action=books<?php if (isset($book)) {echo "&verb=update";} ?>" method="post" onsubmit="return validateBook()">
                <!-- id -->
                <div class="hidden">
                    <input type="text" id="id" name="id" value="<?php if (isset($book)) { echo $book->id; } ?>">
                </div>
                <!-- isbn -->
                <div class="pt-2">
                    <label for="isbn" class="font-bold">ISBN (13 kí tự, nullable):</label>
                </div>
                <div>
                    <input type="text" id="isbn" name="isbn" class="w-full" value="<?php if (isset($book)) { echo $book->isbn; } ?>">
                </div>
                <!-- name -->
                <div class="pt-2">
                    <label for="name" class="font-bold">Name (Tối đa 255 kí tự):</label>
                </div>
                <div>
                    <input type="text" id="name" name="name" class="w-full" required value="<?php if (isset($book)) { echo $book->name; } ?>">
                </div>
                <!-- price -->
                <div class="pt-2">
                    <label for="price" class="font-bold">Price (VND):</label>
                </div>
                <div>
                    <input type="text" id="price" name="price" class="w-full" required value="<?php if (isset($book)) { echo $book->price; } ?>">
                </div>
                <!-- author -->
                <div class="pt-2">
                    <label for="author" class="font-bold">Author (Tối đa 255 kí tự, nullable):</label>
                </div>
                <div>
                    <input type="text" id="author" name="author" class="w-full" value="<?php if (isset($book)) { echo $book->author; } ?>">
                </div>
                <!-- description -->
                <div class="pt-2">
                    <label for="description" class="font-bold">Description (Tối đa 5000 kí tự):</label>
                </div>
                <div>
                    <textarea id="description" name="description" rows="4" cols="96" class="w-full" required><?php if (isset($book)) { echo $book->description; } ?></textarea>
                </div>
                <!-- image -->
                <div class="pt-2">
                    <label for="image" class="font-bold">Image (Tối đa 255 kí tự, nullable):</label>
                </div>
                <div>
                    <input type="text" id="image" name="image" class="w-full" value="<?php if (isset($book)) { echo $book->image; } ?>">
                </div>
                <!-- quantity -->
                <div class="pt-2">
                    <label for="quantity" class="font-bold">quantity (Kiểu số nguyên):</label>
                </div>
                <div>
                    <input type="text" id="quantity" name="quantity" class="w-full" required value="<?php if (isset($book)) { echo $book->quantity; } ?>">
                </div>
                <!-- submit -->
                <div class="pt-4 text-center">
                    <input type="submit" value="<?php if (!isset($book)) { echo "Create New Book"; } else { echo "Edit Book"; } ?>" class="bg-violet-900 bg-opacity-70 hover:bg-violet-900 p-1 border-solid border-2 border-black text-white font-bold rounded"></input>
                </div>
            </form>
            <hr class="border-t-2 border-red-400 my-4">
            <!-- ------------ Additional Images -->
            <?php if (isset($book)) { ?>
            <div class="shadow-md border-2 border-gray-900 w-96 mx-auto rounded-2xl bg-red-600 bg-opacity-70 py-1">
                <h1 class="text-2xl mx-auto text-center uppercase font-extrabold text-slate-100">
                    Edit Additional Images
                </h1>
            </div>
            <form action="index.php" method="GET" class="text-center pt-4">
                <input type="hidden" name="action" value="ad_images"></input>
                <input type="hidden" name="verb" value="new"></input>
                <input type="hidden" name="book_id" value="<?php echo $book->id; ?>"></input>
                <input type="submit" value="Create New Additional Image" class="bg-violet-900 bg-opacity-70 hover:bg-violet-900 p-1 border-solid border-2 border-black text-white font-bold rounded"></input>
            </form>
            <table class="mt-4 min-w-full">
                <thead>
                    <tr>
                        <th class="text-center min-w-12 border-2 border-gray-400">ID</th>
                        <th class="text-center min-w-40 border-2 border-gray-400">Image</th>
                        <th class="text-center min-w-20 border-2 border-gray-400">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php if ($book->ad_images) { foreach ($book->ad_images as $ad_image) { ?>
                    <tr>
                        <td class="text-center border-2 border-gray-400"><?php echo $ad_image->id; ?></td>
                        <td class="text-center border-2 border-gray-400"><?php echo $ad_image->image; ?></td>
                        <td class="text-center border-2 border-gray-400 align-top">
                            <div class="flex pl-6 md:pl-40">
                                <form action="index.php" method="get" class="pr-2">
                                    <input type="hidden" name="action" value="ad_images">
                                    <input type="hidden" name="verb" value="edit">
                                    <input type="hidden" name="id" value="<?php echo $ad_image->id; ?>">
                                    <input type="hidden" name="book_id" value="<?php echo $ad_image->book_id; ?>">
                                    <input type="submit" value="Edit" class="bg-violet-900 bg-opacity-50 hover:bg-violet-700 p-1 border-solid border-2 border-black text-white font-bold rounded"></input>
                                </form>
                                <form action="index.php?action=ad_images&verb=destroy" method="post">
                                    <input type="hidden" name="id" value="<?php echo $ad_image->id; ?>">
                                    <input type="hidden" name="book_id" value="<?php echo $ad_image->book_id; ?>">
                                    <input type="submit" value="Delete" class="bg-rose-700 hover:bg-rose-500 p-1 border-solid border-2 border-black text-white font-bold rounded"></input>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php }} ?>
                </tbody>
            </table>
            <?php } ?>
        </div>
    </div>


    <hr class="border-t border-gray-300 my-4">
    <?php require 'views/footer.php'; ?>
    <script src="assets/js/validate_book.js"></script>
</body>
</html>