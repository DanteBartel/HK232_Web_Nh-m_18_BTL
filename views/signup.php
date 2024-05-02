<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign up</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <?php require 'header.php'; ?>
    <div class="h-screen w-screen bg-gray-400">
        <div class="mx-auto w-[1000px] p-8 bg-gray-100">
            <h1 class="text-2xl">
                Sign up
            </h1>
            <hr class="border-t-2 border-gray-300 my-4">
            <?php if (isset($error)): ?>
                <div><?php echo $error; ?></div>
            <?php endif; ?>
            <form action="index.php?action=signup" method="POST" onsubmit="return validateNewAccount()">
                <div>
                    <label for="username">Username (2-20 ký tự):</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div>
                    <label for="password">Password (2-20 ký tự):</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" required>
                </div>
                <div>
                    <input type="submit" value="Sign up" class="bg-blue-700 hover:bg-blue-500 p-1 border-solid border-2 border-black text-white font-bold rounded">
                </div>
            </form>
        </div>
    </div>
    <script src="assets/js/validate_new_account.js"></script>
</body>
</html>