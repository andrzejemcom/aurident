<?php
	/**
	 * Template Name: O nas
	 * @author Andrzej Mącznik Wordpress Developer
     * @link https://mhmarketing.pl
	 * @copyright Copyright (c) 2022 Aurident
	 */
?>
<?php
    get_header();
    $idPost = get_the_ID();
?>

<section class="sliderTop">
    <div class="leftContactBlock">
        <div class="leftContactBlock-box">
            <?php
                while(have_rows('contactSocial','options')):the_row();
                $link = get_sub_field('linkSocial');
            ?>
                <div class="leftContactBlock-box-social">
                    <a href="<?php echo $link['url'];?>" class="leftContactBlock-box-social-link">
                        <?php the_sub_field('iconSocial');?>
                    </a>
                </div>
            <?php
                endwhile;
            ?>
        </div>
    </div>
    <div class="sliderTop-content">
        <div class="swiper-container sliderMainPage">
            <div class="swiper-wrapper">
                <?php
                    while(have_rows('sliderAboutUs', $idPost)):the_row();
                    $image = get_sub_field('imageToSlider');
                    $button = get_sub_field('linkToSlider');
                ?>
                    <div class="swiper-slide">
                        <div class="sliderTop-content-block">
                            <div class="ellipseSlider">
                                <img src="<?php the_field('ellipseSlider', 'options');?>" />
                            </div>
                            <div class="backgroundSlider"></div>
                            <div class="sliderTop-content-block-image">
                                <img src="<?php echo $image['url'];?>" />
                            </div>
                            <div class="sliderTop-content-block-box">
                                <div class="sliderTop-content-block-box-text">
                                    <?php the_sub_field('headerToSlider');?>
                                </div>
                                <div class="sliderTop-content-block-box-description">
                                    <?php the_sub_field('shortDescription');?>
                                </div>
                                <div class="sliderTop-content-block-box-button">
                                    <a href="<?php echo $button['url'];?>" class="buttonOne">
                                        Nasze usługi
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    endwhile;
                ?>
            </div>
            <div class="sliderTop-content-swiperNavigation">
                <div class="sliderTop-content-swiperNavigation-navigation">
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="whatWeDoAboutUsPage">
    <div class="whatWeDoAboutUsPage-bcg">
        <div class="whatWeDoAboutUsPage-left">
            <div class="whatWeDoAboutUsPage-left-image">
                <?php
                    $imageSliderAboutUs = get_field('imageLeftBlock', $idPost);
                ?>
                <img src="<?php echo $imageSliderAboutUs['url'];?>" />
            </div>
        </div>
        <div class="whatWeDoAboutUsPage-right">
            <div class="whatWeDoAboutUsPage-right-header">
                <h1>
                    <?php the_field('headerSectionWhatWeDo', $idPost);?>
                </h1>
            </div>
            <div class="whatWeDoAboutUsPage-right-description">
                <?php the_field('shortDescriptionSectionWhatWeDo', $idPost);?>
            </div>
            <div class="whatWeDoAboutUsPage-right-button">
                <?php
                    $linkButtonWhatWeDo = get_field('linkButtonWhatWeDo');
                ?>
                <a href="<?php echo $linkButtonWhatWeDo['url'];?>" class="buttonBlue">
                    <?php echo $linkButtonWhatWeDo['title'];?>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="ourStrengths">
    <div class="container">
        <div class="ourStrengths-block">
            <div class="ourStrengths-block-header">
                <h2>
                    <?php the_field('ourStrengthsHeader', $idPost); ?>
                </h2>
            </div>
            <div class="ourStrengths-block-list">
                <?php
                    while(have_rows('ourStrengthsBlocks', $idPost)):the_row();
                    $imageBlock = get_sub_field('imageToBlock');
                    $headerBlock = get_sub_field('headerToBlock');
                    $shortDescription = get_sub_field('shortDescriptionToBlock');
                    $linkToBlock = get_sub_field('linkToBlock');
                ?>
                <div class="ourStrengths-block-list-box">
                    <div class="ourStrengths-block-list-box-image">
                        <img src="<?php echo $imageBlock['url'];?>" />
                    </div>
                    <div class="ourStrengths-block-list-box-header">
                        <?php echo $headerBlock;?>
                    </div>
                    <div class="ourStrengths-block-list-box-description">
                        <?php echo $shortDescription;?>
                    </div>
                    <div class="ourStrengths-block-list-box-button">
                        <a href="<?php echo $linkToBlock['url'];?>" class="buttonWhite">
                            <?php echo $linkToBlock['title'];?>
                        </a>
                    </div>
                </div>
                <?php
                    endwhile;
                ?>
            </div>
            <div class="ourStrengths-block-listMobile">
                <div class="swiper-container ourStrengthsSlider">
                    <div class="swiper-wrapper">
                        <?php
                            while(have_rows('ourStrengthsBlocks', $idPost)):the_row();
                            $imageBlock = get_sub_field('imageToBlock');
                            $headerBlock = get_sub_field('headerToBlock');
                            $shortDescription = get_sub_field('shortDescriptionToBlock');
                            $linkToBlock = get_sub_field('linkToBlock');
                        ?>
                            <div class="swiper-slide">
                                <div class="ourStrengths-block-listMobile-box">
                                    <div class="ourStrengths-block-listMobile-box-image">
                                        <img src="<?php echo $imageBlock['url'];?>" />
                                    </div>
                                    <div class="ourStrengths-block-listMobile-box-header">
                                        <?php echo $headerBlock;?>
                                    </div>
                                    <div class="ourStrengths-block-listMobile-box-description">
                                        <?php echo $shortDescription;?>
                                    </div>
                                    <div class="ourStrengths-block-listMobile-box-button">
                                        <a href="<?php echo $linkToBlock['url'];?>" class="buttonWhite">
                                            <?php echo $linkToBlock['title'];?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php
                            endwhile;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ourTeamSlider">
    <div class="ourTeamSlider-header">
        <?php
            $checkIsActive = get_field('activeOutTeamMainPage', $idPost);
        ?>
        <h3>
            <?php the_field('ourTeamSliderHeader', $idPost);?>
        </h3>
    </div>
    <div class="ourTeamSlider-content">
        <div class="ourTeamSlider-content-block">
            <div class="swiper-container" id="ourTeamSlider">
                <div class="swiper-wrapper">
                    <?php
                        while(have_rows('ourTeamSlider','options')):the_row();
                        $image = get_sub_field('imagePersonOfTeam');
                    ?>
                        <div class="swiper-slide">
                            <div class="ourTeamSlider-content-block-box">
                                <div class="ourTeamSlider-content-block-box-image">
                                    <img src="<?php echo $image['url'];?>" />
                                </div>
                                <div class="ourTeamSlider-content-block-box-title">
                                    <?php the_sub_field('nameLastName');?>
                                </div>
                                <div class="ourTeamSlider-content-block-box-profession">
                                    <?php the_sub_field('specialization');?>
                                </div>
                            </div>
                        </div>
                    <?php
                        endwhile;
                    ?>
                </div>
            </div>
            <div class="ourTeamSlider-content-block-swiperNavigation">
                <div class="ourTeamSlider-content-block-swiperNavigation-navigation">
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="aboutUsBlock">
    <div class="aboutUsBlock-bcg">
        <div class="aboutUsBlock-bcg-circle">
            <img src="<?php the_field('ellipseLastSectionAboutUsPage', 'options');?>" />
        </div>
    </div>
    <div class="container">
        <div class="aboutUsBlock-content">
            <div class="aboutUsBlock-content-left">
                <?php
                    $imageOneAboutUs = get_field('imageOneLeftBox',$idPost);
                    $imageTwoAboutUs = get_field('imageTwoLeftBox', $idPost);
                    $headerAboutUsBox = get_field('headerRightBox', $idPost);
                    $descriptionAboutUsBox = get_field('descriptionRightBox', $idPost);
                ?>
                <div class="aboutUsBlock-content-left-imageOne">
                    <img src="<?php echo $imageOneAboutUs['url'];?>" />
                </div>
                <div class="aboutUsBlock-content-left-imageTwo">
                    <img src="<?php echo $imageTwoAboutUs['url'];?>" />
                </div>
            </div>
            <div class="aboutUsBlock-content-right">
                <div class="aboutUsBlock-content-right-block">
                    <div class="aboutUsBlock-content-right-block-header">
                        <?php echo $headerAboutUsBox;?>
                    </div>
                    <div class="aboutUsBlock-content-right-block-description">
                        <?php echo $descriptionAboutUsBox;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    get_footer();
?>
