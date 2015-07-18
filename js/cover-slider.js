
$(document).ready(function(){
  $('.cover-slider').slick({
            arrows: false,
            adaptiveHeight: true,
            slidesToScroll: 1,
            autoplay: true,
            speed: 2500,
            autoplaySpeed: 4000,
          });
          $('.testimonial-slider').slick({
            slidesToShow: 2,
            slidesToScroll: 2,
            autoplay: true,
            speed: 2000,
            autoplaySpeed: 5000,
            variableWidth: true,
            responsive: [
                          {
                breakpoint: 512,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  variableWidth: false
                }
              }
              // You can unslick at a given breakpoint now by adding:
              // settings: "unslick"
              // instead of a settings object
            ]
          });
      });