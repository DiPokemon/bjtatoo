<?php
/*
 * Template name: Главная
 */
?>
<?php get_header(); ?>
<?php
  $title = carbon_get_theme_option( 'crb_main_title' );
  $description = carbon_get_theme_option( 'crb_main_description' );

  $contacts_main_phone = carbon_get_theme_option( 'crb_main_phone' );
  $contacts_add_phone = carbon_get_theme_option( 'crb_second_phone' );
  $contacts_mail = carbon_get_theme_option( 'crb_email' );
  $contacts_vk = carbon_get_theme_option( 'crb_vk' );
  $contacts_wa = carbon_get_theme_option( 'crb_wa' );
  $contacts_tg = carbon_get_theme_option( 'crb_tg' );
  $contacts_inst = carbon_get_theme_option( 'crb_inst' );
  $contacts_fb = carbon_get_theme_option( 'crb_fb' );

  $address_city = carbon_get_theme_option( 'crb_address_city' );
  $address_street = carbon_get_theme_option( 'crb_address_street' );
  $address_building = carbon_get_theme_option( 'crb_address_build' );
  $address_zipcode = carbon_get_theme_option( 'crb_address_index' );

  $left_icons = carbon_get_theme_option( 'crb_main_icons_left' );
  $right_icons = carbon_get_theme_option( 'crb_main_icons_right' );

  $portfolio = carbon_get_theme_option( 'crb_portfolio' );

  $services = carbon_get_theme_option( 'crb_main_services' );

  $faq_title = carbon_get_theme_option( 'crb_main_faq_title' );
  $faq_items = carbon_get_theme_option( 'crb_main_faq' );

  $testimonials_title = carbon_get_theme_option( 'crb_main_testimonials_title' );
  $testimonial_items = carbon_get_theme_option( 'crb_testimonial' );
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
                <div class="main_description">
                  <?= $description; ?>
                </div>
            </div>
            <div class="half_column">      
              <?php get_template_part( 'template-parts/form', 'vertical' ); ?>
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

        <div class="section_tabs tabs">

          <div class="tabs_head">
            <?php foreach( $services as $i => $service ) : ?>
              <div class="tabs_caption" data-tab="service_<?= $i ?>"><h2 class="text_title"><?= $service['crb_main_service_title']; ?></h2></div>
            <?php endforeach; ?>            
          </div>
          
          <div class="tabs_body">
            <?php foreach( $services as $i => $service ) : ?>
              <div class="text_body tabs_content" data-tab="service_<?= $i ?>">
                <?= apply_filters('the_content', $service['crb_main_service_text']); ?>
              </div>
            <?php endforeach; ?>
          </div>

        </div>
      </div>
    </section>

    <section itemscope itemtype="https://schema.org/FAQPage">
      <div class="container">
        <div class="section_title">
          <h2><?= $faq_title; ?></h2>
        </div>
        <?php foreach( $faq_items as $i => $faq ) : ?>
          <div id="<?= $i; ?>"class="faq" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <button class="faq_title"><span itemprop="name"><?= $faq['crb_main_question']; ?></span></button>
            <div class="faq_body" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <p itemprop="text"><?= $faq['crb_main_answer']; ?></p>
            </div>
          </div>          
        <?php endforeach; ?>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="section_title">
          <h2><?= $testimonials_title; ?></h2>
        </div>        
        <div class="slider_wrapper">
          <div class="testimonials_slider">
            <?php foreach($testimonial_items as $i => $testimonial): ?>
              <div id="testimonial_<?= $i; ?>" class="testimonial" itemscope itemtype="https://schema.org/Review">
                <div class="testimonial_header" itemprop="author" itemscope itemtype="https://schema.org/Person">                  
                  <img height="100px" width="100px" class="testimonial_author_img" src="<?= $testimonial['crb_testimonial_img']; ?>" alt="Отзыв о тату-студии Black Jack от <?= $testimonial['crb_testimonial_name']; ?> <?= $testimonial['crb_testimonial_second_name']; ?>">
                  <div class="testimonial_author_name">
                    <span itemprop="name"><?= $testimonial['crb_testimonial_name']; ?></span>
                    <?php if($testimonial['crb_testimonial_second_name']):?>
                      <span itemprop="familyName"><?= $testimonial['crb_testimonial_second_name']; ?></span>
                    <?php endif; ?>
                  </div>                  
                </div>
                <meta itemprop="datePublished" content="<?= $testimonial['crb_testimonial_date']; ?>"/>
                <meta itemprop="name" content="Отзыв о тату-студии Black Jack">
                <link itemprop="url" href="<?= get_site_url() ?>/#testimonial_<?= $i; ?>">
                <div class="testimonial_text" itemprop="reviewBody">
                  <?= $testimonial['crb_testimonial_text']; ?>
                </div>
                <div class="textimonial_organization" itemprop="itemReviewed" itemscope itemtype="https://schema.org/Organization">
                    <meta itemprop="name" content="Отзыв о тату студии Black Jack">
                    <meta itemprop="telephone" content="<?= $contacts_main_phone ?>">
                    <link itemprop="url" href="<?= get_site_url() ?>"/>
                    <meta itemprop="email" content="<?= $contacts_mail ?>">
                    <p itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                        <meta itemprop="addressLocality" content="<?= $address_city ?>">
                        <meta itemprop="streetAddress" content="<?= $address_street ?>, <?= $address_building ?>">
                    </p>
                </div>
                <div class="testimonial_rating" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                  <meta itemprop="worstRating" content="1">
                  <meta itemprop="ratingValue" content="<?= $testimonial['crb_testimonial_rating']; ?>">
                  <meta itemprop="bestRating" content="5"/>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <?php get_template_part( 'template-parts/form', 'horizontal' ); ?>
      </div>
    </section>

<?php get_footer(); ?>