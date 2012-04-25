<?php get_header(); ?>
<!-- common wrapper if any -->
    <?php if (have_posts()) : ?>
        	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
    		<?php /* If this is a category archive */ if (is_category()) { ?>
    		<h2 id="title">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
    		<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
    		<h2 class="title">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
    		<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
    		<h2 class="title">Archive for <?php the_time('F jS, Y'); ?></h2>
    		<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
    		<h2 class="title">Archive for <?php the_time('F, Y'); ?></h2>
    		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
    		<h2 class="title">Archive for <?php the_time('Y'); ?></h2>
    		<?php /* If this is an author archive */ } elseif (is_author()) { ?>
    		<h2 class="title">Author Archive</h2>
    		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
    		<h2 class="title">Blog Archives</h2>
    		<?php } ?>
    		<!-- Entries wrapper -->
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
		
		<?php include(TEMPLATEPATH.'/searhform.php'); ?>

	<?php endif; ?>
    <!-- end common wrapper if any-->
    
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>