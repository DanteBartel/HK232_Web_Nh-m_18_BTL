<?php
// import method query
require_once 'models/query.php';

class AdImage {
    // Attributes
    public $id;
    public $book_id;
    public $image;

    // Ultilitys
    public function __construct($id, $book_id, $image) {
        $this->id = $id;
        $this->book_id = $book_id;
        $this->image = $image;
    }

    public function data() {
        return ["id" => $this->id, "book_id" => $this->book_id, "image" => $this->image];
    }

    // Create
    public static function new($data) {
        $id = isset($data['id']) ? $data['id'] : '';
        $book_id = isset($data['book_id']) ? $data['book_id'] : '';
        $image = isset($data['image']) ? $data['image'] : '';
        $ad_image = new AdImage($id, $book_id, $image);
        return $ad_image;
    }

    public function create() {
        list($httpCode, $datas) = query('POST', 'ad_images.php', $this->data());
        if ($httpCode == 201) { return true; } else { return false; }
    }

    // Read
    public static function find_by_book_id($book_id) {
        $ad_images = [];
        list($httpCode, $datas) = query('GET', 'ad_images.php', ['book_id' => $book_id]);
        foreach ($datas as $data) {
            $ad_image = AdImage::new($data);
            $ad_images[] = $ad_image;
        }
        return $ad_images;
    }

    public static function find_by_id($id) {
        list($httpCode, $data) = query('GET', 'ad_images.php', ['id' => $id]);
        $ad_image = AdImage::new($data);
        return $ad_image;
    }

    // Update
    public function update() {
        list($httpCode, $datas) = query('PUT', 'ad_images.php', $this->data());
        if ($httpCode == 200) { return true; } else { return false; }
    }

    // Delete
    public static function delete($id) {
        list($httpCode, $bookDatas) = query('DELETE', 'ad_images.php', ['id' => $id]);
        if ($httpCode == 204) { return true; } else { return false; }
    }
}
?>