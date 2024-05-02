<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php require 'header.php'; ?>
    <?php
    if (isset($_SESSION['new_account']) && $_SESSION['new_account'] = true) {
        echo "<script>";
        echo "window.onload = function() {";
        echo "    alert('New account created successfully');";
        echo "};";
        echo "</script>";
        unset($_SESSION['new_account']);
    }
    ?>
    <div class="h-screen w-screen bg-gray-400">
        <div class="mx-auto w-[1000px] p-8 bg-gray-100">
            <h1 class="text-2xl">
                Log in
            </h1>
            <a href="index.php?action=signup">
                <button class="bg-emerald-700 hover:bg-emerald-500 p-1 border-solid border-2 border-black text-white font-bold rounded">Sign up</button>
            </a>
            <hr class="border-t-2 border-gray-300 my-4">
            <?php if (isset($error)): ?>
                <div><?php echo $error; ?></div>
            <?php endif; ?>
            <form action="index.php?action=login" method="POST">
                <div>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div>
                    <label for="remember">Remember Me:</label>
                    <input type="checkbox" id="remember" name="remember">
                </div>
                <div>
                    <input type="submit" value="Login" class="bg-blue-700 hover:bg-blue-500 p-1 border-solid border-2 border-black text-white font-bold rounded">
                </div>
            </form>
        </div>
    </div>
</body>
</html>