// MENU
    jQuery('.hamburger').click(function(){
        jQuery(this).toggleClass('hamburgerOpen');
        jQuery('.siteHeader').toggleClass('headerIsOpen');
    });
    jQuery(document).ready(function(){
        var count = jQuery('ul#main-menu .menu-item-has-children').length;
        jQuery('ul#main-menu .menu-item-has-children:first-child').addClass('specialMenu');
    });

// SLIDERS
    var sliderMainPage = new Swiper('.sliderMainPage', {
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        slidesPerView: 1,
        speed: 2500,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
    var sliderSimilarPosts = new Swiper('.similarPostsSlider', {
        autoplay: {
            delay:3500,
            disableOnInteraction: false,
        },
        slidesPerView:1,
        speed: 2500,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        loop: true,
    });

    var sliderWhatWeDoMainPage = new Swiper('.whatWeDoSliderMainPage', {
        autoplay: {
            delay: 3500,
            disableOnInteraction:false,
        },
        speed: 3000,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            1: {
                slidesPerView: 1,
            },
            575.98: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
        },
    });

    var ourTeamSliderLoop = new Swiper('#ourTeamSlider', {
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        speed: 2200,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            1: {
                slidesPerView: 1,
                spaceBetween:20,
            },
            575.98: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            767.98: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1023.98: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            1365.98: {
                slidesPerView: 5,
                spaceBetween: 20,
            },
        },
        loop: true,
    });

    var ourStrengthsSlider = new Swiper ('.ourStrengthsSlider', {
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        speed: 3000,
        breakpoints: {
            1: {
                slidesPerView:1,
            },
            575.98: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            767.98: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
        },
        loop: true,
    });

    // ACCORDION SERVICES PRICES

    function showAccordionServices(param) {
        if(jQuery('#descriptionPrice'+param).hasClass('showAccordionServicesBlock')) {
            jQuery('#descriptionPrice'+param).slideUp('slow');
            jQuery('#descriptionPrice'+param).removeClass('showAccordionServicesBlock');
            jQuery('#plusShowId'+param).removeClass('hidePlusShow');
            jQuery('#minusShowId'+param).removeClass('showMinusShow');
        } else {
            jQuery('#descriptionPrice'+param).slideDown('slow');
            jQuery('#descriptionPrice'+param).addClass('showAccordionServicesBlock');
            jQuery('#plusShowId'+param).addClass('hidePlusShow');
            jQuery('#minusShowId'+param).addClass('showMinusShow');
        }
    }

    function showModalRegistration() {
        jQuery('#zapisy').toggleClass('showModal');
        jQuery('#bcgModal').toggleClass('showBcgModal');
    }

    jQuery('.closeRegistration').click(function(){
        jQuery('#zapisy').removeClass('showModal');
        jQuery('#bcgModal').removeClass('showBcgModal');
    });
