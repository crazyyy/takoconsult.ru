<?php get_header(); ?>
        <div id="content">
            <?php get_sidebar(); ?>

            <div id="right">
               
                <div id="inf">
                    <h1><?php _e( 'Latest Posts', 'wpeasy' ); ?></h1>
                    <?php get_template_part('loop'); ?>
                    <?php get_template_part('pagination'); ?>
                    <div style="clear: both"></div>
                </div><!-- inf -->
            </div><!-- right -->
        </div>

    </td>
</tr>
<?php get_footer(); ?>