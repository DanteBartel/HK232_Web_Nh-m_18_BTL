<?php

require_once 'models/Book.php';

class HomeController
{
	public function index()
	{
		[$books, $total_pages] = Book::page(1);
		if ($total_pages > 1) {
			[$book2, $total_pages2] = Book::page(2);
			$books = array_merge($books, $book2);
		}
		$this->render('home', ['books' => $books]);
	}

	private function render(string $view, array $data): void
	{
		// Extract function to make variables available for inclusion units
		extract($data);
		require "views/{$view}.php";
	}
}
