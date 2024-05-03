<?php
// Status of position of page
$is_start_page = $page == 1 ? true : false;
$is_end_page = $page == $total_pages ? true : false;
$is_only_page = $is_start_page&&$is_end_page;

// Calculate number of fill left
$fill_left_num = $page - 1 - 1;
if ($fill_left_num > 2) {
    $left_3dot = true;
    $fill_left_num = 2;
} else {
    $left_3dot = false;
}

// Calculate number of fill right
$fill_right_num = $total_pages - $page - 1;
if ($fill_right_num > 2) {
    $right_3dot = true;
    $fill_right_num = 2;
} else {
    $right_3dot = false;
}
?>

<nav class="flex pt-5" aria-label="Page navigation example">
    <ul class="mx-auto flex items-center -space-x-px h-8 text-sm">
        <!-- ------------------------------------------------------ Previous button -->
        <li>
            <a href="index.php?action=<?php echo $_GET['action']; ?>&page=<?php echo $page - 1; ?>" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg<?php echo $is_start_page ? " pointer-events-none" : " hover:bg-gray-100 hover:text-gray-700" ?>">
                <span class="sr-only">Previous</span>
                <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
            </a>
        </li>

        <!-- ------------------------------------------------------ List of pages -->
        <!-- Start page -->
        <?php if ($is_start_page) { ?>
        <li>
            <a href="#" aria-current="page" class="z-10 flex items-center justify-center px-3 h-8 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700">1</a>
        </li>
        <?php } else { ?>
        <li>
            <a href="index.php?action=<?php echo $_GET['action']; ?>&page=1" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">1</a>
        </li>
        <?php } ?>

        <!-- Fill left page -->
        <?php if ($left_3dot) { ?>
        <li>
            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">...</a>
        </li>
        <?php } ?>
        <?php while ($fill_left_num > 0) { ?>
            <li>
                <a href="index.php?action=<?php echo $_GET['action']; ?>&page=<?php echo $page - $fill_left_num; ?>" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700"><?php echo $page - $fill_left_num; ?></a>
            </li>
            <?php $fill_left_num -= 1; ?>
        <?php } ?>

        <!-- Current page -->
        <?php if (!$is_start_page&&!$is_end_page) { ?>
        <li>
            <a href="#" aria-current="page" class="z-10 flex items-center justify-center px-3 h-8 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700"><?php echo $page; ?></a>
        </li>
        <?php } ?>

        <!-- Fill right page -->
        <?php $right_counter = 1; ?>
        <?php while ($fill_right_num > 0) { ?>
            <li>
                <a href="index.php?action=<?php echo $_GET['action']; ?>&page=<?php echo $page + $right_counter; ?>" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700"><?php echo $page + $right_counter; ?></a>
            </li>
            <?php $right_counter += 1; ?>
            <?php $fill_right_num -= 1; ?>
        <?php } ?>
        <?php if ($right_3dot) { ?>
        <li>
            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">...</a>
        </li>
        <?php } ?>

        <!-- End page -->
        <?php if (!$is_only_page&&$is_end_page) { ?>
        <li>
            <a href="#" aria-current="page" class="z-10 flex items-center justify-center px-3 h-8 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700"><?php echo $total_pages; ?></a>
        </li>
        <?php } else if (!$is_only_page&&!$is_end_page) { ?>
        <li>
            <a href="index.php?action=<?php echo $_GET['action']; ?>&page=<?php echo $total_pages; ?>" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700"><?php echo $total_pages; ?></a>
        </li>
        <?php } ?>

        <!-- ------------------------------------------------------ Next button -->
        <li>
            <a href="index.php?action=<?php echo $_GET['action']; ?>&page=<?php echo $page + 1; ?>" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg<?php echo $is_end_page ? " pointer-events-none" : " hover:bg-gray-100 hover:text-gray-700" ?>">
                <span class="sr-only">Next</span>
                <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
            </a>
        </li>
    </ul>
</nav>