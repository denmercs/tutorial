<?php get_header(); ?>
<section class="page-wrap">
    <div class="container">
        
        <?php get_template_part('includes/section', 'archive') ?>

        <!-- first way to do pagination -->
        <?php // previous_posts_link(); ?>
        <?php // next_posts_link(); ?>

        <!-- second way to pagination -->
        <?php
            global $wp_query;

            $big = 9999999; // need an unlikely integer

            echo paginate_links(([
                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format' => '?paged=%#%',
                'current' => max(1, get_query_var('paged')),
                'total' => $wp_query->max_num_pages
            ]))
        ?>
    </div>
</section>

<?php get_footer(); ?>