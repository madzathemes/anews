<?php

function anews_top_bar() { ?>

	<?php if ( true == get_theme_mod( 'mt_bar_top', false ) ) { ?>

		<div class="mt-bar mt-top-bar mt-bar-table mt-bar-<?php echo get_theme_mod( 'mt_bar_top_scheme', "light" ); ?> mt-top-bar-<?php echo get_theme_mod( 'mt_bar_top_scheme', "light" ); ?> <?php echo get_theme_mod( 'mt_bar_top_row', "full" ); ?> <?php if( "full" == get_theme_mod( 'mt_bar_top_row', "full" ) or "stretched" == get_theme_mod( 'mt_bar_top_row', "full" ) ) { ?> ful <?php } ?>">

			<div class="mt-bar-out">

				<div class="container">

					<div class="mt-bar-in">

						<div class="text-left">

							<?php if ( 2 == get_theme_mod( 'mt_bar_top_search', 1 ) ) { ?>
								<div class="mt-top-bar-social text-left">
									<?php anews_top_search(); ?>
								</div>
							<?php } ?>

							<?php if ( 2 == get_theme_mod( 'mt_bar_top_menu', 2 ) ) { ?>
								<div class="mt-top-bar-social text-left">
									<?php anews_top_menu(); ?>
								</div>
							<?php } ?>

							<?php if ( 2 == get_theme_mod( 'mt_bar_top_social', 3 ) ) { ?>
								<div class="mt-top-bar-social text-left">
									<?php anews_socials(); ?>
								</div>
							<?php } ?>

							<?php if ( 2 == get_theme_mod( 'mt_bar_top_follower', 1 ) ) { ?>
								<div class="mt-top-bar-social text-left">
									<?php anews_top_follower(); ?>
								</div>
							<?php } ?>

						</div>

						<div class="text-right">

							<?php if ( 3 == get_theme_mod( 'mt_bar_top_follower', 1 ) ) { ?>
								<div class="mt-top-bar-social text-right">
									<?php anews_top_follower(); ?>
								</div>
							<?php } ?>

							<?php if ( 3 == get_theme_mod( 'mt_bar_top_social', 3 ) ) { ?>
								<div class="mt-top-bar-social text-right">
									<?php anews_socials(); ?>
								</div>
							<?php } ?>

							<?php if ( 3 == get_theme_mod( 'mt_bar_top_menu', 2 ) ) { ?>
								<div class="mt-top-bar-social text-right">
									<?php anews_top_menu(); ?>
								</div>
							<?php } ?>

							<?php if ( 3 == get_theme_mod( 'mt_bar_top_search', 1 ) ) { ?>
								<div class="mt-top-bar-social text-right">
									<?php anews_top_search(); ?>
								</div>
							<?php } ?>

						</div>

					</div>

				</div>

			</div>

		</div>

	<?php } ?>

<?php

}

