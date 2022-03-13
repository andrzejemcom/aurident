<?php
	/**
	 * Template Name: Metamorfozy
	 * @author Andrzej Mącznik Wordpress Developer
     * @link https://mhmarketing.pl
	 * @copyright Copyright (c) 2022 Aurident
	 */
?>
<?php
    get_header();
    $idPost = get_the_ID();
?>

<div class="metamorphosesPage">
    <div class="container noPad">
        <div class="metamorphosesPage-content">
            <div class="metamorphosesPage-content-header">
                <h1><?php the_title();?></h1>
            </div>
            <div class="metamorphosesPage-content-list">
                <?php
                    while(have_rows('metamorphoses', $idPost)):the_row();
                    $idImageAfter = get_sub_field('idImageAfter');
                    $idImageBefore = get_sub_field('idImageBefore');
                    $before = 'Przed';
                    $after = 'Po';
                ?>
                    <div class="metamorphosesPage-content-list-block">
                        <div class="metamorphosesPage-content-list-block-images">
                            <?php echo do_shortcode(' [gambit_before_after before_image_id="'.$idImageAfter.'" after_image_id="'.$idImageBefore.'" direction="vertical" start="0.5" return_on_idle="true" return_on_idle_interval="2000" return_on_idle_duration="1000" arrows="true" border="true"]');?>
                        </div>
                        <div class="metamorphosesPage-content-list-block-labelLeft">
                            <?php echo $before;?>
                        </div>
                        <div class="metamorphosesPage-content-list-block-labelRight">
                            <?php echo $after;?>
                        </div>
                        <div class="metamorphosesPage-content-list-block-header">
                            <?php the_sub_field('header');?>
                        </div>
                        <div class="metamorphosesPage-content-list-block-description">
                            <?php the_sub_field('shortDescription');?>
                        </div>
                    </div>
                <?php
                    endwhile;
                ?>
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();
 ?>
