<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Account</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <?php require 'header.php'; ?>
    <?php
    if (isset($_SESSION['update_account']) && $_SESSION['update_account'] == true) {
        echo "<script>";
        echo "window.onload = function() {";
        echo "    alert('Update account successfully');";
        echo "};";
        echo "</script>";
        unset($_SESSION['update_account']);
    } else if (isset($_SESSION['update_account']) && $_SESSION['update_account'] == false) {
        echo "<script>";
        echo "window.onload = function() {";
        echo "    alert('Update account failed');";
        echo "};";
        echo "</script>";
        unset($_SESSION['update_account']);
    }
    ?>
    <div class="h-screen w-screen bg-gray-400">
        <div class="mx-auto w-[1000px] p-8 bg-gray-100">
            <h1 class="text-2xl">
                Edit Account
            </h1>
            <hr class="border-t-2 border-gray-300 my-4">
            <?php if (isset($error)): ?>
                <div><?php echo $error; ?></div>
            <?php endif; ?>

            <!-- Username -->
            <form action="index.php?action=accounts&verb=update" method="POST" onsubmit="return validateEditUsername()">
                <h3 class="text-xl font-bold">
                    Username
                </h3>
                <div>
                    <label for="username">Username (2-20 ký tự):</label>
                    <input type="text" id="username" name="username" value="<?php echo $account->username; ?>" required>
                </div>
                <div>
                    <input type="submit" value="Edit" class="bg-emerald-700 hover:bg-emerald-500 p-1 border-solid border-2 border-black text-white font-bold rounded">
                </div>
            </form>

            <!-- Password -->
            <form action="index.php?action=accounts&verb=update" method="POST" onsubmit="return validateEditPassword()">
                <h3 class="text-xl font-bold">
                    Password
                </h3>
                <div>
                    <label for="old_password">Old Password:</label>
                    <input type="password" id="old_password" name="old_password" required>
                </div>
                <div>
                    <label for="new_password">New Password (2-20 ký tự):</label>
                    <input type="password" id="new_password" name="new_password" required>
                </div>
                <div>
                    <label for="con_password">Confirm Password:</label>
                    <input type="password" id="con_password" name="con_password" required>
                </div>
                <div>
                    <input type="submit" value="Edit" class="bg-emerald-700 hover:bg-emerald-500 p-1 border-solid border-2 border-black text-white font-bold rounded">
                </div>
            </form>

            <!-- Email -->
            <form action="index.php?action=accounts&verb=update" method="POST" onsubmit="return validateEditEmail()">
                <h3 class="text-xl font-bold">
                    Email
                </h3>
                <div>
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" value="<?php echo $account->email; ?>" required>
                </div>
                <div>
                    <input type="submit" value="Edit" class="bg-emerald-700 hover:bg-emerald-500 p-1 border-solid border-2 border-black text-white font-bold rounded">
                </div>
            </form>

        </div>
    </div>
    <script src="assets/js/validate_edit_account.js"></script>
</body>
</html>