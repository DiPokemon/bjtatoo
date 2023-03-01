
<?php get_header(); ?>
<?php include 'template-parts/variables.php' ?>
<?php while (have_posts()) : the_post();
    $image_id = get_post_thumbnail_id();
    $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
    $image_title = get_the_title($image_id);
?>

<section>
    <div class="container page_header">
        <h1 class="page_title"><?php the_title(); ?></h1>
        <?php if (function_exists('breadcrumbs')) breadcrumbs(); ?> 
    </div>
</section>

<section>
    <div class="container">
        <div class="page_content_wrapper post_content_wrapper">
            <div class="page_content post_content">
                <img loading="lazy" class="post_img" src="<?php the_post_thumbnail_url('full') ?>" alt="<?= $image_alt ?>" title="<?= $image_title ?>">
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

<?php endwhile; ?>
<?php get_footer(); ?>