<?php /* Template Name: Services Page Template */ get_header(); ?>
      <div id="content">
      	<?php get_sidebar(); ?>

            <div id="right">

                <div id="text">
                    <a id="various3" rel="nofollow" href="http://www.takoconsult.ru/services/callback/">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/button_oz.png" alt="" height="38" width="255">
                    </a>

                    <div id="path">	<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>
                    </div>

                </div>

                <h1><?php the_title(); ?></h1>
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		                <?php the_content(); ?>
		        <?php endwhile; else: // If 404 page error ?>
					<h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
				<?php endif; ?>
            </div>
        </div>
    </td>
</tr>

<?php get_footer(); ?>