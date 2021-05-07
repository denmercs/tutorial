<?php get_header(); ?>
<section class="page-wrap">
    <div class="container">
            <section class="row">
            <div class="col-lg-3">
                <?php
                if(is_active_sidebar('page-sidebar')) {
                    dynamic_sidebar('page-sidebar');
                }
                ?>
            </div>

            <div class="col-lg-9">
                <?php
                if(has_post_thumbnail()) { ?>
                    <img src="<?php the_post_thumbnail_url('blog-small'); ?>" class="img-fluid mb-3 img-thumbnail">
                    <?php }
                ?>
                <h1><?php the_title(); ?></h1>
                <?php get_template_part('includes/section', 'content') ?>
                  
            </div>
        </section>
    </div>
</section>

<?php get_footer(); ?>