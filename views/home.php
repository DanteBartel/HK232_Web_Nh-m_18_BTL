<?php

$array = range(0, count($books) - 1);
$random_keys = array_rand($array, 5);

$featured_idx = $random_keys[0];
require_once 'utils/parse_CSS_util.php';
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

	<meta http-equip="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" sizes="16x16">
	<script src="https://kit.fontawesome.com/20d7a8279b.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link href="assets/css/style.css" rel="stylesheet" type="text/css">
	<style>
		.fade-in {
			animation: fadeIn ease 1s;
			-webkit-animation: fadeIn ease 1s;
			-moz-animation: fadeIn ease 1s;
			-o-animation: fadeIn ease 1s;
			-ms-animation: fadeIn ease 1s;
		}

		@keyframes fadeIn {
			0% {
				opacity: 0;
			}

			100% {
				opacity: 1;
			}
		}

		@-moz-keyframes fadeIn {
			0% {
				opacity: 0;
			}

			100% {
				opacity: 1;
			}
		}

		@-webkit-keyframes fadeIn {
			0% {
				opacity: 0;
			}

			100% {
				opacity: 1;
			}
		}

		@-o-keyframes fadeIn {
			0% {
				opacity: 0;
			}

			100% {
				opacity: 1;
			}
		}

		@-ms-keyframes fadeIn {
			0% {
				opacity: 0;
			}

			100% {
				opacity: 1;
			}
		}

		.fade-out {
			animation: fadeOut ease 1s;
			-webkit-animation: fadeOut ease 1s;
			-moz-animation: fadeOut ease 1s;
			-o-animation: fadeOut ease 1s;
			-ms-animation: fadeOut ease 1s;
		}

		@keyframes fadeOut {
			0% {
				opacity: 1;
			}

			100% {
				opacity: 0;
			}
		}

		@-moz-keyframes fadeOut {
			0% {
				opacity: 1;
			}

			100% {
				opacity: 0;
			}
		}

		@-webkit-keyframes fadeOut {
			0% {
				opacity: 1;
			}

			100% {
				opacity: 0;
			}
		}

		@-o-keyframes fadeOut {
			0% {
				opacity: 1;
			}

			100% {
				opacity: 0;
			}
		}

		@-ms-keyframes fadeOut {
			0% {
				opacity: 1;
			}

			100% {
				opacity: 0;
			}
		}
	</style>
</head>

