<?php
require_once 'models/AdImage.php';

class AdImageController {
    // GET
    public function new() {
        // Return a page for input new book
        if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 0) {
            $book_id = $_GET['book_id'];
            require 'views/ad_images_admin_edit.php';
        } else {
            header('Location: index.php');
            exit;
        }
    }

    public function edit($id) {
        if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 0) {
            $ad_image = AdImage::find_by_id($id);
            require 'views/ad_images_admin_edit.php';
        } else {
            header('Location: index.php');
            exit;
        }
    }

    // POST
    public function create() {
        // Using AdImage model to create new additional image in db
        $ad_image = new AdImage('', $_POST['book_id'], $_POST['image']);
        if ($ad_image->create()) {
            echo "Book created successfully";
            $_SESSION['new_ad_image'] = true;
            header('Location: index.php?action=books&verb=edit&id=' . $ad_image->book_id);
            exit;
        } else {
            echo "Book creation failed";
            $_SESSION['new_ad_image'] = false;
            header('Location: index.php?action=books&verb=edit&id=' . $ad_image->book_id);
            exit;
        }
    }

    public function update() {
        $ad_image = new AdImage($_POST['id'], $_POST['book_id'], $_POST['image']);
        $_SESSION['update_ad_image'] = $ad_image->update() ? true : false;
        header('Location: index.php?action=books&verb=edit&id=' . $ad_image->book_id);
        exit;
    }

    public function destroy() {
        $id = $_POST['id'];
        $_SESSION['delete_ad_image'] = AdImage::delete($id) ? true : false;
        header('Location: index.php?action=books&verb=edit&id=' . $_POST['book_id']);
        exit;
    }
}
?>