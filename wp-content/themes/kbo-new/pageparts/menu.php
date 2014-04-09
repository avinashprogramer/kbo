<?php
	$var_header_nav = array(
		'menu'            => 'header-menu',
		'container'       => '',
		'menu_class'      => '',
		'echo'            => true,
		'items_wrap'      => '<div class="main_menu container"><ul>%3$s</ul></div>'
	);
	wp_nav_menu( $var_header_nav );
?>
<!-- <div class="main_menu container">
	<ul>
		<li class="active home_logo" ><a href="#">
			<img class="logo_dark" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/logo_dark.png">
			<img class="logo_white" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/logo_white.png">
		</a></li>
		<li class="polls"><a href="#">Polls</a></li>
		<li class="update"><a href="#">Updates</a></li>
		<li class="articles"><a href="#">Articles</a></li>
		<li class="burning_issue"><a href="#">Issues</a></li>
		<li class="about_us"><a href="#">About Us</a></li>
	</ul>
	<div class="profile_img">
		<a href="#"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/avatar_84x83.png"></a>
	</div>
</div> -->
