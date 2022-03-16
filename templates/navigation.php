<nav class="flex">
<?php

    if(function_exists('the_custom_logo')){
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id );
    }

?>

<img src="<?php echo $logo[0] ?>" alt="logo" class="m-4 py-2 h-30 w-16">

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