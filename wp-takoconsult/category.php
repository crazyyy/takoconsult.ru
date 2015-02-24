<?php get_header(); ?>
        <div id="content">
            <?php get_sidebar(); ?>

            <div id="right">
                <div id="text">
                    <div id="path"> <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>
                    </div>
                </div><!-- text -->
                
                <div id="inf">
                    <h1><?php the_category(', '); ?></h1>
                    <?php get_template_part('loop'); ?>
                    <?php get_template_part('pagination'); ?>
                    <div style="clear: both"></div>
                </div><!-- inf -->
            </div><!-- right -->
        </div>

    </td>
</tr>
<?php get_footer(); ?>