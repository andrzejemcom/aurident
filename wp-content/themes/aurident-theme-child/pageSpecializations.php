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
                    <?php the_field('littleHeader', $idPost);?>
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
                    <a href="<?php echo $linkButton['url'];?>" class="buttonBlue" id="registrationOnline" onclick="showModalRegistration()">
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

<?php
    $activeSectionTwo = get_field('sectionTwoActive', $idPost);
    if($activeSectionTwo[0] == 'yes'):
?>
    <section class="greySection">
        <div class="container noPad">
            <div class="greySection-content">
                <div class="greySection-content-left">
                    <div class="greySection-content-left-header">
                        <?php the_field('leftHeaderSectionTwo', $idPost);?>
                    </div>
                    <div class="greySection-content-left-description">
                        <?php the_field('descriptionSectionTwo', $idPost); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="greySection-image">
            <?php
                $imageSectionTwo = get_field('imageRightBox', $idPost);
            ?>
            <img src="<?php echo $imageSectionTwo['url'];?>" />
        </div>
    </section>
<?php
    endif;
?>

<?php
    $activeSectionThree = get_field('mainDescriptionActive', $idPost);
    if($activeSectionThree[0] == 'yes'):
?>
    <section class="mainDescriptionSpecialization">
        <div class="container">
            <div class="mainDescriptionSpecialization-content">
                <?php the_field('mainDescriptionContent', $idPost);?>
            </div>
        </div>
    </section>
<?php
    endif;
?>

<?php get_footer(); ?>
