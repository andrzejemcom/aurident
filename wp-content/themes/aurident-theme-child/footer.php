<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aurident_Theme
 */

 $urlFooter = get_site_url();
?>
<div class="modalBcg" id="bcgModal"></div>
<div class="modal fade" id="zapisy" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="closeRegistration" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="headerModal padTop50 padLeft50">
                <h2 class="headerSections noTextCenter marBot20">Umów wizytę</h2>
            </div>
            <div class="contactForm padLeft50">
                <?php echo do_shortcode('[contact-form-7 id="14" title="Rejestracja"]');?>
            </div>
        </div>
    </div>
</div>

        <footer id="auridentFooter" class="siteFooter">
            <div class="container">
                <div class="siteFooter-block">
                    <div class="siteFooter-block-content">
                        <div class="siteFooter-block-content-map">
                            <?php the_field('googleMap', 'options');?>
                        </div>
                        <div class="siteFooter-block-content-address">
                            <div class="siteFooter-block-content-address-header">
                                <?php the_field('footerAddressHeader', 'options');?>
                            </div>
                            <div class="siteFooter-block-content-address-list">
                                <div class="siteFooter-block-content-address-list-box">
                                    <?php
                                        $linkPhone = get_field('phoneFooter', 'options');
                                        $linkMail = get_field('mailFooter', 'options');
                                        $addressFooter = get_field('addressFooter', 'options');
                                        $bankInformation = get_field('bankInformationFooter', 'options');
                                        $linkOnlineFooter = get_field('linkOnline', 'options');
                                        $shortcutsHeader = get_field('shortcutsHeader', 'options');
                                        $shortcutsLinks = get_field('shortcutsLinks', 'options');
                                    ?>
                                    <a href="tel:<?php echo $linkPhone;?>">
                                        <div class="siteFooter-block-content-address-list-box-icon">
                                            <?php echo file_get_contents($urlFooter.'/wp-content/themes/aurident-theme-child/svg/phone.svg');?>
                                        </div>
                                        <div class="siteFooter-block-content-address-list-box-text">
                                            <?php echo $linkPhone;?>
                                        </div>
                                    </a>
                                </div>
                                <div class="siteFooter-block-content-address-list-box">
                                    <a href="mailto:<?php echo $linkMail;?>">
                                        <div class="siteFooter-block-content-address-list-box-icon">
                                            <?php echo file_get_contents($urlFooter.'/wp-content/themes/aurident-theme-child/svg/mail.svg');?>
                                        </div>
                                        <div class="siteFooter-block-content-address-list-box-text">
                                            <?php echo $linkMail;?>
                                        </div>
                                    </a>
                                </div>
                                <div class="siteFooter-block-content-address-list-box">
                                    <div class="siteFooter-block-content-address-list-box-icon">
                                        <?php echo file_get_contents($urlFooter.'/wp-content/themes/aurident-theme-child/svg/mapPoint.svg');?>
                                    </div>
                                    <div class="siteFooter-block-content-address-list-box-text">
                                        <?php echo $addressFooter; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="siteFooter-block-content-address-bankInformation">
                                <?php echo $bankInformation;?>
                            </div>
                            <div class="siteFooter-block-content-address-button">
                                <a href="#" class="buttonTwo" onclick="showModalRegistration()">
                                    <?php echo $linkOnlineFooter['title'];?>
                                </a>
                            </div>
                        </div>
                        <div class="siteFooter-block-content-shortcuts">
                            <div class="siteFooter-block-content-shortcuts-header">
                                <?php echo $shortcutsHeader;?>
                            </div>
                            <div class="siteFooter-block-content-shortcuts-list">
                                <?php
                                    while(have_rows('shortcutsLinks', 'options')):the_row();
                                    $linkShortcut = get_sub_field('linkShortcut');
                                ?>
                                    <div class="siteFooter-block-content-shortcuts-list-box">
                                        <a href="<?php echo $linkShortcut['url'];?>">
                                            <?php echo $linkShortcut['title'];?>
                                        </a>
                                    </div>
                                <?php
                                    endwhile;
                                ?>
                            </div>
                        </div>
                        <div class="siteFooter-block-content-googleMapMobile">
                            <?php the_field('googleMap', 'options');?>
                        </div>
                    </div>
                    <div class="siteFooter-block-copyright">
                        <div class="siteFooter-block-copyright-left">
                             Copyright © 1991-<?php echo date('Y');?> <?php the_field('copyrightName', 'options');?>
                        </div>
                        <div class="siteFooter-block-copyright-right">
                            <?php the_field('created','options');?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="siteFooter-tooth">
                <div class="siteFooter-tooth-icon">
                    <svg version="1.1" id="Warstwa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 238.6 500.9" xml:space="preserve">
                      <defs>
                        <path id="SVGID_1_" d="M-46.4-39.1h285v570h-285z"/>
                      </defs>
                      <clipPath id="SVGID_00000114052887224456032810000008864940920427033736_">
                        <use xlink:href="#SVGID_1_" overflow="visible"/>
                      </clipPath>
                      <g id="Mask_Group_2" transform="translate(-1635 -6413)" clip-path="url(#SVGID_00000114052887224456032810000008864940920427033736_)">
                        <g id="LOGO" transform="translate(1625.719 6452.354)">
                          <g id="Group_49" transform="translate(55.581)">
                            <path id="Path_21" d="M428.6 53c-5.1-27.3-18.1-49.9-40.2-66.8-28.2-21.7-60.6-27.5-95.2-24-16.7 1.7-32.6 6.5-48.2 12.6-27.4 10.8-55.5 12.9-84 5.3-9.8-2.6-19.2-6.6-28.8-9.8-30.3-9.9-60.9-12.7-92.1-4.8C19.8-29.4 1.4-20.7-13.3-5.7c-21.4 21.6-31.2 48.4-32.8 78.3-1.1 20.9 2.9 41.2 8.9 61.1 5.9 19.7 14.3 38.4 22.7 57.1 18 40 28.2 83 30 126.8.6 15.3 1.2 30.5 4 45.5 3.6 19.3 8.6 38.2 17.9 55.6 9.5 17.9 22.4 31.9 42.2 38.7 12.2 4.2 24.5 5.9 37.1 1.6 8.7-3 15.8-8.4 22.6-14.3 2.6-2.3 5.1-4.6 7.7-6.9v.2l.7-.8 8.7-7.8c1-.9 1.9-1.7 2.8-2.5L283.7 287l7.6-8.7c9.9-11.6 20.8-26.2 29-44.1 10-21.7 13.3-42.4 10-63.3-7.2-45.3-44.3-77.3-82.7-71.4-23.6 3.7-44.2 21.8-55.2 46.5-.4-.9-.8-1.8-1.3-2.7-14.4-28.5-34.9-43.5-61-44.5-23.4-.9-44 10.4-59.7 32.6-14.9 21.1-20.1 45.4-15.5 72.3 2.8 16.5 9.1 32 19.7 48.8 12.1 19.1 18.8 26.2 33 41.5 0 0 19.5 18.7 22.1 20.4 16.7 11.1 28.6 13 41.7 13.5l1.8-.1c3.5-.3 6.9-1 10.3-2l4.3-1.6c4.6-1.6 5.5-3.7 3-3.6-26.3.2-41.2-14.1-51.4-21.9L124.5 285c-14.3-15.3-23.1-25.8-34.7-42.1-8.9-12.5-14.8-27-17.2-42.2-3.7-22 .5-41.8 12.5-58.9 11.7-16.6 26-25.1 42.4-25.1h1.9c19.3.7 34.2 12.1 45.5 34.6 3.9 7.4 6.4 15.6 7.2 23.9 0 2.6 1 5.1 2.8 7 0 0 .1.1.1.2 3.9 4 10.4 4.1 14.4.2 1.2-1.2 2.1-2.7 2.6-4.3.1-.2.1-.4.2-.6s.1-.4.1-.6c.1-.3.1-.5.2-.8 3.6-30 24-55.4 47.6-59.1 28.2-4.4 56.6 21.4 62.2 56.4 2.7 17.3 0 34.6-8.5 52.9-7.8 16.9-18.5 30.8-27.9 41.8L160.8 397.5 148.7 411c-6.2 5.8-12.5 11.6-18.7 17.4-3.4 3.1-7 6.1-10.7 9-13.1 10.1-27.2 7.1-38.4-.9-4.4-3.4-8.4-7.4-11.8-11.8-10.8-13.2-20.1-27.4-25-43.9-4-13.8-6.5-27.9-7.3-42.2-1-13.7-1.4-27.4-2.5-41.1-2.5-29.9-9.1-59.4-19.7-87.5C7.9 192.4.2 175.1-7.1 157.7c-8.5-20.3-15.3-41.1-17.9-63.1-2.7-23.3.1-45.7 11.1-66.7C-1.1 3 20.1-11.5 47-17.7c29.6-6.8 58.3-3 86.3 7.9C154-1.6 175.2 3.1 197.5 2.6c20.5-.5 40.1-4.9 59.1-12.3 16.6-6.5 33.7-10.9 51.6-11.3 27.4-.6 51.9 7.3 72.6 25.5 15.7 13.8 24.3 31.7 27.9 52.1 4.9 27.8.8 54.6-9 80.6-8.6 22.8-18.1 45.2-27.4 67.8-10.8 26.3-17.7 54-20.6 82.3-1.5 15-2.5 30.1-3.5 45.1-1.5 21.8-4.1 43.4-12.2 63.9-4.7 11.9-10.3 23.3-19.2 32.7l-.1.1c-11.7 13.1-29.1 19.3-45.8 14.5-9.5-2.8-17.8-8.9-23.3-17.3-1.6-2.1-3.2-4.2-4.6-6.4-5-8-6.7-11.4-9-20.3-.7-3.1-1.4-7.8-2.2-11-.2-.9-1.3-1-1.6.4l-.3 1.8c-.3 1.7-.5 3.4-.6 5.2-.3 4-.2 8 .3 11.9.5 3.8 1.2 7.5 2.2 11.1 2.1 6.5 5 12.6 8.9 18.2 2.8 4.2 6.6 7.5 10.3 11.2 3 2.6 6.2 4.8 9.7 6.6 19.8 10.2 43.6 8.2 61.4-5.3 7.6-5.8 14.1-12.8 19.3-20.8 12.2-18.6 18.9-39.2 23.1-60.9 4-21 4.2-42.3 6.2-63.5 1.3-14.1 2.9-28.2 5.4-42.1 4.3-23.9 12.9-46.4 22.2-68.8 7.7-18.5 15.7-37 22.3-55.9 9.6-27.4 13.4-55.7 8-84.7" fill="#5b6e82"/>
                          </g>
                        </g>
                      </g>
                    </svg>
                </div>
            </div>
        </footer>

        <?php wp_footer(); ?>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.3.7/js/swiper.js"></script>
        <script type="text/javascript" src="/wp-content/themes/aurident-theme-child/js/scripts.js"></script>
    </body>
</html>
