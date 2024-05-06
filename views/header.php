<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equip="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" sizes="16x16">
        <script src="https://kit.fontawesome.com/20d7a8279b.js" crossorigin="anonymous"></script>
        <title>Sách hay</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div name="header" class="mx-auto">
            <div class="bg-violet-50 mx-auto pt-2 pb-2 lg:px-32 px-1 md:px-10">
                <nav class="flex items-center py-3">
                    <div class="basis-1/12">
                        <div class="w-20">
                            <a href="index.php?action=index">
                                <img class=" border-r border-gray-400 px-3 cursor-pointer hover-fade " src="assets/img/fahasa.png">
                            </a>
                        </div>
                    </div>

                    <div class="basis-1/12 pl-2 xl:px-2 font-semibold uppercase hover:text-rose-700 pr-2">
                        <p>Fahasa</p>
                        <p>shop</p>
                    </div>

                    <div class=" basis-2/12 lg:basis-4/12 xl:pl-20">
                        <div class="relative w-20 md:w-64 lg:w-72 xl:w-96">
                            <input type="text" class="block w-3 md:w-full py-2 pl-4 pr-4 rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:outline-none" placeholder="Search">

                            <div class="absolute inset-y-0 right-0 flex items-center pr-12 md:pr-4 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 text-gray-400">
                                    <path fill="currentColor" d="M16.293 15.707l3.999 3.999a1 1 0 0 1-1.414 1.414l-3.999-3.999a8 8 0 1 1 1.414-1.414zM10 16a6 6 0 1 0 0-12a6 6 0 0 0 0 12z"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="basis-7/12 lg:basis-6/12 flex flex-wrap justify-end">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="xl:h-10 xl:w-20 px-1 h-10 w-10 border-r border-violet-300 cursor-pointer hover-fade">
                            <a href="index.php?action=favorite_books&page=1">
                                <path fill="#8a79be" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
                            </a>
                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="xl:h-10 xl:w-20 px-1 h-10 w-10 cursor-pointer hover-fade">
                            <a href="index.php?action=accounts<?php echo (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 1)? '&verb=edit&id='.$_SESSION['account_id'] : '' ?>">
                                <path fill="#8a79be" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
                            </a>
                        </svg>

                        <div class="relative md:hidden">
                        
                            <div id="menuButton" class="w-10 h-10 px-1 cursor-pointer flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="xl:h-10 xl:w-20 px-1 h-10 w-10 cursor-pointer hover-fade">
                                    <path fill="#8a79be" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/>
                                </svg>
                            </div>

                            
                            <div id="dropdownMenu" class="absolute right-0 mt-2 border-2 border-gray-500 rounded-md shadow-lg hidden bg-purple-100">
                                <div class="py-1">
                                    <div class="w-40 uppercase font-bold text-center"><a href="index.php?action=books&page=1">To Books</a></div>
                                    <div class="w-40  px-1 uppercase font-bold text-center <?php echo isset($_SESSION['loggedin']) ? " hidden" : "" ?>"><a href="index.php?action=login">To Login</a></div>
                                    <div class="w-40 px-1 pb-2 uppercase font-bold text-center"><?php echo "Hello " . (isset($_SESSION['username']) ? $_SESSION['username'] : "Guest"); ?></div>
                                    <div class="w-24 pl-12 pb-2 <?php echo isset($_SESSION['loggedin']) ? "" : " hidden" ?>">
                                        <a href="index.php?action=logout" class="bg-rose-700 hover:bg-rose-500 p-1 border-solid border-2 border-black text-white font-bold rounded">Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="flexMenu" class="flex justify-end">
                            <div class="w-20 h-10 py-1 border-2 border-violet-200 hover:bg-violet-900 rounded-md bg-violet-900 bg-opacity-70 text-white font-bold text-center">
                                <a href="index.php?action=books&page=1">To Books</a>
                            </div>

                            <div class="w-20 h-10 py-1 border-2 border-violet-200 hover:bg-violet-900 rounded-md bg-violet-900 bg-opacity-70 text-white font-bold text-center <?php echo isset($_SESSION['loggedin']) ? " hidden" : "" ?>">
                                <a href="index.php?action=login">To Login</a>
                            </div>

                            <div class="w-20 pl-4 font-bold italic">
                                <?php
                                    echo "Hello " . (isset($_SESSION['username']) ? $_SESSION['username'] : "Guess");
                                ?>
                            </div>
                            <div class="w-20 pl-4 py-2 <?php echo isset($_SESSION['loggedin']) ? "" : " hidden" ?>">
                                <a href="index.php?action=logout" class="bg-rose-700 hover:bg-rose-500 p-1 border-solid border-2 border-black text-white font-bold rounded">Logout</a>
                            </div>
                        </div>



                    </div>
                </nav>
            </div>
        </div>
    <script src="assets/js/header.js"></script>
    </body>
</html>