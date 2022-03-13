<?php
	/**
	 * Template Name: Cennik
	 * @author Andrzej Mącznik Wordpress Developer
     * @link https://mhmarketing.pl
	 * @copyright Copyright (c) 2022 Aurident
	 */
?>
<?php
    get_header();
    $idPost = get_the_ID();
?>

<section class="pricesPage">
    <div class="container noPad">
        <div class="pricesPage-content">
            <div class="pricesPage-content-header">
                <h1>
                    <?php the_title();?>
                </h1>
            </div>
            <div class="pricesPage-content-list">
                
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>
