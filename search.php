<?php get_header(); ?>

    <!-- common wrapper if any -->
    <?php if (have_posts()) : ?>
     
        <!-- Entries title and wrapper -->
        <?php while (have_posts()) : the_post(); ?>
            <!-- Probably used: 
               <?php the_permalink(); ?>
               <?php the_title();?>
                <?php if($post->post_type=="post"): ?><?php endif ?>
                <?php echo wd($post->post_type) ?>
                <?php the_time('n.j.Y') ?>
                <?php the_category(', ') ?>
                <?php the_excerpt(); ?>
             -->
        <?php endwhile; ?>    
      
      <!-- end entries -->
    <?php else : ?>
	    
        <!-- No posts found title and msg -->
	    
	    <?php include (TEMPLATEPATH . '/searchform.php'); ?>
	<?php endif; ?>
    <!-- end common wrapper if any -->
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>