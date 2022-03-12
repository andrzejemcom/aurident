<?php
	/**
	 * Template Name: Specjalizacje
	 * @author Andrzej Mącznik Wordpress Developer
     * @link https://mhmarketing.pl
	 * @copyright Copyright (c) 2022 Aurident
	 */
?>
<?php
    get_header();
    $idPost = get_the_ID();
    $url = get_site_url();
?>

<section class="heroSpecializations">
    <div class="container noPad">
        <div class="heroSpecializations-content">
            <div class="heroSpecializations-content-left">
                <div class="heroSpecializations-content-left-littleHeader">
                    Usługi
                </div>
                <div class="heroSpecializations-content-left-header">
                    <h1>
                        <?php the_title();?>
                    </h1>
                </div>
                <div class="heroSpecializations-content-left-description">
                    <?php the_field('shortDescription', $idPost);?>
                </div>
                <div class="heroSpecializations-content-left-button">
                    <?php
                        $linkButton = get_field('linkButtonHero', $idPost);
                    ?>
                    <a href="<?php echo $linkButton['url'];?>" class="buttonBlue">
                        <?php echo $linkButton['title'];?>
                    </a>
                </div>
            </div>
            <div class="heroSpecializations-content-right">
                <div class="heroSpecializations-content-right-image">
                    <?php
                        $image = get_field('imageHeroTop', $idPost);
                    ?>
                    <img src="<?php echo $image['url']; ?>" />
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
