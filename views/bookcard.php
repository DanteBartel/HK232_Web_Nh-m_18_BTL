<div class="max-w-60 rounded overflow-hidden shadow-lg hover-fade">
    <a href="index.php?action=book&id=<?php echo $book->id; ?>">
        <img class="w-full h-72 object-fill" src="<?php echo $book->image; ?>" alt="<?php echo $book->name; ?> Image">
    </a>
    <div class="px-3 py-2">
        <div class="font-bold text-xl mb-1"><?php echo $book->name; ?> </div>
        <div class="text-gray-700 text-base mb-1 opacity-60">IdBook: <?php echo $book->id; ?> </div>
        <div class="flex items-center mb-2">
            <div class='hidden'><?php echo $book->id; ?></div>
            <div class="text-xl font-bold"><?php echo $book->price; ?> </div>
            <button class="ml-auto mr-2 focus:outline-none border-heart <?php echo isset($fav_book_ids)&&!is_fav_book($book->id, $fav_book_ids) ? "" : "hidden"; ?>">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-6 w-6 fill-current text-gray-500 hover:text-red-500">
                    <path fill="#81779c" d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z"/>
                </svg>
            </button>
            <button class="ml-auto mr-2 focus:outline-none full-heart <?php echo isset($fav_book_ids)&&is_fav_book($book->id, $fav_book_ids) ? "" : "hidden"; ?>">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-6 w-6 fill-current text-gray-500 hover:text-red-500">
                    <path fill="#81779c" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
                </svg>
            </button>
            

        </div>
        <button class="flex items-center justify-center w-full bg-violet-900 bg-opacity-70 hover:bg-violet-900 hover:bg-opacity-90 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current mr-2" viewBox="0 0 576 512">
                <path fill="#ffffff" d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
            </svg>
            Add to Cart
        </button>

    </div>
</div>

<!-- <script src="assets/js/bookcard.js"></script> -->