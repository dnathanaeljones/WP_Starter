<?php get_header(); ?>

		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	         <!-- Probably used: 
                   <?php the_permalink(); ?>
                   <?php the_title();?>
                    <?php if($post->post_type=="post"): ?><?php endif ?>
                    <?php echo wd($post->post_type) ?>
                    <?php the_time('n.j.Y') ?>
                    <?php the_category(', ') ?>
                    <?php the_content(); ?>
                    <?php the_tags(); ?>
                    <?php comments_number('No Comments', 'One Comment', '% Comments' ); ?>
                 -->
                 
		<?php endwhile; else : ?>

	
		<?php endif; ?>
	
		<div class="navigation clear">
			<div class="left"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="right"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
		
		

<?php get_sidebar(); ?>

<?php get_footer(); ?>