function anews_head_bar() { ?>

	<?php if ( true == get_theme_mod( 'mt_bar_head', true ) ) { $option = get_option("anews_theme_options");?>

		<div class="mt-bar mt-head-bar mt-bar-table mt-bar-<?php echo get_theme_mod( 'mt_bar_head_scheme', "light" ); ?> mt-head-bar-<?php echo get_theme_mod( 'mt_bar_head_scheme', "light" ); ?> <?php echo get_theme_mod( 'mt_bar_head_row', "full" ); ?> <?php if( "full" == get_theme_mod( 'mt_bar_head_row', "full" ) or "stretched" == get_theme_mod( 'mt_bar_head_row', "full" ) ) { ?> ful <?php } ?>">

			<div class="mt-bar-out">

				<div class="container">

					<div class="mt-bar-in">

						<?php if ( 2 == get_theme_mod( 'mt_bar_head_small_menu', 1 ) AND 3 != get_theme_mod( 'mt_bar_head_style', 1 ) AND 4 != get_theme_mod( 'mt_bar_head_style', 1 ) ) { ?>
							<div class="mt-head-bar-small-bt text-left">
								<?php anews_small_button(); ?>
							</div>
						<?php } ?>

						<?php if ( 4 != get_theme_mod( 'mt_bar_head_style', 1 ) and 5 != get_theme_mod( 'mt_bar_head_style', 1 ) ) { ?>
							<div class="mt-head-bar-brand <?php if ( 3 == get_theme_mod( 'mt_bar_head_style', 1 ) ) { ?> text-center <?php } else { ?> text-left <?php } ?>" <?php if(!empty($option['logo_width'])) { ?>  style="width:<?php echo esc_attr($option['logo_width']); ?>px" <?php } ?>>
								<?php anews_logo(); ?>
							</div>
						<?php } ?>

						<?php if ( 3 == get_theme_mod( 'mt_bar_head_small_menu', 1 ) AND 3 != get_theme_mod( 'mt_bar_head_style', 1 ) AND 4 != get_theme_mod( 'mt_bar_head_style', 1 ) ) { ?>
							<div class="mt-head-bar-small-bt text-left">
								<?php anews_small_button(); ?>
							</div>
						<?php } ?>

						<?php if ( 1 == get_theme_mod( 'mt_bar_head_style', 1 ) OR 4 == get_theme_mod( 'mt_bar_head_style', 1 ) OR 5 == get_theme_mod( 'mt_bar_head_style', 1 )) { ?>
							<div class="mt-head-bar-ad <?php if ( 4 == get_theme_mod( 'mt_bar_head_style', 1 ) or 4 == get_theme_mod( 'mt_bar_head_small_menu', 1 ) AND 5 != get_theme_mod( 'mt_bar_head_style', 1 )  ) { ?> text-center <?php } ?> <?php if ( 1 == get_theme_mod( 'mt_bar_head_style', 1 ) and 4 != get_theme_mod( 'mt_bar_head_small_menu', 1 )) { ?> text-right <?php } ?> <?php if ( 1 == get_theme_mod( 'mt_bar_head_style', 1 ) ) { ?> text-left <?php } ?>">
								<?php if(function_exists("mt_header_ad_menu")) { mt_header_ad_menu(); } ?>
							</div>
						<?php } ?>

						<?php if ( 2 == get_theme_mod( 'mt_bar_head_style', 1 ) OR 5 == get_theme_mod( 'mt_bar_head_style', 1 ) ) { ?>
							<div class="mt-head-bar-actions text-right">
								<?php anews_socials(); ?>
							</div>
						<?php } ?>

						<?php if ( 4 == get_theme_mod( 'mt_bar_head_small_menu', 1 ) AND 3 != get_theme_mod( 'mt_bar_head_style', 1 ) AND 4 != get_theme_mod( 'mt_bar_head_style', 1 ) ) { ?>
							<div class="mt-head-bar-small-bt text-right">
								<?php anews_small_button(); ?>
							</div>
						<?php } ?>

					</div>

				</div>

			</div>

		</div>

	<?php } ?>

	<?php if ( true == get_theme_mod( 'mt_bar_menu', true ) ) { ?>


		<div class="mt-bar mt-menu-bar mt-fx-light_ mt-bar-<?php echo get_theme_mod( 'mt_bar_menu_scheme', "light" ); ?> mt-bar-table mt-menu-bar-<?php echo get_theme_mod( 'mt_bar_menu_scheme', "light" ); ?> <?php echo get_theme_mod( 'mt_bar_menu_row', "full" ); ?> <?php if( "full" == get_theme_mod( 'mt_bar_menu_row', "full" ) or "stretched" == get_theme_mod( 'mt_bar_menu_row', "full" ) ) { ?> ful <?php } ?>">

			<div class="mt-bar-out">

				<div class="container">

					<div class="mt-bar-in">

						<?php if ( 2 == get_theme_mod( 'mt_bar_menu_small_menu', 1 ) ) { ?>
							<div class="mt-head-bar-small-bt text-left">
								<?php anews_small_button(); ?>
							</div>
						<?php } ?>


						<div class="mt-menu-bar-brand <?php if ( true == get_theme_mod( 'mt_bar_head', true ) AND ( 1 == get_theme_mod( 'mt_bar_head_style', 1 ) OR 2 == get_theme_mod( 'mt_bar_head_style', 1 ) OR 3 == get_theme_mod( 'mt_bar_head_style', 1 ) ) ){ ?>mt-menu-bar-brand-hidde<?php } ?>">
							<?php anews_logo(); ?>
							<?php anews_fixed_logo(); ?>
						</div>

						<?php if ( 3 == get_theme_mod( 'mt_bar_menu_small_menu', 1 ) ) { ?>
							<div class="mt-head-bar-small-bt text-left">
								<?php anews_small_button(); ?>
							</div>
						<?php } ?>

						<?php if ( 1 != get_theme_mod( 'mt_bar_menu_nav_align', 'left' )){ ?>
							<div class="mt-menu-bar-nav text-<?php echo get_theme_mod( 'mt_bar_menu_nav_align', "left" ) ?>" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
								<?php anews_nav(); ?>
							</div>
						<?php } ?>

						<div class="mt-menu-bar-actions text-right">
							<?php if ( true == get_theme_mod( 'mt_bar_menu_social', false ) ) { ?>
								<?php anews_socials(); ?>
							<?php } ?>
						</div>

						<?php if ( 4 == get_theme_mod( 'mt_bar_menu_small_menu', 1 ) ) { ?>
							<div class="mt-head-bar-small-bt text-right">
								<?php anews_small_button(); ?>
							</div>
						<?php } ?>

					</div>

				</div>

			</div>

		</div>

	<?php } ?>

<?php

}

