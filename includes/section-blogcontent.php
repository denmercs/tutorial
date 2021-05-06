<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <?php echo get_the_date('d/m/Y h:i:s');
    the_content();
    
    $fname = get_the_author_meta('first_name');
    $lname = get_the_author_meta('last_name');
    $fullname = $fname . ' ' . $lname;
    ?>

    <p>Posted by <?php echo ($fullname); ?></p>
    
    <?php 
        $tags = get_the_tags(); 
        foreach($tags as $tag): ?>
            <a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>


        <?php endforeach;?>
    ?>
    
<?php endwhile; else: endif; ?>