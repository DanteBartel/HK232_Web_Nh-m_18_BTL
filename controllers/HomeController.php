<?php

require_once 'models/Book.php';

class HomeController
{
	public function index()
	{
		$books = Book::all();
		$this->render('home', ['books' => $books]);
	}

	private function render(string $view, array $data): void
	{
		// Extract function to make variables available for inclusion units
		extract($data);
		require "views/{$view}.php";
	}
}
