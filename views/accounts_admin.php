<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Accounts</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php require 'views/header.php'; ?>
    <?php
    if (isset($_SESSION['delete_account']) && $_SESSION['delete_account'] = true) {
        echo "<script>";
        echo "window.onload = function() {";
        echo "    alert('Delete account successfully');";
        echo "};";
        echo "</script>";
        unset($_SESSION['delete_account']);
    } else if (isset($_SESSION['delete_account']) && $_SESSION['delete_account'] = false) {
        echo "<script>";
        echo "window.onload = function() {";
        echo "    alert('Delete account failed');";
        echo "};";
        echo "</script>";
        unset($_SESSION['delete_account']);
    }
    ?>
    <hr class="border-t border-gray-300 my-4">

    <div class="w-screen bg-gray-400">
        <div class="mx-auto w-[1000px] p-8 bg-gray-100">
            <h1 class="text-2xl">
                Read Accounts
            </h1>
            <hr class="border-t-2 border-gray-300 my-4">
            <!-- <form action="index.php" method="GET">
                <input type="hidden" name="action" value="books"></input>
                <input type="hidden" name="verb" value="new"></input>
                <input type="submit" value="Create New Book" class="bg-blue-700 hover:bg-blue-500 p-1 border-solid border-2 border-black text-white font-bold rounded"></input>
            </form> -->
            <table class="mt-4 min-w-full">
                <thead>
                    <tr>
                        <th class="text-left min-w-12 border-2 border-gray-300">ID</th>
                        <th class="text-left min-w-32 border-2 border-gray-300">Username</th>
                        <th class="text-left border-2 border-gray-300">Email</th>
                        <th class="text-left min-w-40 border-2 border-gray-300">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if ($accounts) {
                            foreach ($accounts as $account) {
                    ?>
                                <tr>
                                    <td class="border-2 border-gray-300"><?php echo $account->id; ?></td>
                                    <td class="border-2 border-gray-300"><?php echo $account->username; ?></td>
                                    <td class="border-2 border-gray-300"><?php echo $account->email; ?></td>
                                    <td class="border-2 border-gray-300 align-top">
                                        <div class="flex">
                                            <!-- <form action="index.php" method="get">
                                                <input type="hidden" name="action" value="accounts">
                                                <input type="hidden" name="verb" value="edit">
                                                <input type="hidden" name="id" value="<?php echo $account->id; ?>">
                                                <input type="submit" value="Edit" class="bg-blue-700 hover:bg-blue-500 p-1 border-solid border-2 border-black text-white font-bold rounded"></input>
                                            </form> -->
                                            <form action="index.php?action=accounts&verb=destroy" method="post">
                                                <input type="hidden" name="id" value="<?php echo $account->id; ?>">
                                                <input type="submit" value="Delete" class="bg-rose-700 hover:bg-rose-500 p-1 border-solid border-2 border-black text-white font-bold rounded"></input>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                    <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <hr class="border-t border-gray-300 my-4">
    <?php require 'views/footer.php'; ?>
</body>
</html>