function anews_mobile_menu() { ?>


	<div class="mt-bar mt-bar-mobile mt-menu-bar hidden mt-bar-<?php echo get_theme_mod( 'mt_bar_menu_scheme', "light" ); ?> mt-bar-table mt-menu-bar-<?php echo get_theme_mod( 'mt_bar_menu_scheme', "light" ); ?> <?php echo get_theme_mod( 'mt_bar_menu_row', "full" ); ?> <?php if( "full" == get_theme_mod( 'mt_bar_menu_row', "full" ) or "stretched" == get_theme_mod( 'mt_bar_menu_row', "full" ) ) { ?> ful <?php } ?>">

		<div class="mt-bar-out">

			<div class="container">

				<div class="mt-bar-in">


						<div class="mt-head-bar-small-bt">
							<?php anews_small_button(); ?>
						</div>



					<div class="mt-menu-bar-brand">
						<?php anews_logo(); ?>
					</div>


				</div>

			</div>

		</div>

	</div>

<?php

}

function anews_header() {

if ( false == get_theme_mod( 't_p_to_search', false ) ) { $t_p_to_search = esc_html__("To search type and hit enter", "anews");  } else { $t_p_to_search = get_theme_mod( 't_p_to_search' ); }
$allowed_html = array('ins' => array( 'class' => array(), 'style' => array(),'data-ad-client' => array(),'data-ad-slot' => array(),'data-ad-format' => array()), 'iframe' => array( 'id' => array(),'name' => array(),'src' => array(),'style' => array(),'scrolling' => array(),'frameborder' => array()), 'script' => array( 'async' => array(), 'type' => array(),'src' => array()), 'noscript' => array(), 'small' => array( 'class' => array()), 'img' => array( 'src' => array(), 'alt' => array(), 'class' => array(), 'width' => array(), 'height' => array() ), 'a' => array( 'href' => array(), 'title' => array() ), 'br' => array(), 'i' => array('class' => array()),  'em' => array(), 'strong' => array(), 'div' => array('class' => array()), 'span' => array('class' => array()));
$option = get_option("anews_theme_options");
$optioz = get_option("magazin_theme_options");
$page_option = get_post_meta(get_the_ID(), "magazin_menu_background_width", true);
if(!empty($page_option)) {
	if($page_option=="2") {
		$menu_full =  'menu-background';
		$menu_boxed =  '';
	} else {
		$menu_full =  '';
		$menu_boxed =  'menu-background';
	}
}
else if(!empty($option['menu_background_width'])) {
	if($option['menu_background_width']=="full") {
		$menu_full =  'menu-background';
		$menu_boxed =  '';
	} else {
		$menu_full =  '';
		$menu_boxed =  'menu-background';
	}
} else {
	$menu_full =  '';
	$menu_boxed =  'menu-background';
}
?>


<div class="mt-header <?php if ( true == get_theme_mod( 'mt_bar_menu', true ) ) {  ?>mt-header-sticky<?php } ?>" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
<div>
	<?php anews_top_bar(); ?>
	<?php anews_head_bar(); ?>
	<?php anews_mobile_menu(); ?>
</div>


	<div class="hidden header-menu mt-header-container <?php if(!empty($option['menu_search'])) { if($option['menu_search']=="1") { ?>search-on<?php } } if(!empty($option['menu_small_on'])) { ?> small-on<?php } ?> ">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="top-nav container-fluid">



						<div class="nav-button mt-radius pointer  <?php if ( false == get_theme_mod( 'mt_menu_small_on', false ) ) { echo "hide-desktop"; } ?>">
							<div class="mt-m-cool-button">
								<span class="mt-m-cool-button-line"></span>
							</div>
						</div>

						<div class="head-logo" <?php if(!empty($option['logo_width'])) { ?>  style="width:<?php echo esc_attr($option['logo_width']); ?>px" <?php } ?>><?php anews_logo(); ?></div>

						<div class="nav mt-radius" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" >
							<?php anews_nav(); ?>
						</div>


						<div class="mt-head-right">
						<?php if ( true == get_theme_mod( 'mt_menu_search', false ) ) { ?>
							<div class="nav-search-wrap  mt-radius">
								<div class="nav-search pointer"></div>
								<div class="nav-search-input mt-radius">
									<form method="get" action="<?php echo esc_url(home_url('/')); ?>/">
										<input type="text" placeholder="<?php echo esc_html($t_p_to_search); ?>"  name="s" >
									</form>
								</div>
							</div>
							<div class="search-close"></div>
						<?php } ?>
							<?php anews_socials(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<?php if  (!empty($optioz['header_ad_top'])) {  ?>
	<div class="mt-t-ad">
		<div class="mt-t-ad-in">
			<?php echo html_entity_decode($optioz['header_ad_top']); ?>
		</div>
	</div>
<?php } ?>
<?php } add_filter('anews_header','anews_header');

function anews_small_button() { ?>
	<div class="nav-button mt-radius pointer">
		<div class="mt-m-cool-button">
			<span class="mt-m-cool-button-line"></span>
		</div>
	</div>
<?php }

function anews_top_follower() { ?>
	<?php if ( false == get_theme_mod( 't_o_followers', false ) ) { $t_o_followers = esc_html__("Followers", "anews");  } else { $t_o_followers = get_theme_mod( 't_o_followers' ); } ?>
	<div class="mt-top-followers mt-top-share">
		<strong></strong> <span><?php echo esc_html($t_o_followers); ?></span>
	</div>
<?php }

function anews_top_search() { ?>
	<?php if ( false == get_theme_mod( 't_o_followers', false ) ) { $t_o_followers = esc_html__("Followers", "anews");  } else { $t_o_followers = get_theme_mod( 't_o_followers' ); } ?>

<?php }

function anews_top_content() { $option = get_option("anews_theme_options"); ?>
		<div class="head-nav">
			<?php if(!empty($option['url_latest'])) { ?><a class="mt_l_latest <?php if($option['url_latest']==get_the_ID()) { ?>active<?php } ?>" href="<?php echo get_permalink(esc_html($option['url_latest'])); ?>"><?php esc_html_e( 'LATEST', 'anews' ); ?> <span><?php esc_html_e( 'Posts', 'anews' ); ?></span></a><?php } ?>
			<?php if(!empty($option['url_popular'])) { ?><a class="mt_l_popular <?php if($option['url_popular']==get_the_ID()) { ?>active<?php } ?>" href="<?php echo get_permalink(esc_html($option['url_popular'])); ?>"><?php esc_html_e( 'POPULAR', 'anews' ); ?> <span><?php esc_html_e( 'Posts', 'anews' ); ?></span></a><?php } ?>
			<?php if(!empty($option['url_hot'])) { ?><a class="mt_l_hot <?php if($option['url_hot']==get_the_ID()) { ?>active<?php } ?>" href="<?php echo get_permalink(esc_html($option['url_hot'])); ?>"><?php esc_html_e( 'HOT', 'anews' ); ?> <span><?php esc_html_e( 'Posts', 'anews' ); ?></span></a><?php } ?>
			<?php if(!empty($option['url_trending'])) { ?>	<a class="mt_l_trending <?php if($option['url_trending']==get_the_ID()) { ?>active<?php } ?>" href="<?php echo get_permalink(esc_html($option['url_trending'])); ?>"><?php esc_html_e( 'TRENDING', 'anews' ); ?> <span><?php esc_html_e( 'Posts', 'anews' ); ?></span></a><?php } ?>
		</div>

		<?php if(!empty($option['header_link_url'])) { ?>
				<div class="head-bookmark">
					<a class="mt-radius" href="<?php echo esc_url($option['header_link_url']);  ?>" <?php if(!empty($option['header_link_blank'])) { if($option['header_link_blank']=="1") {?>target="_blank" <?php }} ?>><?php echo esc_attr(get_theme_mod('anews_header_link_name', 'Add Post')); ?></a>
				</div>
		<?php } ?>
<?php }
add_filter('anews_top_content','anews_top_content');

function anews_logo() {

	$option = get_option("anews_theme_options");

	// Fix for SSL
	if(!empty($option['header_logo'])) {
		$header_logo = esc_url($option['header_logo']);
		if(is_ssl() and 'http' == parse_url($header_logo, PHP_URL_SCHEME) ){
				$header_logo = str_replace('http://', 'https://', $header_logo);
		}
	}
	if(!empty($option['header_logox2'])) {
		$header_logo2 = esc_url($option['header_logox2']);
		if(is_ssl() and 'http' == parse_url($header_logo2, PHP_URL_SCHEME) ){
				$header_logo2 = str_replace('http://', 'https://', $header_logo2);
		}
	}

	if(!empty($option['header_logo'])) { ?>
		<a class="logo logo-header" <?php if(!empty($option['header_logo_h'])) { ?>  style="height:<?php echo esc_attr($option['header_logo_h']); ?>" <?php } ?>  href="<?php echo esc_url(home_url('/'));?>">
			<img <?php if(!empty($option['header_logo_w'])) { ?>  width="<?php echo esc_attr($option['header_logo_w']); ?>" <?php } if(!empty($option['header_logo_h'])) { ?>  height="<?php echo esc_attr($option['header_logo_h']); ?>" <?php } ?>
			src="<?php echo esc_url($header_logo); ?>"
			srcset="<?php echo esc_url($header_logo); ?>, <?php if(!empty($option['header_logox2'])) { echo esc_url($header_logo2); } ?> 2x"  alt="<?php echo the_title(); ?>"  />
		</a>
	<?php } else { ?>
		<a class="logo logo-header"  href="<?php echo esc_url(home_url('/'));?>">
			<img src="<?php echo get_template_directory_uri(); ?>/inc/img/logo.png" width="168" height="78" alt="<?php echo the_title(); ?>" />
		</a>
	<?php }
}

add_filter('anews_logo','anews_logo');

function anews_fixed_logo() {

	$option = get_option("anews_theme_options");

	// Fix for SSL
	if(!empty($option['fixed_logo'])) {
		$header_logo = esc_url($option['fixed_logo']);
		if(is_ssl() and 'http' == parse_url($header_logo, PHP_URL_SCHEME) ){
				$header_logo = str_replace('http://', 'https://', $header_logo);
		}
	}
	if(!empty($option['fixed_logo2'])) {
		$header_logo2 = esc_url($option['fixed_logo2']);
		if(is_ssl() and 'http' == parse_url($header_logo2, PHP_URL_SCHEME) ){
				$header_logo2 = str_replace('http://', 'https://', $header_logo2);
		}
	}

	if(!empty($option['fixed_logo'])) { ?>
		<a class="logo logo-fixed"  href="<?php echo esc_url(home_url('/'));?>">
			<img width="<?php echo get_theme_mod( 'mt_fixed_menu_logo_w', '200px'); ?>" <?php if(!empty($option['fixed_menu_logo_h'])) { ?>  height="<?php echo esc_attr($option['fixed_menu_logo_h']); ?>" <?php } ?>
			src="<?php echo esc_url($header_logo); ?>"
			srcset="<?php echo esc_url($header_logo); ?>, <?php if(!empty($option['fixed_logo2'])) { echo esc_url($header_logo2); } ?> 2x"  alt="<?php echo the_title(); ?>"  />
		</a>
	<?php }
}

add_filter('anews_fixed_logo','anews_fixed_logo');

function anews_logo_mobile() {

	$option = get_option("anews_theme_options"); ?>

	<?php if(!empty($option['mobile_logo'])) { ?>
		<a href="<?php echo esc_url(home_url('/'));?>">
			<img src="<?php echo esc_url($option['mobile_logo']); ?>" alt="<?php echo the_title(); ?>"  />
		</a>
	<?php } else { ?>
		<a href="<?php echo esc_url(home_url('/'));?>">
			<img src="<?php echo get_template_directory_uri(); ?>/inc/img/logo.png" alt="<?php echo the_title(); ?>" />
		</a>
	<?php }
}
add_filter('anews_logo_mobile','anews_logo_mobile');

function anews_nav() {
	if(class_exists('md_walker__')) {
		wp_nav_menu( array('theme_location'=>"primary",  'menu_class' => 'sf-menu', 'walker'	=> new md_walker, 'echo' => true, 'depth' => 3, 'fallback_cb' => false));
	} else {
		wp_nav_menu( array('theme_location'=>"primary",  'menu_class' => 'sf-menu', 'echo' => true, 'depth' => 3));
	}
}
add_filter('anews_nav','anews_nav');

function anews_nav_fixed() {
	wp_nav_menu( array('theme_location'=>"primary",  'menu_class' => 'fixed-menu-ul',  'echo' => true, 'depth' => 1));
}
add_filter('anews_nav_fixed','anews_nav_fixed');

function anews_nav_mobile() {
	wp_nav_menu( array('theme_location'=>"mobile",  'menu_class' => 'mobile',  'echo' => true, 'depth' => 2));
}
add_filter('anews_nav_mobile','anews_nav_mobile');

function anews_top_menu() {
	wp_nav_menu( array('theme_location'=>"top_menu",  'menu_class' => 'top-menu',  'echo' => true, 'depth' => 1));
}
add_filter('anews_top_menu','anews_top_menu');

function anews_socials() { ?>
	<ul class="social"> <?php
			$option = get_option("anews_theme_options");
			if(!empty($option['mt_icon_twitter'])) {?><li><a <?php if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_twitter']); ?>"><i class="ic-twitter"></i></a></li><?php }
			if(!empty($option['mt_icon_facebook'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_facebook']); ?>" ><i class="ic-facebook"></i></a></li><?php }
			if(!empty($option['mt_icon_intagram'])) {?><li><a <?php if(!empty($option['mt_icon_blank'])) {  if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_intagram']); ?>" ><i class="ic-instagram"></i></a></li><?php }
			if(!empty($option['mt_icon_vimeo'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_vimeo']); ?>"><i class="ic-vimeo"></i></a></li><?php }
			if(!empty($option['mt_icon_youtube'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_youtube']); ?>"><i class="ic-youtube-play"></i></a></li><?php }
			if(!empty($option['mt_icon_linkedin'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_linkedin']); ?>"><i class="ic-linkedin"></i></a></li><?php }
			if(!empty($option['mt_icon_gplus'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_gplus']); ?>"><i class="ic-google-plus"></i></a></li><?php }
			if(!empty($option['mt_icon_dribble'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_dribble']); ?>"><i class="ic-dribbble"></i></a></li><?php }
			if(!empty($option['mt_icon_skype'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_skype']); ?>"><i class="ic-skype"></i></a></li><?php }
			if(!empty($option['mt_icon_pinterest'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_pinterest']); ?>"><i class="ic-pinterest"></i></a></li><?php }
			if(!empty($option['mt_icon_rss'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_rss']); ?>"><i class="ic-rss"></i></a></li><?php }
			?>
	</ul><?php
} add_filter('anews_socials','anews_socials');
?>
