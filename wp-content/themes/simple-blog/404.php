<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package simple_blog
 */

get_header();
?>

<section class="content border-top">
    <div class="container">
        <div class="col-lg-7 col-md-7 mx-auto text-center">
        <img class="img-fluid mb-5" src="<?=get_template_directory_uri()?>/images/On-Aesthetic-404.jpg" alt="">
        <a href="/" class="btn btn_theme mx-auto">Back to home</a>
        </div>
    </div>
</section>

<?php
get_footer();
