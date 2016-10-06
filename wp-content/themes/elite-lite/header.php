<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
        <?php
        wp_head();
        ?>
    </head>
    <body <?php body_class(); ?> id="regal_body">
        <div class="wrapper">
            <div class="container_24">
                <div class="grid_24 main-container-wrapper">
                    <div class="main-container home">
                        <div class="header">
                            <div class="logo"> <a href="<?php echo home_url(); ?>"><img src="<?php if (elite_get_option('elite_logo') != '') { ?><?php echo elite_get_option('elite_logo'); ?><?php } else { ?><?php echo get_template_directory_uri(); ?>/images/logo.png<?php } ?>" alt="<?php bloginfo('name'); ?>" /></a></div>
                        </div>
                        <div class="clear"></div>
                        <!--Start Menu wrapper-->
                        <div class="menu_wrapper">

                            <div id="MainNav">
                                <a href="#" class="mobile_nav closed"><?php _e('Pages Navigation Menu', 'elite-lite'); ?><span></span></a>
                                <?php elite_nav(); ?>
                            </div>

                        </div>
                        <!--End Menu-->
                        <div class="clear"></div>
