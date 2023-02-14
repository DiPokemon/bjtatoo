<?php
/*
 * Template name: Главная
 */
?>
<?php get_header(); ?>
<?php
  $title = carbon_get_theme_option( 'crb_main_title' );
  $left_icons = carbon_get_theme_option( 'crb_main_icons_left' );
  $right_icons = carbon_get_theme_option( 'crb_main_icons_right' );
  $portfolio = carbon_get_theme_option( 'crb_portfolio' );
  $services = carbon_get_theme_option( 'crb_main_services' );
?>

    <section class="main_frame">
        
        <div class="icons_bg">
            <div id="left_side_icons" class="left_side">
              <?php foreach( $left_icons as $icon ) : ?>
                <img class="float_icon" src="<?= $icon['crb_main_icon_img']; ?>" alt="<?= $icon['crb_main_icon_alt']; ?>" title="<?= $icon['crb_main_icon_title']; ?>">
              <?php endforeach; ?>
            </div>
            <div id="right_side_icons" class="right_side">
              <?php foreach( $right_icons as $icon ) : ?>
                <img class="float_icon" src="<?= $icon['crb_main_icon_img']; ?>" alt="<?= $icon['crb_main_icon_alt']; ?>" title="<?= $icon['crb_main_icon_title']; ?>">
              <?php endforeach; ?>                
            </div>
        </div>

        <div class="icons_bg_layout"> </div>

        <div class="main_container">
          <div class="container">
            <div class="half_column">
                <h1><?= $title; ?></h1>
            </div>
            <div class="half_column">                
                <?php echo do_shortcode('[contact-form-7 id="15" title="Контактная форма 1"]')?>
            </div>
          </div>            
        </div>
    </section>

    <section>
      <div class="container">          
        <div class="slider_wrapper">
          <div class="portfolio_slider">
            <?php foreach( $portfolio as $portfolio_item ) : ?>
                <img src="<?= $portfolio_item['crb_portfolio_img']; ?>" alt="<?= $portfolio_item['crb_portfolio_alt']; ?>" title="<?= $portfolio_item['crb_portfolio_title']; ?>">
            <?php endforeach; ?>
          </div>
        </div>        
      </div>
    </section>

    <section>
      <div class="container">
        <?php foreach( $services as $service ) : ?>
          <div class="text_block">
            <h2 class="text_title"><?= $service['crb_main_service_title']; ?></h2>
            <div class="text_body"><?= apply_filters('the_content', $service['crb_main_service_text']); ?></div>
          </div>
        <?php endforeach; ?>
      </div>
    </section>

    <section>
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
