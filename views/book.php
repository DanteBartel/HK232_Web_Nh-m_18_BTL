<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Detail</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    
</head>

<body class="bg-gray-200">
    <?php require 'views/header.php'; ?>

    <hr class="border-t border-gray-300 my-4">

    <div class="lg:max-w-screen-xl py-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:px-32 px-2 md:px-10">
            <!-- Ảnh thay thế và ảnh chính -->
            <div class="col-span-1">
                <div class="flex flex-col md:flex-row items-start lg:items-center justify-start lg:justify-between lg:space-y-0 lg:space-x-8">
                    
                    <div class="flex flex-row mb-4 order-2 md:flex-col md:items-start md:space-y-4 md:order-1">
                        <img src="<?php echo $book->image; ?>" alt="Thumbnail" class="object-fill p-2 w-1/4 md:w-40 md:h-40 lg:h-32 border-2 border-gray-400 hover:bg-gray-400 cursor-pointer" onclick="changeMainImage(this)">
                        <?php foreach ($book->ad_images as $ad_image) { ?>
                            <img src="<?php echo $ad_image->image; ?>" alt="Thumbnail" class="object-fill p-2 w-1/4 md:w-40 md:h-40 lg:h-32 border-2 border-gray-400 hover:bg-gray-400 cursor-pointer" onclick="changeMainImage(this)">
                        <?php } ?>
                    </div>
                    
                    <img src="<?php echo $book->image; ?>" alt="Main Image" id="mainImage" class="order-1 object-fill w-full md:w-3/4 md:ml-12 md:order-2 h-[650px] border-2 border-gray-500">
                </div>
            </div>
            <!-- Mô tả -->
            <div class="col-span-1 ">
                <h1 class="text-2xl font-bold mb-2"><?php echo $book->name; ?> </h1>
                <p class="text-lg text-gray-700 mb-4">Tác giả: <?php echo $book->author; ?></p>
                <div class="flex items-center space-x-4 mb-4">
                    <div class="flex items-center space-x-1">
                        <!-- Danh gia sao -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-6 h-6">
                            <path fill="#000000" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-6 h-6">
                            <path fill="#000000" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-6 h-6">
                            <path fill="#000000" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-6 h-6">
                            <path fill="#000000" d="M288 376.4l.1-.1 26.4 14.1 85.2 45.5-16.5-97.6-4.8-28.7 20.7-20.5 70.1-69.3-96.1-14.2-29.3-4.3-12.9-26.6L288.1 86.9l-.1 .3V376.4zm175.1 98.3c2 12-3 24.2-12.9 31.3s-23 8-33.8 2.3L288.1 439.8 159.8 508.3C149 514 135.9 513.1 126 506s-14.9-19.3-12.9-31.3L137.8 329 33.6 225.9c-8.6-8.5-11.7-21.2-7.9-32.7s13.7-19.9 25.7-21.7L195 150.3 259.4 18c5.4-11 16.5-18 28.8-18s23.4 7 28.8 18l64.3 132.3 143.6 21.2c12 1.8 22 10.2 25.7 21.7s.7 24.2-7.9 32.7L438.5 329l24.6 145.7z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-6 h-6">
                            <path fill="#000000" d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z"/>
                        </svg>
                    </div>
                    <p class="text-lg text-gray-700">3.5 (100 Đánh giá)</p>
                </div>
                <p class="text-2xl font-bold text-gray-900 mb-4"><?php echo $book->price; ?></p>
                <p class="text-lg text-gray-700 mb-4">Mô tả sách: <?php echo $book->description; ?></p>
                <div class="flex items-center my-3">
                    <button class="w-6 h-6 border-2 border-gray-600 text-gray-700 rounded-full font-black hover:bg-gray-400 text-sm" id="decrement">-</button>
                    <span class="py-2 px-2 text-gray-700 text-xl" id="count">1</span>
                    <button class="w-6 h-6 border-2 border-gray-600 text-gray-700 rounded-full font-black hover:bg-gray-400 text-sm" id="increment">+</button>
                </div>


                <div class="flex items-center space-x-4">
                    <button
                        class="w-full bg-violet-900 bg-opacity-70 hover:bg-violet-900 hover:bg-opacity-90 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Add to cart
                    </button>
                    <button
                        class="w-full border-2 border-violet-500 text-violet-900 hover:bg-violet-300 hover:bg-opacity-90 hover:text-white  font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Favorite
                    </button>
                </div>

                <div class="grid grid-cols-2 md:flex md:flex-row gap-x-6 my-6 py-6 border-t-2 border-purple-400">
                    <div>
                        <p class="text-violet-800 pb-4 lg:pb-8">Publisher: </p>
                        <p class="text-violet-800 pb-4 lg:pb-8">Language: </p>
                        <p class="text-violet-800 pb-4 lg:pb-8">Print length: </p>
                    </div>

                    <div>
                        <p class="text-black pb-4 lg:pb-8 ">Margaret K. Books</p>
                        <p class="text-black pb-4 lg:pb-8"> English </p>
                        <p class="text-black pb-4 lg:pb-8"> 592 pages</p>
                    </div>
                
                    <div>
                        <p class="text-violet-800 pb-4 lg:pb-8">Publication date: </p>
                        <p class="text-violet-800 pb-4 lg:pb-8">Reading age: </p>
                        <p class="text-violet-800 pb-4 lg:pb-8">Dimensions:</p>
                    </div>

                    <div>
                        <p class="text-black pb-4 lg:pb-8">March 3, 2020</p>
                        <p class="text-black pb-4 lg:pb-8"> 14+</p>
                        <p class="text-black pb-4 lg:pb-8"> 6 x 1.8 x 9 inches</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <hr class="border-t border-gray-300 my-4">
    <?php require 'views/footer.php'; ?>
    <script src="assets/js/fakebook.js"></script>
</body>

</html>
