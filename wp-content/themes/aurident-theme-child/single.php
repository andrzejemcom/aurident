<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package aurident
 */

get_header();
?>

<section class="singlePost">

    <?php
        while(have_posts()):
            the_post();
            get_template_part('template-parts/content', 'post', get_post_type());
        endwhile;
    ?>

</section>


<?php
    get_footer();
