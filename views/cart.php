<?php
require_once 'views/header.php';
require_once 'models/Book.php';

if (isset($_COOKIE[$current_user])) {

	$myArray = unserialize($_COOKIE[$current_user]);

	// echo "<br/>";

	// foreach ($myArray as $id) {
	// 	echo $id . "<br/>";
	// }

	[$httpCode, $bookDatas] = query('POST', 'cart_books.php', ['data' => $myArray]);
	$books = [];
	foreach ($bookDatas as $data) {
		$books[] = Book::new($data);
	}
	?>
	<table class="mt-4 min-w-full mr-2">
		<thead>
			<tr>
				<th class="text-center min-w-12 border-2 border-gray-400">ID</th>
				<th class="text-center min-w-12 border-2 border-gray-400">Image</th>
				<th class="text-center min-w-12 md:min-w-32 border-2 border-gray-400">Name</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$idx = 0;
			foreach ($books as $book): ?>
				<tr>
					<td class="text-center border-2 border-gray-400"><?php echo $idx; ?></td>
					<td class="w-1/6">
						<img class="flex items-center justify-center w-auto h-auto rounded-lg overflow-hidden object-fill"
							src="<?php echo $book->image ?>" alt="Book Image" />
					</td>
					<td class="text-center border-2 border-gray-400"><?php echo $book->name; ?></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
	<?php
} else {
	echo "You have no item in this cart";
}

require_once 'views/footer.php';
?>