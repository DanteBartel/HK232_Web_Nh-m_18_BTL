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

    <div class="w-screen bg-gray-400">
        <div class="mx-auto w-[800px] p-8 bg-gray-100">
            <h1 class="text-2xl mb-4">
                <?php
                if (!isset($ad_image)) { echo "Create New Additional Image For Book " . $book_id; } else { echo "Edit Additional Image " . $ad_image->id; } 
                ?>
            </h1>
            <form action="index.php?action=ad_images<?php if (isset($ad_image)) {echo "&verb=update";} ?>" method="post" onsubmit="return validateAdImage()">
                <!-- id -->
                <?php if (isset($ad_image)) { ?>
                    <input type="hidden" id="id" name="id" value="<?php echo $ad_image->id; ?>">
                <?php } ?>
                <input type="hidden" id="book_id" name="book_id" value="<?php echo $_GET['book_id']; ?>">
                
                <!-- image -->
                <div>
                    <label for="image" class="font-bold">Image (Tối đa 255 kí tự):</label>
                </div>
                <div>
                    <input type="text" id="image" name="image" class="w-64" required value="<?php if (isset($ad_image)) { echo $ad_image->image; } ?>">
                </div>
                <!-- submit -->
                <div>
                    <input type="submit" value="<?php if (!isset($ad_image)) { echo "Create New Additional Image"; } else { echo "Edit Additional Image"; } ?>" class="bg-blue-700 hover:bg-blue-500 p-1 border-solid border-2 border-black text-white font-bold rounded"></input>
                </div>
            </form>
            <hr class="border-t-2 border-gray-300 my-4">
        </div>
    </div>


    <hr class="border-t border-gray-300 my-4">
    <?php require 'views/footer.php'; ?>
    <script src="assets/js/validate_ad_image.js"></script>
</body>
</html>