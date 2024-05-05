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
    <hr class="border-t border-gray-300 my-4">

    <div class="w-screen">
        <div class="mx-auto lg:max-w-screen-md p-2 pr-2 md:p-8 bg-violet-100 rounded-3xl">
            <div class="shadow-md border-2 border-gray-900 w-full mx-auto rounded-2xl bg-red-600 bg-opacity-70 py-1">
                <h1 class="text-2xl mx-auto text-center uppercase font-extrabold text-slate-100">
                    <?php
                    if (!isset($ad_image)) { echo "Create New Additional Image For Book " . $book_id; } else { echo "Edit Additional Image " . $ad_image->id; } 
                    ?>
                </h1>
            </div>
            <form action="index.php?action=ad_images<?php if (isset($ad_image)) {echo "&verb=update";} ?>" method="post" onsubmit="return validateAdImage()">
                <!-- id -->
                <?php if (isset($ad_image)) { ?>
                    <input type="hidden" id="id" name="id" value="<?php echo $ad_image->id; ?>">
                <?php } ?>
                <input type="hidden" id="book_id" name="book_id" value="<?php echo $_GET['book_id']; ?>">
                
                <!-- image -->
                <div class="py-2"> 
                    <label for="image" class="font-bold">Image (Tối đa 255 kí tự):</label>
                </div>
                <div>
                    <input type="text" id="image" name="image" class="w-full border-2 border-gray-700 py-2" required value="<?php if (isset($ad_image)) { echo $ad_image->image; } ?>">
                </div>
                <!-- submit -->
                <div class="py-6 text-center">
                    <input type="submit" value="<?php if (!isset($ad_image)) { echo "Create New Additional Image"; } else { echo "Edit Additional Image"; } ?>" class="bg-violet-900 bg-opacity-70 hover:bg-violet-900 p-1 border-solid border-2 border-black text-white font-bold rounded"></input>
                </div>
            </form>
        </div>
    </div>


    <hr class="border-t border-gray-300 my-4">
    <?php require 'views/footer.php'; ?>
    <script src="assets/js/validate_ad_image.js"></script>
</body>
</html>