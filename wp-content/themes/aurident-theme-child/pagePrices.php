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
                <?php
                    $pricesRepeater = get_field('prices', $idPost);
                    $countServices = 1;
                    if(!empty($pricesRepeater)):
                        while(have_rows('prices', $idPost)):the_row();
                            $icon = get_sub_field('icon');
                            $nameService = get_sub_field('nameOfService');
                ?>
                    <div class="pricesPage-content-list-block" onclick="showAccordionServices(<?php echo $countServices;?>)">
                        <div class="pricesPage-content-list-block-mainBox">
                            <div class="pricesPage-content-list-block-mainBox-icon">
                                <img src="<?php echo $icon['url'];?>" />
                            </div>
                            <div class="pricesPage-content-list-block-mainBox-title">
                                <?php echo $nameService;?>
                            </div>
                            <div class="pricesPage-content-list-block-mainBox-plusMinus">
                                <span class="plusShow" id="plusShowId<?php echo $countServices;?>">+</span>
                                <span class="minusShow" id="minusShowId<?php echo $countServices;?>">-</span>
                            </div>
                        </div>
                        <div class="pricesPage-content-list-block-showBox" id="descriptionPrice<?php echo $countServices;?>">
                            <div class="pricesPage-content-list-block-showBox-subList">
                                <?php
                                    while(have_rows('listOfActions')):the_row();
                                ?>
                                    <div class="pricesPage-content-list-block-showBox-subList-box">
                                        <div class="pricesPage-content-list-block-showBox-subList-box-left">
                                            <?php the_sub_field('nameAction');?>
                                        </div>
                                        <div class="pricesPage-content-list-block-showBox-subList-box-right">
                                            <?php
                                                $priceMain = get_sub_field('price');
                                                echo $priceMain.' PLN';
                                            ?>
                                        </div>
                                    </div>
                                <?php
                                    endwhile;
                                ?>
                            </div>
                        </div>
                    </div>
                <?php
                        $countServices++;
                        endwhile;;
                    endif;
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>
