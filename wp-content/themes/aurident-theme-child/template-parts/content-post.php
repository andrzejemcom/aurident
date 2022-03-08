<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aurident
 */

?>
<?php
    $idPost = get_the_ID();
    $urlHome = get_site_url();
    $cat = get_the_category();
    if($cat[0]->cat_name == 'Blog') {
        $linkBack = $urlHome.'/blog';
    } elseif($cat[0]->cat_name == 'Aktualności') {
        $linkBack = $urlHome.'/aktualnosci';
    }

    $datePost = get_the_date('d.m.Y');
    $titlePost = get_the_title();
    $image = get_field('main_image_news', $idLatestPost);
    $description = get_field('descriptionOfPost', $idLatestPost);
    $shortDescription = substr($description, 0, 250);

    $similarPosts = get_field('similar_posts', $idPost);
?>

<article id="post-<?php the_ID();?>" class="singlePost-content">
    <div class="container noPad">
        <div class="singlePost-content-block">
            <div class="singlePost-content-block-left">
                <div class="singlePost-content-block-left-backLink">
                    <a href="<?php echo $linkBack;?>">
                        <div class="singlePost-content-block-left-backLink-icon">
                            <?php echo file_get_contents(''.$urlHome.'/wp-content/themes/aurident-theme-child/svg/arrow-right.svg'); ?>
                        </div>
                        <div class="singlePost-content-block-left-backLink-text">
                            <?php echo $cat[0]->cat_name;?>
                        </div>
                    </a>
                </div>
                <div class="singlePost-content-block-left-bottomBox">
                    <div class="singlePost-content-block-left-bottomBox-date">
                        <?php echo $datePost;?>
                    </div>
                    <div class="singlePost-content-block-left-bottomBox-title">
                        <h1>
                            <?php echo $titlePost; ?>
                        </h1>
                    </div>
                    <div class="singlePost-content-block-left-bottomBox-shortDescription">
                        <?php echo $shortDescription;?>
                    </div>
                    <div class="singlePost-content-block-left-bottomBox-share">
                        <div class="singlePost-content-block-left-bottomBox-share-left">
                            Udostępnij:
                        </div>
                        <div class="singlePost-content-block-left-bottomBox-share-right">
                            <div class="singlePost-content-block-left-bottomBox-share-right-icon fbIcon">
                                <a href="#">
                                    <?php echo file_get_contents(''.$urlHome.'/wp-content/themes/aurident-theme-child/svg/facebook.svg');?>
                                </a>
                            </div>
                            <div class="singlePost-content-block-left-bottomBox-share-right-icon inIcon">
                                <a href="#">
                                    <?php echo file_get_contents(''.$urlHome.'/wp-content/themes/aurident-theme-child/svg/linkedin.svg');?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="singlePost-content-block-right">
                <div class="singlePost-content-block-right-smallCircle"></div>
                <div class="singlePost-content-block-right-image">
                    <img src="<?php echo $image;?>" />
                </div>
            </div>
        </div>
        <div class="singlePost-content-mainBlock">
            <div class="singlePost-content-mainBlock-mainDescription">
                <?php echo $description;?>
            </div>
            <div class="singlePost-content-mainBlock-similarPosts">
                <?php
                    if(!empty($similarPosts)) :
                ?>
                    <div class="singlePost-content-mainBlock-similarPosts-header">
                        Zobacz także
                    </div>
                    <div class="singlePost-content-mainBlock-similarPosts-block">
                        <?php
                            foreach($similarPosts as $similarPost) :
                                $imgFeaturedPost = get_field('main_image_news', $similarPost->ID);
                                $descriptionPost = get_field('descriptionOfPost', $similarPost->ID);
                                $shortDescriptionFeatured = substr($descriptionPost, 0, 120);
                                $shortDescriptionFeatured = $shortDescriptionFeatured.'(...)';
                                $dateOfThePost = get_the_date('d.m.Y');
                                $titleOfThePost = get_the_title($similarPost->ID);
                                $permalink = get_permalink( $similarPost->ID );
                        ?>
                            <div class="singlePost-content-mainBlock-similarPosts-block-post">
                                <div class="singlePost-content-mainBlock-similarPosts-block-post-smallCircle"></div>
                                <a href="<?php echo $permalink;?>">
                                    <div class="singlePost-content-mainBlock-similarPosts-block-post-image">
                                        <img src="<?php echo $imgFeaturedPost;?>" alt="<?php echo $titleOfThePost;?>"/>
                                    </div>
                                    <div class="singlePost-content-mainBlock-similarPosts-block-post-date">
                                        <?php echo $dateOfThePost;?>
                                    </div>
                                    <div class="singlePost-content-mainBlock-similarPosts-block-post-title">
                                        <?php echo $titleOfThePost;?>
                                    </div>
                                    <div class="singlePost-content-mainBlock-similarPosts-block-post-shortDescription">
                                        <?php echo $shortDescriptionFeatured;?>
                                    </div>
                                </a>
                            </div>
                        <?php
                            endforeach;
                        ?>
                    </div>
                <?php
                    endif;
                ?>
            </div>
            <div class="singlePost-content-mainBlock-similarPostsSlider">
                <div class="swiper-container similarPostsSlider">
                    <div class="swiper-wrapper">
                        <?php
                            foreach($similarPosts as $similarPost) :
                                $imgFeaturedPost = get_field('main_image_news', $similarPost->ID);
                                $descriptionPost = get_field('descriptionOfPost', $similarPost->ID);
                                $shortDescriptionFeatured = substr($descriptionPost, 0, 120);
                                $shortDescriptionFeatured = $shortDescriptionFeatured.'(...)';
                                $dateOfThePost = get_the_date('d.m.Y');
                                $titleOfThePost = get_the_title($similarPost->ID);
                                $permalink = get_permalink( $similarPost->ID );
                        ?>
                            <div class="swiper-slide">
                                <div class="singlePost-content-mainBlock-similarPostsSlider-block">
                                    <div class="singlePost-content-mainBlock-similarPostsSlider-block-image">
                                        <img src="<?php echo $imgFeaturedPost;?>" alt="<?php echo $titleOfThePost;?>" />
                                    </div>
                                    <div class="singlePost-content-mainBlock-similarPostsSlider-block-date">
                                        <?php echo $dateOfThePost;?>
                                    </div>
                                    <div class="singlePost-content-mainBlock-similarPostsSlider-block-title">
                                        <?php echo $titleOfThePost;?>
                                    </div>
                                    <div class="singlePost-content-mainBlock-similarPostsSlider-block-description">
                                        <?php echo $shortDescription;?>
                                    </div>
                                </div>
                            </div>
                        <?php
                            endforeach;
                        ?>
                    </div>
                </div>
                <div class="singlePost-content-mainBlock-similarPostsSlider-navigation">
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev">
                        <?php echo file_get_contents(''.$urlHome.'/wp-content/themes/aurident-theme-child/svg/arrow-right.svg');?>
                    </div>
                    <div class="swiper-button-next">
                        <?php echo file_get_contents(''.$urlHome.'/wp-content/themes/aurident-theme-child/svg/arrow-right.svg');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>
