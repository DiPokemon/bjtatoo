<?php
/*
 * Template name: Главная
 */
?>
<?php get_header(); ?>
    <section class="main_frame">
        
        <div class="icons_bg">
            <div id="left_side_icons" class="left_side">
                <img class="float_icon" src="<?php echo get_template_directory_uri()?>/static/img/icons/anchor.png" alt="">
                <img class="float_icon" src="<?php echo get_template_directory_uri()?>/static/img/icons/chair.png" alt="">
                <img class="float_icon" src="<?php echo get_template_directory_uri()?>/static/img/icons/diamond.png" alt="">
                <img class="float_icon" src="<?php echo get_template_directory_uri()?>/static/img/icons/eye.png" alt="">
                <img class="float_icon" src="<?php echo get_template_directory_uri()?>/static/img/icons/flower.png" alt="">
                <img class="float_icon" src="<?php echo get_template_directory_uri()?>/static/img/icons/needles.png" alt="">
                <img class="float_icon" src="<?php echo get_template_directory_uri()?>/static/img/icons/skull.png" alt="">
            </div>
            <div id="right_side_icons" class="right_side">
                <img src="<?php echo get_template_directory_uri()?>/static/img/icons/swallow.png" alt="">
                <img src="<?php echo get_template_directory_uri()?>/static/img/icons/tattoo.png" alt="">
                <img src="<?php echo get_template_directory_uri()?>/static/img/icons/tattoo_fist.png" alt="">
                <img src="<?php echo get_template_directory_uri()?>/static/img/icons/tattoo_guitar.png" alt="">
                <img src="<?php echo get_template_directory_uri()?>/static/img/icons/tattoo_hand.png" alt="">
                <img src="<?php echo get_template_directory_uri()?>/static/img/icons/tattoo_heart.png" alt="">
                <img src="<?php echo get_template_directory_uri()?>/static/img/icons/tattoo_studio.png" alt=""> 
            </div>
        </div>
        <div class="icons_bg_layout">
                
        </div>

        <div class="main_container">
          <div class="container">
            <div class="half_column">
                <h1>Тату салон Блек Джек - профессиональная студия татуировки в Ростове-на-Дону</h1>
            </div>
            <div class="half_column">
              <div class="slider_wrapper">
                <div class="main_slider">
                  <img src="<?php echo get_template_directory_uri()?>/static/img/main_slider/portfolio_1.jpg" alt="">
                  <img src="<?php echo get_template_directory_uri()?>/static/img/main_slider/portfolio_2.jpg" alt="">
                  <img src="<?php echo get_template_directory_uri()?>/static/img/main_slider/portfolio_3.jpg" alt="">
                  <img src="<?php echo get_template_directory_uri()?>/static/img/main_slider/portfolio_4.jpg" alt="">
                  <img src="<?php echo get_template_directory_uri()?>/static/img/main_slider/portfolio_5.jpg" alt="">
                  <img src="<?php echo get_template_directory_uri()?>/static/img/main_slider/portfolio_6.jpg" alt="">
                  <img src="<?php echo get_template_directory_uri()?>/static/img/main_slider/portfolio_7.jpg" alt="">
                  <img src="<?php echo get_template_directory_uri()?>/static/img/main_slider/portfolio_8.jpg" alt="">
                </div>
              </div>
                
                <?php echo do_shortcode('[contact-form-7 id="15" title="Контактная форма 1"]')?>
            </div>
          </div>
            
        </div>

    </section>


    <section class="page__question question">
              <div class="question__container container">
                <div class="question__body">
                  <!-- <div class="question-triple_stars_left"><img loading="lazy" class="triple-stars" src="<?php echo get_template_directory_uri()?>/static/img/triple_stars.svg" alt="img"></div>                   -->
                  <div class="question-content">
                     <div class="question__title">
                       <h2 class="_h2 question__title_h2 section_title">Вопрос/Ответ</h2>
                     </div>
                     <div class="main_block__wrapper">
                       <div itemscope itemtype="https://schema.org/FAQPage" class="accordion faq_accordion" id="faq_accordion">                        
                          <input type="checkbox" name="chacor" id="chacor5" />
                          <label for="chacor5">Что такое SEO?</label>
                          <div class="acor-body">
                              <p>Seo (Search Engine Optimization) —  это совокупность работ, 
                                направленных на внутреннюю и внешнюю  оптимизацию, за счет чего  
                                происходит продвижение  сайта в ТОП-10 поисковой выдачи Яндекс или Google 
                                по целевым запросам пользователей. ТОПом считается первая страница поисковика. 
                                Поднять сайт в ТОП-10 — главная цель Seo-специалистов.</p>
                          </div>
                          <input type="checkbox" name="chacor" id="chacor6" />
                          <label for="chacor6">Когда будет результат от SEO?</label>
                          <div class="acor-body">
                              <p>После проведение работ с сайтом поисковикам нужно время, чтобы его проиндексировать.
                                 Поисковые запросы со временем начинают ранжироваться все выше и выше,
                                  пока не попадут в  ТОП-10 позиций. 
                                  Этот временной интервал всегда разный – в среднем от 2 до 6 месяцев.</p>
                          </div>
                          <input type="checkbox" name="chacor" id="chacor7" />
                          <label for="chacor7">Какие гарантии вы можете  предоставить?</label>
                          <div class="acor-body">
                              <p>С каждым клиентом мы заключаем официальный договор. С помощью Seo  
                                выведем Ваш сайт на показатели  70-90% собранных коммерческих ключевых 
                                запросов в ТОП-10 по Ростову на Дону, а также всей России. Предоставим 
                                подробную отчетность на каждом из этапов проделываемых работ. Вы можете 
                                ознакомится с результаты наших успешных проектов  в разделе кейсы.</p>
                          </div>
                          <input type="checkbox" name="chacor" id="chacor8" />
                          <label for="chacor8">Вы работаете только в Ростове на Дону?</label>
                          <div class="acor-body">
                              <p>Мы предоставляем услуги Seo как в Ростове на Дону, так и по 
                                всей России. Также вы можете заказать раскрутку за рубежом.</p>
                          </div>
                          <input type="checkbox" name="chacor" id="chacor9" />
                          <label for="chacor9">Какие работы вы проводите на проекте?</label>
                          <div class="acor-body">
                              <p>Команда наших специалистов вносит изменения в контент и функционал сайта. 
                                Все предварительно согласовывается с клиентом. Мы оптимизируем существующий контент 
                                и добавляем новый в соответствии с требованиями поисковых систем, при необходимости 
                                можем менять функционал и структуру посадочных страниц.</p>
                          </div>

                         </div>
                      </div>
                    </div>
                  <!-- <div class="question-triple_stars_right"><img loading="lazy" class="triple-stars" src="<?php echo get_template_directory_uri()?>/static/img/triple_stars.svg" alt="img"></div> -->
                </div>
              </div>
            </section>


<?php get_footer(); ?>
