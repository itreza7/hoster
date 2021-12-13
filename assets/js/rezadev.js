/*
 * AOS Animation
 */

AOS.init({
    once: true,
    startEvent: 'load'
});

/*
 * Navbar Sticky
 */

jQuery(function ($) {
    let stickyNavTop = $('#navbar').offset().top;
    let stickyNav = function () {
        let scrollTop = $(window).scrollTop();
        if (scrollTop > stickyNavTop) {
            $('#navbar').addClass('sticky');
            $('.top-of-site').addClass('sticky');
        } else {
            $('#navbar').removeClass('sticky');
            $('.top-of-site').removeClass('sticky');
        }
    };

    $(window).scroll(function () {
        stickyNav();
    });
});

/*
 * Responsive Menu
 */

jQuery(function ($) {
    $('.openResponsiveMenu').on('click', function () {
        let responsiveMenu = $('.responsiveMenu');
        let icon = $('.openResponsiveMenu .icon');
        if (responsiveMenu.hasClass('active')) {
            responsiveMenu.removeClass('active');
            icon.removeClass('close');
        } else {
            responsiveMenu.addClass('active');
            icon.addClass('close');
        }
    });
});


/*
 * Owl Carousel
 */

jQuery(function ($) {
    $('.loop').owlCarousel({
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        rtl: true,
        center: true,
        items: 3,
        loop: true,
        responsive: {
            1300: {
                items: 3,
            },
            992: {
                items: 2,
            },
            0: {
                items: 1,
            }
        }
    });

    $('.customer').owlCarousel({
        autoplay: true,
        autoplayTimeout: 2500,
        autoplayHoverPause: true,
        rtl: true,
        center: true,
        items: 5,
        dots: false,
        loop: true,
        responsive: {
            1200: {
                items: 5,
            },
            992: {
                items: 3,
            },
            768: {
                items: 5,
            },
            576: {
                items: 3,
            },
            0: {
                items: 1,
            }
        }
    });

    $('.cuscomment').owlCarousel({
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        rtl: true,
        center: true,
        items: 1,
        dots: false,
        loop: true
    });
})

/*
 * Our services
 */

jQuery(function ($) {
    $(".subservice").hide();
    $(".sss").click(function () {
        $(this).parent().fadeOut(500);
        $(this).parent().next(".subservice").delay(500).fadeIn(500);
    });
    $(".closesub").click(function () {
        $(this).parent().fadeOut(500);
        $(this).parent().prev(".details").delay(500).fadeIn(500);
    });

    let maxHeight = -1;
    let our_services = $('.our-services-column');
    our_services.each(function () {
        maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
    });
    our_services.each(function () {
        $(this).height(maxHeight);
    });
});

/*
 * Counter on homepage parallax
 */

jQuery(function ($) {
    $('span.numscroller').counterUp({
        delay: 10,
        time: 2000
    });
});

/*
 * Sidebar Tabs
 */

jQuery(function ($) {
    $('.sidebar .article-tabs .three-select .row div:first-child span').addClass('active');
    $('.sidebar .article-tabs .tabs-content .tab-content').hide();
    $('.sidebar .article-tabs .tabs-content .tab-content:first').show();


    $('.sidebar .article-tabs .three-select .row span').click(function () {
        $('.sidebar .article-tabs .three-select .row span').removeClass('active');
        $(this).addClass('active');
        $('.sidebar .article-tabs .tabs-content .tab-content').hide();

        let activeTab = $(this).data('target');
        $(activeTab).fadeIn();
        return false;
    });
});

/*
 * Comment Form
 */

jQuery(function ($) {
    let form = $('.comment-form');
    let button = $('.show-comment-form');
    form.hide();
    button.on('click',function () {
        if(button.hasClass('active')){
            button.removeClass('active');
            button.text('ارسال دیدگاه');
        }else{
            button.addClass('active');
            button.text('لغو ارسال');
        }

        form.slideToggle();
    });
});

jQuery(function ($) {
    let commentForm = $('.comment-form');
    let submitForm = $('#commentform');
    submitForm.on('submit',function (e) {
        let auther = $('#commentform #author');
        let email = $('#commentform #email');
        let comment = $('#commentform #comment');
        if( auther.val() && email.val() && comment.val()) {
            submitForm.unbind('submit').submit();
        }
        else{
            e.preventDefault();
            $('<div class="alert alert-warning" role="alert">لطفا تمامی فیلد ها را بطور کامل پر کنید.</div>').prependTo(commentForm).hide().slideDown().delay(3000).slideUp('slow');;
        }
    });
});

/*
 * Search Advanced
 */

jQuery(function ($) {

    let search_advanced_result = $("#filterResult #search-advanced-result");
    let package_list = $("#filterResult .package-list");
    let package_item = $("#filterResult .col-item");
    let search_title_result = $('.search-title-result');
    let search_result_boolean = false;


    search_advanced_result.hide();
    package_list.hide();
    package_item.hide();

    $("#filterService").on("submit", function() {
        search_advanced_result.fadeIn(1000);
        package_list.fadeIn(1000);
        package_item.fadeIn(1000);

        let filter = "";
        $(this).find("[data-form]").each(function() {
            if ($(this).val() !== "" && ($(this).attr("type") !== "radio" || $(this).attr("type") === "radio" && $(this).prop("checked"))) {
                filter += ('[data-' + $(this).attr("data-form") + '="' + $(this).val() + '"]');
            }
        });
        if (filter.length > 0) {
            package_item.not(filter).hide();
        }
        if ( package_item.length ) {
            package_item.each(function() {
                let list = $(this);
                if(list.is(':visible')){
                    search_result_boolean = true;
                    return false;
                }
                else{
                    search_result_boolean = false;
                }
            });
        }

        if(search_result_boolean){
            search_title_result.text('پکیج های مورد نظر شما');
        }
        else{
            search_title_result.text('محصولی مطابق با فیلتر های وارد شده یافت نشد.');
        }
        return false;
    });
});
