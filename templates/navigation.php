<nav class="flex">
<img src="http://localhost/rxreachout/wp-content/uploads/2022/03/logo.webp" alt="logo" class="m-4 py-2 h-30 w-16">
<?php
wp_nav_menu(
    array(
        'menu' => 'primary',
        'container' => '',
        'theme_location' => 'primary',
        'items_wrap' => '<ul id="" class="flex ml-auto space-x-10 m-4 py-7 font-semibold text-gray-500">%3$s</ul>'
    )
);
?>
</nav>