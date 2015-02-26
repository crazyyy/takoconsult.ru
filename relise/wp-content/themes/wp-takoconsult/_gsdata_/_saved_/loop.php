<?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class('news_block clearfix looper'); ?>>
    	<span class="date"><?php the_time('j F Y'); ?> <?php the_time('G:i'); ?></span>
    	<!-- post thumbnail -->
		<a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php if ( has_post_thumbnail()) :
				the_post_thumbnail('medium');	
			else: ?>
			<img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
		<?php endif; ?></a>
		<!-- /post thumbnail -->
        <div class="news_title">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
        </div>
        <?php wpeExcerpt('wpeExcerpt40'); ?>
        <div class="news_split"></div>
    </div>
	<?php endwhile; else: ?>

	<!-- article -->
	<article>
		<h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
