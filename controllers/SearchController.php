<?php

require_once 'models/Book.php';

class SearchController
{
	public function searchFor($query)
	{
		[$httpCode, $bookDatas] = query('GET', 'search.php', ['key' => $query]);
		$books = [];
		foreach ($bookDatas as $bookData) {
			$book = Book::new($bookData);
			$books[] = $book;
		}
		extract(['books' => $books]);
		require_once 'views/search.php';
	}
}