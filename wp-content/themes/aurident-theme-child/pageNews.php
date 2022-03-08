<?php
	/**
	 * Template Name: Aktualności/Blog
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

<section class="blogPage">
    <div class="container noPad">
        <div class="blogPage-content">
            <div class="blogPage-content-header">
                <h1><?php the_title();?></h1>
            </div>
            <div class="blogPage-content-list">
                <?php
                    $checkPost = 1;
                    $catId = get_field('caregoryId', $idPost);
                    $getCategoryIdInt = intval($catId[0]);
                    $latestPosts = new WP_Query(array('cat' => $getCategoryIdInt, 'order' => 'DESC'));
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
                            if($checkPost == 1) {
                ?>
                                <div class="blogPage-content-list-bigBlock">
                                    <div class="blogPage-content-list-bigBlock-bcg"></div>
                                    <div class="blogPage-content-list-bigBlock-image">
                                        <img src="<?php echo $image;?>" alt="<?php echo $titlePost;?>" />
                                    </div>
                                    <div class="blogPage-content-list-bigBlock-box">
                                        <div class="blogPage-content-list-bigBlock-box-datePost">
                                            <?php echo $datePost;?>
                                        </div>
                                        <div class="blogPage-content-list-bigBlock-box-title">
                                            <?php echo $titlePost;?>
                                        </div>
                                        <div class="blogPage-content-list-bigBlock-box-description">
                                            <?php echo $shortDescription;?>
                                        </div>
                                    </div>
                                    <div class="blogPage-content-list-bigBlock-link">
                                        <a href="<?php echo $permalinkPost;?>">
                                            <?php echo file_get_contents(''.$url.'/wp-content/themes/aurident-theme-child/svg/arrow-right.svg'); ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="latestPosts-block-content-box mobileShow">
                                    <a href="<?php echo $permalinkPost;?>">
                                        <div class="latestPosts-block-content-box-image">
                                            <div class="latestPosts-block-content-box-image-hide">
                                                <img src="<?php echo $image;?>" alt="<?php echo $titlePost;?>" />
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
                            }  else {
                ?>
                                <div class="latestPosts-block-content-box marBot80">
                                    <a href="<?php echo $permalinkPost;?>">
                                        <div class="latestPosts-block-content-box-image">
                                            <div class="latestPosts-block-content-box-image-hide">
                                                <img src="<?php echo $image;?>" alt="<?php echo $titlePost;?>" />
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
                            }
                            $checkPost++;
                        endwhile;
                    endif;
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>

<?php
    get_footer();
?>
