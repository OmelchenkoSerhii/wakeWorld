import $  from 'jquery';
import 'slick-carousel';

function contentImageSlider(){
       
        $('.content-image-slider').each(function(){
                let block = $(this);
                let slider = $(this).find('.content-image-slider_list');


                slider.slick({
                        dots: true,
                        arrows: false,
                        infinite: true,
                        speed: 500,
                        cssEase: 'linear',
                        adaptiveHeight: true,
                        slidesToShow: 1,
                        autoplay: true,
                        autoplaySpeed: 3000,
                        fade: true,
                });
                
                slider.on('init', function(){
                  $(window).trigger('heightChanges');
                });

                
                
        });
}

export { contentImageSlider };
