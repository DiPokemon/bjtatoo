<?php
/*
 * Template name: About
 */
?>

<?php
$portfolio = carbon_get_theme_option( 'crb_portfolio' );
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
                <?php get_sidebar(); ?>                
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