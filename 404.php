<?php get_header(); ?>



<section>
    <div class="container">
        <div class="page_content_wrapper">
            <div class="page_content">
                <?php the_content(); ?>
            </div>

            <div class="half_column">      
              <?php get_template_part( 'template-parts/form', 'vertical' ); ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/block', 'portfolio' ); ?>

<?php get_footer(); ?>