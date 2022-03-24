<?php
	/**
	 * Template Name: Strona Główna
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
                        while(have_rows('sliderMainPage', $idPost)):the_row();
                        $image = get_sub_field('imageToSlider');
                        $button = get_sub_field('linkToSlider');
                    ?>
                        <div class="swiper-slide">
                            <div class="sliderTop-content-block">
                                <div class="ellipseSlider">
                                    <img src="<?php the_field('ellipseSlider', 'options');?>" loading="lazy" />
                                </div>
                                <div class="backgroundSlider"></div>
                                <div class="sliderTop-content-block-image">
                                    <img src="<?php echo $image['url'];?>" loading="lazy" />
                                </div>
                                <div class="sliderTop-content-block-box">
                                    <div class="sliderTop-content-block-box-text">
                                        <?php the_sub_field('headerToSlider');?>
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

    <section class="whyWe">
        <div class="whyWe-bcg">
            <div class="container">
                <div class="whyWe-bcg-content">
                    <div class="whyWe-bcg-content-fullMobile">
                        <?php
                            $imageOne = get_field('imageOneSectionTwo', $idPost);
                            $imageTwo = get_field('imageTwoSectionTwo', $idPost);
                        ?>
                        <div class="whyWe-bcg-content-fullMobile-imageOne">
                            <img src="<?php echo $imageOne['url']; ?>" loading="lazy"/>
                        </div>
                        <div class="whyWe-bcg-content-fullMobile-imageTwo">
                            <img src="<?php echo $imageTwo['url']; ?>" loading="lazy"/>
                        </div>
                    </div>
                    <div class="whyWe-bcg-content-left">
                        <div class="whyWe-bcg-content-left-header">
                            <h2>
                                <?php the_field('sectionTwoTitle', $idPost);?>
                            </h2>
                        </div>
                        <div class="whyWe-bcg-content-left-content">
                            <?php
                                while(have_rows('whyWeRepeater', $idPost)):the_row();
                            ?>
                                <div class="whyWe-bcg-content-left-content-box">
                                    <div class="whyWe-bcg-content-left-content-box-icon">
                                        <?php echo file_get_contents(''.$url.'/wp-content/themes/aurident-theme-child/svg/tooth.svg'); ?>
                                    </div>
                                    <div class="whyWe-bcg-content-left-content-box-text">
                                        <?php the_sub_field('textToList');?>
                                    </div>
                                </div>
                            <?php
                                endwhile;
                            ?>
                        </div>
                        <div class="whyWe-bcg-content-left-button">
                            <?php
                                $buttonWhyWe = get_field('linkWhyWe', $idPost);
                            ?>
                            <a href="<?php echo $buttonWhyWe['url'];?>" class="buttonBlue">
                                <?php echo $buttonWhyWe['title'];?>
                            </a>
                        </div>
                    </div>
                    <div class="whyWe-bcg-content-right">
                        <div class="whyWe-bcg-content-right-imageOne">
                            <img src="<?php echo $imageOne['url'];?>" loading="lazy" />
                        </div>
                        <div class="whyWe-bcg-content-right-imageTwo">
                            <img src="<?php echo $imageTwo['url'];?>" loading="lazy"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="whatWeDo">
        <div class="container">
            <div class="whatWeDo-content">
                <div class="whatWeDo-content-header">
                    <h3>
                        <?php the_field('sectionThreeTitle', $idPost);?>
                    </h3>
                </div>
                <div class="whatWeDo-content-block">
                    <?php
                        while(have_rows('sectionThreeBlocks', $idPost)):the_row();
                        $link = get_sub_field('linkWhatWeDo');
                        $text = get_sub_field('titleWhatWeDo');
                        $icon = get_sub_field('iconWhatWeDo');
                    ?>
                        <a href="<?php echo $link['url'];?>">
                            <div class="whatWeDo-content-block-box">
                                <div class="whatWeDo-content-block-box-icon">
                                    <?php echo $icon;?>
                                </div>
                                <div class="whatWeDo-content-block-box-text">
                                    <?php echo $text;?>
                                </div>
                                <div class="whatWeDo-content-block-box-arrowDown">
                                    <?php echo file_get_contents(''.$url.'/wp-content/themes/aurident-theme-child/svg/arrow-right.svg'); ?>
                                </div>
                            </div>
                        </a>
                    <?php
                        endwhile;
                    ?>
                </div>
                <div class="whatWeDo-content-mobileBlock">
                    <div class="swiper-container whatWeDoSliderMainPage">
                        <div class="swiper-wrapper">
                            <?php
                                while(have_rows('sectionThreeBlocks', $idPost)):the_row();
                                $linkMobile = get_sub_field('linkWhatWeDo');
                                $textMobile = get_sub_field('titleWhatWeDo');
                                $iconMobile = get_sub_field('iconWhatWeDo');
                            ?>
                                <div class="swiper-slide">
                                    <a href="<?php echo $linkMobile['url'];?>">
                                        <div class="whatWeDo-content-mobileBlock-box">
                                            <div class="whatWeDo-content-mobileBlock-box-icon">
                                                <?php echo $iconMobile;?>
                                            </div>
                                            <div class="whatWeDo-content-mobileBlock-box-text">
                                                <?php echo $textMobile; ?>
                                            </div>
                                            <div class="whatWeDo-content-mobileBlock-box-arrowDown">
                                                <?php echo file_get_contents(''.$url.'/wp-content/themes/aurident-theme-child/svg/arrow-right.svg'); ?>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php
                                endwhile;
                            ?>
                        </div>
                    </div>
                    <div class="whatWeDo-content-mobileBlock-swiperNavigation">
                        <div class="whatWeDo-content-mobileBlock-swiperNavigation-navigation">
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="aboutUsMainPage">
        <div class="aboutUsMainPage-bcg">
            <div class="container">
                <div class="aboutUsMainPage-bcg-content">
                    <div class="aboutUsMainPage-bcg-content-left">
                        <?php
                            $imageAboutUsMainPage = get_field('imageAboutUsMainPage', $idPost);
                            if(!empty($imageAboutUsMainPage)):
                        ?>
                            <div class="aboutUsMainPage-bcg-content-left-image">
                                <img src="<?php echo $imageAboutUsMainPage['url'];?>" loading="lazy"/>
                            </div>
                        <?php
                            endif;
                        ?>
                    </div>
                    <div class="aboutUsMainPage-bcg-content-right">
                        <div class="aboutUsMainPage-bcg-content-right-header">
                            <h3>
                                <?php the_field('headerAboutUsMainPage', $idPost); ?>
                            </h3>
                        </div>
                        <div class="aboutUsMainPage-bcg-content-right-description">
                            <?php the_field('descriptionAboutUsMainPage', $idPost);?>
                        </div>
                        <div class="aboutUsMainPage-bcg-content-right-button">
                            <?php
                                $linkAboutUsMainPage = get_field('linkButtonAboutUsMainPage', $idPost);
                            ?>
                            <a href="<?php echo $linkAboutUsMainPage['url'];?>" class="buttonBlue">
                                <?php echo $linkAboutUsMainPage['title'];?>
                            </a>
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
                                        <img src="<?php echo $image['url'];?>" loading="lazy"/>
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

    <section class="metamorphosisMainPage">
        <div class="metamorphosisMainPage-left">
            <div class="metamorphosisMainPage-left-image" id="imageHeight">
                <?php
                    $imageMetamorphosis = get_field('imageMetamorphosisMainPage', $idPost);
                ?>
                <img src="<?php echo $imageMetamorphosis['url'];?>" loading="lazy"/>
            </div>
        </div>
        <div class="metamorphosisMainPage-right">
            <div class="metamorphosisMainPage-right-bcg">
                <div class="metamorphosisMainPage-right-bcg-circle">
                    <img src="/wp-content/uploads/2022/02/Mask-Group-1.png  " loading="lazy"/>
                </div>
                <div class="metamorphosisMainPage-right-bcg-block">
                    <div class="metamorphosisMainPage-right-bcg-block-header">
                        <h3>
                            <?php the_field('headerMetamorphosisMainPage', $idPost); ?>
                        </h3>
                    </div>
                    <div class="metamorphosisMainPage-right-bcg-block-text">
                        <?php the_field('descriptionMetamorphosisMainPage', $idPost);?>
                    </div>
                    <div class="metamorphosisMainPage-right-bcg-block-button">
                        <?php
                            $linkMetamorphosis = get_field('linkMetamorphosisMainPage', $idPost);
                        ?>
                        <a href="<?php echo $linkMetamorphosis['url'];?>" class="buttonMetamorphosis">
                            <?php echo $linkMetamorphosis['title'];?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- LATEST POSTS -->
    <section class="latestPosts">
        <div class="container">
            <div class="latestPosts-block">
                <div class="latestPosts-block-top">
                    <div class="latestPosts-block-top-header">
                        <h3>
                            <?php the_field('latestPostsHeaderMainPage', $idPost);?>
                        </h3>
                    </div>
                    <div class="latestPosts-block-top-button">
                        <?php
                            $linkLatestPostsMainPage = get_field('linkLatestPostsMainPage', $idPost);
                        ?>
                        <a href="<?php echo $linkLatestPostsMainPage['url'];?>" class="buttonBlue">
                            <?php echo $linkLatestPostsMainPage['title'];?>
                        </a>
                    </div>
                </div>
                <div class="latestPosts-block-content">
                    <?php
                        $getCategoryId = get_field('categoryPrintId', $idPost);
                        $getCategoryIdInt = intval($getCategoryId[0]);
                        $latestPosts = new WP_Query(array('cat' => $getCategoryIdInt, 'posts_per_page' => 3, 'order' => 'DESC'));
                        if($latestPosts->have_posts()):
                            while($latestPosts->have_posts()):
                                $latestPosts->the_post();
                                $idLatestPost = get_the_ID();
                                $image = get_field('main_image_news', $idLatestPost);
                                $description = get_field('descriptionOfPost', $idLatestPost);
                                $shortDescription = substr($description,0, 110);
                                $shortDescription = $shortDescription.' (...)';
                                $datePost = get_the_date('d.m.Y');
                                $titlePost = get_the_title();
                                $shortTitle = substr($titlePost,0, 50);
                                $shortTitle = $shortTitle.' (...)';
                                $permalinkPost = get_permalink();
                    ?>
                                    <div class="latestPosts-block-content-box">
                                        <a href="<?php echo $permalinkPost;?>">
                                            <div class="latestPosts-block-content-box-image">
                                                <div class="latestPosts-block-content-box-image-hide">
                                                    <img src="<?php echo $image;?>" alt="<?php echo $titlePost;?>" loading="lazy"/>
                                                </div>
                                                <div class="latestPosts-block-content-box-image-smallCircle"></div>
                                            </div>
                                            <div class="latestPosts-block-content-box-datePost">
                                                <?php echo $datePost;?>
                                            </div>
                                            <div class="latestPosts-block-content-box-title">
                                                <?php echo $titlePost;?>
                                            </div>
                                            <div class="latestPosts-block-content-box-description">
                                                <?php echo $shortDescription;?>
                                            </div>
                                        </a>
                                    </div>
                    <?php
                            endwhile;
                        endif;
                        wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- END LATES POSTS -->
<?php
    get_footer();
?>
