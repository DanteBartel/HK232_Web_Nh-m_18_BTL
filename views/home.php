<?php
$featured_idx = 0;

$ids = [];
?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- SEO meta tags -->
	<meta name="description" content="Description of the webpage">
	<meta name="keywords" content="HTML, CSS, JavaScript">
	<meta name="author" content="Your Name">

	<!-- Title -->
	<title>Home Page</title>

	<!-- Tailwind CSS -->
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
	<!-- TODO: Fix the header problem -->
	<?php require 'views/header.php'; ?>
	<hr class="border-t border-gray-300">
	<div class="w-full flex justify-center">
		<div name="body" style="width: 95%;" class=" flex-col justify-center items-center">
			<!-- Featured Section: start -->
			<div class="mx-auto<?php
			parseResponsiveCSS([
				'' => ['flex-col', 'w-full', 'my-10'],
				'md' => ['flex', 'flex-row', 'w-full', 'my-20'],
				'xl' => ['flex-row', 'w-5/6', 'my-30']
			]);
			?>">
				<!-- Left description  -->
				<div class="sm:w-full md:w-1/2 xl:w-1/2">
					<div class="text-gray-900 font-bold<?php
					parseResponsiveCSS([
						'' => ['text-2xl', 'my-4'],
						'md' => ['text-4xl', 'my-4'],
						'xl' => ['text-4xl', 'my-6'],
					]);
					?>">
						<!-- Eric-Emanuel Schmitt -->
						<?php echo $books[$featured_idx]->name ?>
					</div>
					<div class=" text-gray-500<?php
					parseResponsiveCSS([
						'' => ['text-base', 'w-full', 'my-4'],
						'md' => ['text-xl', 'w-full', 'my-4'],
						'xl' => ['text-xl', 'w-3/4', 'my-6'],
					]);
					?>">
						<!-- Eric-Emmanuel Schmitt has been awarded more than 20 literary prizes and distinctions, and in 2001 he
						received the title of Chevalier des Arts et des Lettres. His books have been translated into over 40
						languages. -->
						<?php echo $books[$featured_idx]->description ?>
					</div>
					<a href="index.php?action=book&id=<?php echo $books[$featured_idx]->id ?>">
						<button type="button" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900
						<?php
						parseResponsiveCSS([
							'' => ['my-4'],
							'md' => ['my-4'],
							'xl' => ['my-6'],
						]);
						?>">
							View his books
						</button>
					</a>
				</div>

				<!-- Right cover -->
				<div class="sm:w-full md:w-1/2 xl:w-1/2 flex items-center justify-center">
					<img class="my-2<?php
					parseResponsiveCSS([
						'' => ['w-1/2', 'h-auto'],
						'md' => ['w-1/2', 'h-auto'],
						'xl' => ['w-1/2', 'h-auto'],
					])
						?>" src="<?php echo $books[$featured_idx]->image ?>" alt="Featured book" />
				</div>
			</div>
			<!-- Featured Section: end -->

			<!-- You must buy it now: start -->
			<div class="mx-auto mt-40 <?php
			parseResponsiveCSS([
				'' => ['w-full'],
				'md' => ['w-full'],
				'xl' => ['w-5/6']
			]);
			?>">
				<!-- Section title -->

				<div class="font-bold<?php
				parseResponsiveCSS([
					'' => ['text-xl', 'my-4'],
					'md' => ['text-3xl', 'my-4'],
					'xl' => ['text-3xl', 'my-6'],
				]);
				?>">You must buy it now</div>
				<!-- Carousel of cards -->


				<div class="flex overflow-x-scroll">
					<!-- Card -->
					<div class="bg-white border border-gray-200 rounded-lg shadow mx-4 flex-none<?php
					parseResponsiveCSS([
						'' => ['w-3/5', 'min-w-3/5'],
						'md' => ['w-1/4', 'min-w-1/4'],
						'xl' => ['w-1/5', 'min-w-1/5']
					]);
					?>">
						<!-- Book cover -->
						<a href="#">
							<img class="rounded-t-lg" src="assets/img/alt.jpg" alt="" />
						</a>

						<!-- Book info -->
						<div class="p-5">
							<a href="#">
								<h5 class="mb-2 font-bold tracking-tight text-gray-900 text-xl
								">The vanishing act</h5>
							</a>
							<p class="mb-3 font-normal text-gray-500 text-base">Tori Dunlap</p>
							<div class="flex justify-between items-center mb-5">
								<span class="text-lg font-bold">$20.00</span> <!-- Price -->
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-auto"> <!-- SVG -->
									<path fill="white" stroke="purple" stroke-width="20"
										d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" />
								</svg>
							</div>

							<a href="#"
								class="inline-flex justify-center items-center px-3 py-2 text-sm font-medium text-center text-white bg-purple-700 rounded-lg hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-4 h-auto mr-2">
									<path fill="white"
										d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96zM252 160c0 11 9 20 20 20h44v44c0 11 9 20 20 20s20-9 20-20V180h44c11 0 20-9 20-20s-9-20-20-20H356V96c0-11-9-20-20-20s-20 9-20 20v44H272c-11 0-20 9-20 20z" />
								</svg>
								Add to cart
							</a>
						</div>
					</div>

					<?php foreach ($books as $book): ?>
						<div class="bg-white border border-gray-200 rounded-lg shadow mx-4 flex-none<?php
						parseResponsiveCSS([
							'' => ['w-3/5'],
							'md' => ['w-1/4'],
							'xl' => ['w-1/5']
						]);
						?>">
							<!-- Book cover -->
							<a href="index.php?action=book&id=<?php echo $book->id ?>">
								<img class="rounded-t-lg" src="<?php echo $book->image; ?>" alt="" />
							</a>

							<!-- Book info -->
							<div class="p-5">
								<a href="#">
									<h5 class="mb-2 font-bold tracking-tight text-gray-900 text-xl">
										<?php echo $book->name; ?>
									</h5>
								</a>
								<p class="mb-3 font-normal text-gray-500 text-base"><?php echo $book->author; ?></p>
								<div class="flex justify-between items-center mb-5">
									<span class="text-lg font-bold">$<?php echo $book->price; ?></span> <!-- Price -->
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-auto"> <!-- SVG -->
										<path fill="white" stroke="purple" stroke-width="20"
											d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" />
									</svg>
								</div>

								<a href="#"
									class="inline-flex justify-center items-center px-3 py-2 text-sm font-medium text-center text-white bg-purple-700 rounded-lg hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-4 h-auto mr-2">
										<path fill="white"
											d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96zM252 160c0 11 9 20 20 20h44v44c0 11 9 20 20 20s20-9 20-20V180h44c11 0 20-9 20-20s-9-20-20-20H356V96c0-11-9-20-20-20s-20 9-20 20v44H272c-11 0-20 9-20 20z" />
									</svg>
									Add to cart
								</a>
							</div>
						</div>
					<?php endforeach; ?>

				</div>

			</div>
			<!-- You must buy it now: end -->

			<!-- Did you know us: start -->
			<div class="my-20 mx-auto<?php
			parseResponsiveCSS([
				'' => ['flex-col', 'w-full'],
				'md' => ['flex', 'flex-row'],
				'xl' => ['flex-row']
			]);
			?>">
				<div class="w-full md:p-4 xl:w-1/2">
					<div class="text-gray-900 font-bold<?php
					parseResponsiveCSS([
						'' => ['text-2xl', 'my-4'],
						'md' => ['text-4xl', 'my-4'],
						'xl' => ['text-4xl', 'my-6'],
					]);
					?>">
						Did you know us?
					</div>
					<div class=" text-gray-500<?php
					parseResponsiveCSS([
						'' => ['text-base', 'w-full', 'my-4'],
						'md' => ['text-xl'],
						'xl' => ['text-xl', 'my-6'],
					]);
					?>">
						We are about books and our purpose is to show you the book who can chage your life or distract you from the
						real world în a better one. BWorld works with the must popular publishs just for your delight.
						If you are about books, you must to subscribe to our newsletter.
					</div>
					<form class="my-4">
						<div class="relative z-0 w-full mb-5 group">
							<input type="name" name="floating_name" id="floating_name"
								class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
								placeholder=" " />
							<label for="floating_name"
								class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Your
								name</label>
						</div>
						<div class="relative z-0 w-full mb-5 group">
							<input type="email" name="floating_email" id="floating_email"
								class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
								placeholder=" " required />
							<label for="floating_email"
								class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email
								address</label>
						</div>
						<button type="button" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900
						<?php
						parseResponsiveCSS([
							'' => ['my-4'],
							'md' => ['my-4'],
							'xl' => ['my-6'],
						]);
						?>">
							Subscribe
						</button>
					</form>
				</div>
				<div class="w-full md:p-4 rounded-lg-4 xl:w-1/2 flex justify-center">
					<img src="assets/img/map/embedding_location.png" alt="map" />

				</div>
			</div>

			<!-- Did you know us: end -->

		</div>
	</div>
	<hr class=" border-t border-gray-300">
	<?php require 'views/footer.php'; ?>
</body>

</html>

<?php
function parseResponsiveCSS(array $css): void
{
	foreach ($css as $key => $value) {
		foreach ($value as $e) {
			echo ' ' . $key . ($key !== '' ? ':' : '') . $e;
		}
	}
}
?>