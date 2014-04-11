<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes();?>>
	<head>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type');?>; charset=<?php bloginfo('charset');?>" />
		<title><?php wp_title('|', true, 'right');?></title>
		<link rel="pingback" href="<?php bloginfo('pingback_url');?>" />
		<?php wp_head();?>
	</head>
	<body <?php body_class();?> >
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-XXXXXX-XX', 'example.com');
			ga('require', 'displayfeatures');
			ga('send', 'pageview');
		</script>
		<div id="header">
			<div class="container_12 nav">
			<?php  if (is_home() || is_front_page()) {
			?>
			<h1 class="grid_12"><a href="<?php echo home_url();?>"><?php bloginfo('name');?></a></h1>
			<?php } else {?>
			<h2 class="grid_12"><a href="<?php echo home_url();?>"><?php bloginfo('name');?></a></h2>
			<?php }?>
			<?php  wp_nav_menu(array('sort_column' => 'menu_order', 'Primary Navigation', 'theme_location' => 'primary', 'container' => '', 'menu_class' => 'menu', 'fallback_cb' => false));?>
		</div>
		</div>