





const btnNavEl = document.querySelector(".btn-mobile-nav");
const headerEl = document.querySelector(".header");
// $('.hero-btn').show();

btnNavEl.addEventListener("click", function () {
  headerEl.classList.toggle("nav-open");
});

$(document).ready(function() {
    // Show the dropdown menu when the parent item is hovered
    $('.dropdown').hover(function() {
      $(this).find('.dropdown-menu').show();
    }, function() {
      $(this).find('.dropdown-menu').hide();
    });

    // Hide the dropdown menu when clicking outside the dropdown
    $(document).click(function(e) {
      if (!$(e.target).closest('.dropdown').length) {
        $('.dropdown-menu').hide();
      }
    });
  });
 



// carasoul 4slides
$(document).on('ready', function () {

    $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true,
        autoplaySpeed: 2000,

        pauseOnHover: true,

        responsive: [
            {
                breakpoint: 1170,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 650,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 550,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },

        ]


    });
});



















// carasoul 3 slides


// carasoul 4slides
$(document).on('ready', function () {

    $(".normal").slick({
        dots: true,
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 2000,

        pauseOnHover: true,

        responsive: [
         
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 650,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 550,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },

        ]


    });
});




























// carasoul 1 slides

// carasoul 4slides
$(document).on('ready', function () {

    $(".blog").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll:3,
        autoplay: true,
        autoplaySpeed: 2000,

        pauseOnHover: true,

        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
           
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },

        ]

    });
});



















// carasoul 4slides
$(document).on('ready', function () {

    $(".courses").slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll:1,
        autoplay: true,
        autoplaySpeed: 2000,

        pauseOnHover: true,

        responsive: [
            {
                breakpoint: 1500,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
           
          

        ]

    });
});


















$(document).ready(function () {
    $('.faq-section').click(function () {
        var $faqSection = $(this);
        var $faqList = $faqSection.find('.faq-list');
        var $arrowIcon = $faqSection.find('.arrow i');

        $faqList.slideToggle();
        $arrowIcon.toggleClass('fa-plus fa-minus');
    });
});
$('#faq-section-6').click(function () {
    $('#faq-list-6').slideToggle();
    $(this).find('#arrow-6 i').toggleClass('fa-plus fa-minus');
})
$('#faq-section-7').click(function () {
    $('#faq-list-7').slideToggle();
    $(this).find('#arrow-7 i').toggleClass('fa-plus fa-minus');
})
$('#faq-section-8').click(function () {
    $('#faq-list-8').slideToggle();
    $(this).find('#arrow-8 i').toggleClass('fa-plus fa-minus');
})
$('#faq-section-9').click(function () {
    $('#faq-list-9').slideToggle();
    $(this).find('#arrow-9 i').toggleClass('fa-plus fa-minus');
})
$('#faq-section-10').click(function () {
    $('#faq-list-10').slideToggle();
    $(this).find('#arrow-10 i').toggleClass('fa-plus fa-minus');
})


