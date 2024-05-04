<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign up</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body class="bg-gray-200">
    <?php require 'views/header.php'; ?>

    <hr class="border-t border-gray-300">
    <div class="border-2 rounded-3xl lg:max-w-screen-xl mx-auto py-8 grid grid-cols-1 md:grid-cols-2 bg-violet-500 bg-opacity-30 gap-8 lg:px-32 px-2 md:px-10">
        
            <div class="col-span-1 md:flex justify-center items-center px-6 order-2 md:order-1">
                <img src="assets/img/signup.jpg" alt="Logo" class="w-full h-full rounded-3xl object-cover">
            </div>
            <div class="col-span-1 flex justify-center items-center px-6 order-1 md:order-2">
                <div class=" bg-white p-10 w-full h-full md:w-[400px] md:h-[500px] rounded-3xl shadow-md">
                    <h2 class="text-3xl font-semibold mb-1 uppercase text-center text-violet-900">Sign up</h2> 
                    <h3 class="text-md font-semibold italic mb-6 text-center">It's free and only takes a minute</h3>
                    <?php if (isset($error)): ?>
                        <div><?php echo $error; ?></div>
                    <?php endif; ?>
                    <form action="index.php?action=signup" method="POST" onsubmit="return validateNewAccount()">
                        <div class="mb-4">
                            <label for="username" class="block text-xl font-medium text-gray-700">Username (2-20 ký tự):</label>
                            <input type="text" id="username" name="username" placeholder="Email/ Phone numbers/ Login Account" class="px-2 mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                        </div>
                        
                        <div class="mb-4 relative">
                            <label for="password" class="block text-xl font-medium text-gray-700">Password (2-20 ký tự):</label>
                            <div class="relative">
                            <input type="password" id="password" name="password" placeholder="Password" class="px-2 mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                            <svg id="showPassword" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-6 h-6  absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer">
                                <path fill="#61528e" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/>
                            </svg>
                            <svg id="hidePassword" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="display:none;"  class="w-6 h-6  absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer">
                                <path fill="#61528e" d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z"/>
                            </svg>
                            </div>
                        </div>

                        <div class="mb-4 relative">
                            <label for="con_password" class="block text-xl font-medium text-gray-700">Confirm Password:</label>
                            <div class="relative">
                            <input type="password" id="con_password" name="con_password" placeholder="Confirm Password" class="px-2 mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <svg id="con_showPassword" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-6 h-6  absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer">
                                <path fill="#61528e" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/>
                            </svg>
                            <svg id="con_hidePassword" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="display:none;"  class="w-6 h-6  absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer">
                                <path fill="#61528e" d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z"/>
                            </svg>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="email" class="block text-xl font-medium text-gray-700">Email</label>
                            <input type="text" id="email" name="email" placeholder="Fill in your Email" class="px-2 mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                        </div>
                        
                        <div>
                            <input type="submit" value="Sign up" class="w-full py-2 px-4 bg-violet-900 bg-opacity-80 text-white font-semibold rounded-md hover:bg-violet-900 focus:outline-none focus:bg-blue-600">
                        </div>
                    </form>

                </div>
            </div>
    </div>
    <hr class="border-t border-gray-300">
    <?php require 'views/footer.php'; ?>
    <script src="assets/js/signup.js"></script>
    <script src="assets/js/validate_new_account.js"></script>
</body>
</html>