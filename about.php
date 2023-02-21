<?php
/*
 * Template name: About
 */
?>
<?php
$portfolio = carbon_get_theme_option( 'crb_portfolio' );
$contacts_main_phone = carbon_get_theme_option( 'crb_main_phone' );
$contacts_add_phone = carbon_get_theme_option( 'crb_second_phone' );
$contacts_mail = carbon_get_theme_option( 'crb_email' );
$contacts_vk = carbon_get_theme_option( 'crb_vk' );
$contacts_wa = carbon_get_theme_option( 'crb_wa' );
$contacts_tg = carbon_get_theme_option( 'crb_tg' );
$contacts_inst = carbon_get_theme_option( 'crb_inst' );
?>
<?php get_header(); ?>
    <section>
        <div class="container page_header">
            <h1 class="page_title"><?php the_title(); ?></h1>
            <?php if (function_exists('breadcrumbs')) breadcrumbs(); ?> 
        </div>
    </section>   

    <section>
        <div class="container">
            <div class="page_content_wrapper">
                <div class="page_content">
                   <?php the_content(); ?> 
                </div>
                <div class="page_content_sidebar">
                    <div class="sidebar_text">
                        <p class="sidebar_title">Оставьте заявку прямо сейчас!</p>
                        <p class="sidebar_subtitle">Позвоните или напишите нам в соцсетях</p>
                    </div>
                    <?php echo do_shortcode('[contact-form-7 id="15" title="Контактная форма 1"]')?>
                    <div class="sidebar_socials">                  
                        <a href="<?= $contacts_vk ?>"><i class="fa fa-vk" aria-hidden="true"></i></a>
                        <a href="<?= $contacts_wa ?>"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                        <a href="<?= $contacts_tg ?>"><i class="fa fa-telegram" aria-hidden="true"></i></a>
                        <a href="<?= $contacts_inst ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>  
                    </div> 
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
<?php get_footer(); ?>