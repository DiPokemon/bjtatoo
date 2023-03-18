<?php 
/**
 * Template Name: 404 Page
 */
?>
<?php get_header(); ?>
<?php include 'template-parts/variables.php' ?>
<?php get_template_part( 'template-parts/block', 'pageheader' ); ?>
<section>
    <div class="container">
        <div class="banner_404">
            404
        </div>
        <div class="text_404">
            Извините, страница не найдена, но Вы можете найти посмотреть, что у нас есть или оставить заявку!
        </div>
        <div class="page_content_wrapper">
            <div class="half_column">

            </div>
            <div class="half_column">
                <?php get_template_part( 'template-parts/form', 'vertical' ); ?>
            </div>
        </div>       
    </div>
</section>


<?php get_footer(); ?>