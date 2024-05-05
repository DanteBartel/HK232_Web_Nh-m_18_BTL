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
    <div class="w-screen my-8">
        <div class="mx-auto lg:max-w-screen-xl p-2 pr-2 md:p-8 bg-violet-100 rounded-3xl">
            <div class="shadow-md border-2 border-gray-900 w-96 mx-auto rounded-2xl bg-red-600 bg-opacity-70 py-1">
                <h1 class="text-2xl mx-auto text-center uppercase font-extrabold text-slate-100">
                    Edit Account
                </h1>
            </div>
            <hr class="border-t-2 border-gray-300 my-4">
            <?php if (isset($error)): ?>
                <div><?php echo $error; ?></div>
            <?php endif; ?>
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="col-span-1">
                    <!-- Username -->
                    <form action="index.php?action=accounts&verb=update" method="POST" onsubmit="return validateEditUsername()">
                        <h3 class="text-xl font-bold">
                            Username
                        </h3>
                        <div class="pb-2">
                            <label for="username">Username (2-20 ký tự):</label>
                            <input type="text" id="username" name="username" class="w-full border-2 border-gray-400 rounded-md" value="<?php echo $account->username; ?>" required>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Edit" class="bg-violet-900 bg-opacity-85 hover:bg-violet-900 p-1 border-solid border-2 border-black text-white font-bold rounded">
                        </div>
                    </form>

                    <!-- Password -->
                    <form action="index.php?action=accounts&verb=update" method="POST" onsubmit="return validateEditPassword()">
                        <h3 class="text-xl font-bold">
                            Password
                        </h3>
                        <div class="pb-2">
                            <label for="old_password">Old Password:</label>
                            <input type="password" id="old_password" name="old_password" class="w-full border-2 border-gray-400 rounded-md" required>
                        </div>
                        <div class="pb-2">
                            <label for="new_password">New Password (2-20 ký tự):</label>
                            <input type="password" id="new_password" name="new_password" class="w-full border-2 border-gray-400 rounded-md" required>
                        </div>
                        <div class="pb-2">
                            <label for="con_password">Confirm Password:</label>
                            <input type="password" id="con_password" name="con_password"  class="w-full border-2 border-gray-400 rounded-md" required>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Edit" class="bg-violet-900 bg-opacity-85 hover:bg-violet-900 p-1 border-solid border-2 border-black text-white font-bold rounded">
                        </div>
                    </form>

                    <!-- Email -->
                    <form action="index.php?action=accounts&verb=update" method="POST" onsubmit="return validateEditEmail()">
                        <h3 class="text-xl font-bold">
                            Email
                        </h3>
                        <div class="pb-2">
                            <label for="email">Email:</label>
                            <input type="text" id="email" name="email"  class="w-full border-2 border-gray-400 rounded-md" value="<?php echo $account->email; ?>" required>
                        </div>
                        <div class="text-center pb-2">
                            <input type="submit" value="Edit" class="bg-violet-900 bg-opacity-85 hover:bg-violet-900 p-1 border-solid border-2 border-black text-white font-bold rounded">
                        </div>
                    </form>
                </div>

                <div class="col-span-1 md:flex justify-center items-center px-10">
                    <img src="assets/img/editacc.jpg" alt="Logo" class="w-full h-full rounded-3xl object-fit">
                </div>

            </div>
            

        </div>
    </div>
    <?php require 'views/footer.php'; ?>
    <script src="assets/js/validate_edit_account.js"></script>
</body>
</html>