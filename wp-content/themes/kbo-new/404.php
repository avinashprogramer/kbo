<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=1000" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/custom/compiled.css" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<?php //$ip = get_client_ip(); ?>

<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.cycle2.js" type="text/javascript"></script>
<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/bootstrap.js" type="text/javascript"></script>
<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/required.js" type="text/javascript"></script>

</head>

<body>
    <div class="global">
        <header class="header">
            <?php require_once('pageparts/menu.php'); ?>
        </header>
            <div class="main homepage">
                <div class="container">
                    <div class="container error_page_container">
                        <div class="error_page_content">
                            <h2>Sorry. We could not find the page that you requested.</h2>
                        </div>
                        <div class="error_page_link">
                            <a href="<?php echo home_url(); ?>">Visit Home Page</a>
                        </div>
                    </div>
                </div>
            </div>
         <footer class="footer">
            
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>