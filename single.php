<?php get_header(); ?>



	<?php while(have_posts()) : the_post(); ?>

	     <!-- Probably used: 
               <?php the_permalink(); ?>
               <?php the_title();?>
                <?php if($post->post_type=="post"): ?><?php endif ?>
                <?php echo wd($post->post_type) ?>
                <?php the_time('n.j.Y') ?>
                <?php the_category(', ') ?>
                <?php the_content(); ?>
                <?php the_tags(); ?>
             -->
		
        <!-- comment wrap -->
			<?php comments_template(); ?>
        <!-- end comment wrap -->

	<?php endwhile; ?>
	
	

<?php get_sidebar(); ?>

<?php get_footer(); ?>