<body>

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
					<div class="text-gray-900 font-bold featured-name<?php
					parseResponsiveCSS([
						'' => ['text-2xl', 'my-4'],
						'md' => ['text-4xl', 'my-4'],
						'xl' => ['text-4xl', 'my-6'],
					]);
					?>">
						<?php echo $books[$featured_idx]->name ?>
					</div>

					<div class=" text-gray-500 featured-description<?php
					parseResponsiveCSS([
						'' => ['text-base', 'w-full', 'my-4'],
						'md' => ['text-xl', 'w-full', 'my-4'],
						'xl' => ['text-xl', 'w-3/4', 'my-6'],
					]);
					?>">
						<?php
						$text = '';
						if (mb_strlen($books[$featured_idx]->description, 'UTF-8') > 500) {
							$text = mb_substr($books[$featured_idx]->description, 0, 500, 'UTF-8') . "...";
						} else {
							$text = $books[$featured_idx]->description;
						}

						echo $text;
						?>
					</div>

					<a class="featured-link" href="index.php?action=book&id= <?php echo $books[$featured_idx]->id ?>">

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

					<img class="my-2 featured-image<?php
					parseResponsiveCSS([
						'' => ['w-1/2', 'h-auto'],
						'md' => ['w-1/2', 'h-auto'],
						'xl' => ['w-1/2', 'h-auto'],
					])
						?>" src=" <?php echo $books[$featured_idx]->image ?>" alt="Featured book" />
				</div>
			</div>

			<div class="flex justify-center">
				<progress class="featured-progress h-3 bg-gray-200 w-3/5" max="100"></progress>
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
				<!-- <div class="flex overflow-x-scroll"> -->
				<div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-4 mx-auto">

					<!-- The like button functionality -->
					<?php
					if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 1) {
						require_once 'models/Account.php';
						require_once 'utils/is_fav_book.php';

						list($httpCode, $datas) = query('GET', 'favorite_book.php', ['account_id' => $_SESSION['account_id'], 'return_type' => 'book_ids']);

						$fav_book_ids = [];
						if ($httpCode === 200) {
							$fav_book_ids = array_map(fn($data) => $data['book_id'], $datas);
						}
					}
					?>

					<!-- Parsing book cards -->

					<?php foreach ($books as $book): ?>
						<div
							class="w-4/5 md:w-full bg-white flex flex-col border border-gray-200 rounded-lg shadow mx-4 flex-none hover-fade">
							<!-- Book cover -->
							<div class="flex items-center justify-center w-auto h-3/5 rounded-lg overflow-hidden">
								<a href="index.php?action=book&id=<?php echo $book->id ?>">
									<img class="object-fill" src="<?php echo $book->image; ?>" alt="Book cover" />
								</a>
							</div>

							<!-- Book info -->
							<div class="flex-grow flex flex-col justify-between p-5">
								<div>
									<a href="index.php?action=book&id=<?php echo $book->id ?>">
										<h5 class="mb-2 font-bold tracking-tight text-gray-900 text-xl">
											<?php echo $book->name; ?>
										</h5>
									</a>
									<p class="mb-3 font-normal text-gray-500 text-base"><?php echo $book->author; ?></p>
								</div>

								<div>
									<div class="flex justify-between items-center mb-5">

										<!-- DO NOT DELETE: trick lỏd jQuery -->
										<div class="hidden"><?php echo $book->id ?></div>

										<!-- Price -->
										<span class="text-lg font-bold"><?php echo $book->price; ?>VND</span>

										<!-- SVG -->
										<button
											class="ml-auto mr-2 focus:outline-none border-heart <?php echo isset($fav_book_ids) && !is_fav_book($book->id, $fav_book_ids) ? "" : "hidden"; ?>">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
												class="h-6 w-6 fill-current text-gray-500 hover:text-red-500">
												<path fill="#81779c"
													d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z" />
											</svg>
										</button>
										<button
											class="ml-auto mr-2 focus:outline-none full-heart <?php echo isset($fav_book_ids) && is_fav_book($book->id, $fav_book_ids) ? "" : "hidden"; ?>">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
												class="h-6 w-6 fill-current text-gray-500 hover:text-red-500">
												<path fill="#81779c"
													d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" />
											</svg>
										</button>
									</div>

									<div class="flex items-center justify-center">
										<button data-id="<?php echo $book->id; ?>"
											class="inline-flex justify-center items-center px-3 py-2 text-sm font-medium text-center text-white bg-purple-700 rounded-lg hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800 book-button">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-4 h-auto mr-2">
												<path fill="white"
													d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96zM252 160c0 11 9 20 20 20h44v44c0 11 9 20 20 20s20-9 20-20V180h44c11 0 20-9 20-20s-9-20-20-20H356V96c0-11-9-20-20-20s-20 9-20 20v44H272c-11 0-20 9-20 20z" />
											</svg>
											Add to cart
										</button>
									</div>
								</div>
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

	<script>
		var randomKeys = <?php echo json_encode($random_keys); ?>;
		var books = <?php echo json_encode($books); ?>;

		var currentIndex = 0;

		function fadeOut() {
			var nameElement = document.querySelector('.featured-name');
			var descriptionElement = document.querySelector('.featured-description');
			var imageElement = document.querySelector('.featured-image');
			var linkElement = document.querySelector('.featured-link');

			nameElement.classList.remove('fade-in');
			descriptionElement.classList.remove('fade-in');
			imageElement.classList.remove('fade-in');
			linkElement.classList.remove('fade-in');

			nameElement.classList.add('fade-out');
			descriptionElement.classList.add('fade-out');
			imageElement.classList.add('fade-out');
			linkElement.classList.add('fade-out');
		}

		function fadeIn() {
			var nameElement = document.querySelector('.featured-name');
			var descriptionElement = document.querySelector('.featured-description');
			var imageElement = document.querySelector('.featured-image');
			var linkElement = document.querySelector('.featured-link');

			nameElement.classList.remove('fade-out');
			descriptionElement.classList.remove('fade-out');
			imageElement.classList.remove('fade-out');
			linkElement.classList.remove('fade-out');

			nameElement.classList.add('fade-in');
			descriptionElement.classList.add('fade-in');
			imageElement.classList.add('fade-in');
			linkElement.classList.add('fade-in');
		}

		function updateFeaturedBook() {
			// This get called, then data is process
			var book = books[randomKeys[currentIndex]];
			var nameElement = document.querySelector('.featured-name');
			var descriptionElement = document.querySelector('.featured-description');
			var imageElement = document.querySelector('.featured-image');
			var linkElement = document.querySelector('.featured-link');


			// After the transition ends, update the content and remove the 'fade' class
			fadeOut()

			setTimeout(function () {
				nameElement.textContent = book.name;
				if (book.description.length > 500) {
					descriptionElement.textContent = book.description.substring(0, 500) + "...";
				} else {
					descriptionElement.textContent = book.description.substring(0, 500);
				}
				imageElement.src = book.image;
				linkElement.href = 'index.php?action=book&id=' + book.id;

				fadeIn();
			}, 1000);

			currentIndex = (currentIndex + 1) % randomKeys.length;
			progress.value = 0;
		}


		var progress = document.querySelector('.featured-progress');

		setInterval(function () {
			progress.value += 1;
			if (progress.value >= 100) {
				updateFeaturedBook();
			}
		}
			, 50);
	</script>

	<script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.5/dist/js.cookie.min.js"></script>
	<script src="assets/js/api_url.js"></script>
	<script src="assets/js/book_card.js"></script>
	<script>

		$(document).ready(function () {
			$(".book-button").click(function () {
				var productId = $(this).data('id'); // get book id from data-id attribute
				$.post("index.php?action=cart",
					{
						id: productId
					},
					function (data, status) {
						alert("Data: " + data + "\nStatus: " + status);
					});
			});
		});

	</script>
</body>

</html>