<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="card mb-3">
        <div class="card-body">

            <?php 
                if(has_post_thumbnail()) { ?>
                    <img src="<?php the_post_thumbnail_url('blog-small'); ?>" class="img-fluid mb-3 img-thumbnail">
                <?php }
            ?>
            <h3><?php the_title(); ?></h3>
            <?php the_excerpt(); ?>

            <a href="<?php the_permalink(); ?>" class="btn btn-success">Read More</a>
        </div>
    </div>
<?php endwhile; else: ?>
    <p>There are no results for <?php echo get_search_query(); ?></p>

<?php endif; ?>