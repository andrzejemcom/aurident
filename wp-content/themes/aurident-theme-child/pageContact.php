<?php
	/**
	 * Template Name: Kontakt
	 * @author Andrzej Mącznik Wordpress Developer
     * @link https://mhmarketing.pl
	 * @copyright Copyright (c) 2022 Aurident
	 */
?>
<?php
    get_header();
    $idPost = get_the_ID();
?>

<section class="contactPage">
    <div class="container noPad">
        <div class="contactPage-content">
            <div class="contactPage-content-information">
                <div class="contactPage-content-information-littleHeader">
                    <?php the_title();?>
                </div>
                <div class="contactPage-content-information-header">
                    <h1>
                        <?php the_field('mainTitle', $idPost);?>
                    </h1>
                </div>
                <div class="contactPage-content-information-block">
                    <div class="contactPage-content-information-block-left">
                        <div class="contactPage-content-information-block-left-header">
                            <?php the_field('leftSubtitle', $idPost);?>
                        </div>
                        <div class="contactPage-content-information-block-left-address">
                            <div class="contactPage-content-information-block-left-address-icon">
                                <?php
                                    $iconAddress = get_field('iconLeftSection', $idPost);
                                ?>
                                <img src="<?php echo $iconAddress['url'];?>" />
                            </div>
                            <div class="contactPage-content-information-block-left-address-description">
                                <?php the_field('mainAddress', $idPost);?>
                            </div>
                        </div>
                        <div class="contactPage-content-information-block-left-bank">
                            <?php the_field('bankDescription', $idPost);?>
                        </div>
                        <div class="contactPage-content-information-block-left-button">

                        </div>
                    </div>
                    <div class="contactPage-content-information-block-right">
                        <div class="contactPage-content-information-block-right-header">
                            <?php the_field('rightSubtitle', $idPost);?>
                        </div>
                        <div class="contactPage-content-information-block-right-box">
                            <div class="contactPage-content-information-block-right-box-phone">
                                <div class="contactPage-content-information-block-right-box-phone-icon">
                                    <?php
                                        $phoneIcon = get_field('iconPhone', $idPost);
                                    ?>
                                    <img src="<?php echo $phoneIcon['url'];?>" />
                                </div>
                                <div class="contactPage-content-information-block-right-box-phone-text">
                                    <a href="tel:<?php the_field('phoneNumber', $idPost);?>">
                                        <?php the_field('phoneNumber', $idPost);?>
                                    </a>
                                </div>
                            </div>
                            <div class="contactPage-content-information-block-right-box-email">
                                <div class="contactPage-content-information-block-right-box-email-icon">
                                    <?php
                                        $emailIcon = get_field('iconEmail', $idPost);
                                    ?>
                                    <img src="<?php echo $emailIcon['url'];?>" />
                                </div>
                                <div class="contactPage-content-information-block-right-box-email-text">
                                    <a href="mailto:<?php the_field('emailAddress', $idPost);?>">
                                        <?php the_field('emailAddress', $idPost);?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="contactPage-content-information-block-right-header marTop40">
                            <?php the_field('subtitleHours', $idPost);?>
                        </div>
                        <div class="contactPage-content-information-block-right-hours">
                            <div class="contactPage-content-information-block-right-hours-icon">
                                <?php
                                    $clockIcon = get_field('clockIcon', $idPost);
                                ?>
                                <img src="<?php echo $clockIcon['url'];?>" />
                            </div>
                            <div class="contactPage-content-information-block-right-hours-text">
                                <?php the_field('hoursOpen', $idPost);?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contactPage-map">
        <?php the_field('googleMap', $idPost);?>
    </div>
</section>

<?php
    get_footer();
?>
