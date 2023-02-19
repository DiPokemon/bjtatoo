$(document).ready(function () {
 
    // var show = true;
    // var countbox = ".advantages_block";
    // $(window).on("scroll load resize", function () {
    //     if (!show) return false; // Отменяем показ анимации, если она уже была выполнена
    //     var w_top = $(window).scrollTop(); // Количество пикселей на которое была прокручена страница
    //     var e_top = $(countbox).offset().top; // Расстояние от блока со счетчиками до верха всего документа
    //     var w_height = $(window).height(); // Высота окна браузера
    //     var d_height = $(document).height(); // Высота всего документа
    //     var e_height = $(countbox).outerHeight(); // Полная высота блока со счетчиками
    //     if (w_top + 500 >= e_top || w_height + w_top == d_height || e_height + e_top < w_height) {
    //         $('.advantage_digit').css('opacity', '1');
    //         $('.advantage_digit').spincrement({
    //             from: 0,
    //             thousandSeparator: "",
    //             duration: 6000
    //         });
             
    //         show = false;
    //     }
    // });          
          
    $('.slider_wrapper').each(function (index, sliderWrap) {
      var $main_slider = $(sliderWrap).find('.main_slider');  
      var $portfolio_slider = $(sliderWrap).find('.portfolio_slider'); 
      var $testimonials_slider = $(sliderWrap).find('.testimonials_slider');
      // var $portfolio_slider_nav = $(sliderWrap).find('.portfolio_slider_nav'); 

        $main_slider.slick({
            infinite: true,
            autoplay: true,
            dots: false,
            arrows: false,
            cssEase: 'linear',
            slidesToShow: 1,
            slidesToScroll: 1,            
        });   
      
        $portfolio_slider.slick({
          infinite: true,
          autoplay: true,
          dots: false,
          arrows: false,
          cssEase: 'linear',
          slidesToShow: 7,
          slidesToScroll: 1,  
          responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 5,                
              }
            },
            {
              breakpoint: 500,
              settings: {
                slidesToShow: 4,                
              }
            },
            {
              breakpoint: 400,
              settings: {
                slidesToShow: 3,                
              }
            },
            {
              breakpoint: 350,
              settings: {
                slidesToShow: 2,                
              }
            }
          ]
        });
      
        $testimonials_slider.slick({
          infinite: true,
          autoplay: true,
          dots: false,
          arrows: false,
          cssEase: 'linear',
          slidesToShow: 3,
          slidesToScroll: 1,   
          responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2,                
              }
            },
            {
              breakpoint: 500,
              settings: {
                slidesToShow: 1,                
              }
            }  
          ]
      });   
    });

    
  function setEqualHeight(columns) {
    var tallestcolumn = 0;
    columns.each(
      function () {
        currentHeight = $(this).height();
        if (currentHeight > tallestcolumn) {
          tallestcolumn = currentHeight;
        }
      }
    );
    columns.attr('style', 'height:' + tallestcolumn + 'px');
  }
   
});