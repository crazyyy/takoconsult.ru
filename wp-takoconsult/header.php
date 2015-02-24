<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

    <!-- meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">

    <!-- css + javascript -->
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?> oncopy="return false" hola-ext-player="1">
    <table cellspacing="0" cellpadding="0" border="0" id="main">
        <tbody>
            <tr>
                <td class="cont">
                    <div id="header">
                        <!-- logo -->
                        <div class="logo">
                            <?php if ( is_front_page() && is_home() ){ } else { ?>
                            <a href="<?php echo home_url(); ?>">
                            <?php  } ?>
                            <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
                            <img width="219" height="81" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">   
                            <?php if ( is_front_page() && is_home() ){ 
                            } else { ?>
                            </a>
                            <?php } ?>
                        </div>
                        <!-- /logo -->

                        <div id="right_head">
                            <span id="title"><p>Законодательство должно быть голосом разума, а&nbsp;судья&nbsp;– голосом закона.</p>Пифагор</span>  <span class="tel">+7 499 579-8008<br>+7 499 579-8007</span>
                            <?php wpeHeadNav(); ?>
                        </div>
                    </div><!-- #header -->