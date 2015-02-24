<?php /* Template Name: Home Page Template */ get_header(); ?>
        <div id="content">
            <?php putRevSlider("homeslider") ?>
            <?php wpeSideNav(); ?>
            <!--noindex-->

            <div class="carousel_auter">
                <h2>Наши партнеры:</h2>
                <div id="carousel" style="visibility: visible;">
                    <div class="but_left"></div>
                    <div class="but_right"></div>
					<?php 
					$images = get_field('gallery');
					if( $images ): ?>
					    <ul>
					        <?php foreach( $images as $image ): ?>
					            <li>
					            	<img src="<?php echo $image['sizes']['thumbnail']; ?>" width="143" height="59"  title="Компания «РЖД Сервис»" alt="<?php echo $image['alt']; ?>" />
					            </li>
					        <?php endforeach; ?>
					    </ul>
					<?php endif; ?>
            
		            <script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js?ver=1.11.0'></script>
		            <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.admitad.carousel.js"></script>
		            <script>
		                $(document).ready(function () {
		                    $("#carousel").advCompaignCarousel({
		                        speed: 30,
		                        rewSpeed: 180
		                    });
		                });
		            </script>

                </div>
            </div><!-- carousel_auter -->
            <!--/noindex-->

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	            <div id="text">
	                <?php the_content(); ?>
	            </div>
	        <?php endwhile; else: // If 404 page error ?>
				<h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
			<?php endif; ?>
        </div>
    </td>
</tr>
<?php get_footer(); ?>