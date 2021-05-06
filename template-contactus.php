<?php 

/**
 * Template Name: Contact Us
 */

 ?>
<?php get_header(); ?>
<section class="page-wrap">
    <div class="container">
        <p><?php the_title(); ?></p>

        <div class="row">
            <div class="col-lg-6">
                this is where the contact form goes
            </div>
            <div class="col-lg-6">
                <?php get_template_part('includes/section', 'content'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
