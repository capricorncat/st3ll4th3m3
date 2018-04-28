<!DOCTYPE html> 
<html <?php language_attributes(); ?>>
	<head><?php wp_head(); ?></head>
	<body <?php body_class(); ?>>
		<?php get_sidebar(); ?>
		<div id="pushable" class="pusher">
				
<header id="header">

	<div id="headermenu" class="ui fluid inverted borderless three item icon menu">
		
		<a id="railtoggle" class="left item">
			<i class="bars icon"></i>
		</a>
		
		<a class="center item" href="<?php echo site_url(); ?>">
			<?php bloginfo('name'); ?>
		</a>
		
		<a id="searchtoggle" class="right item">
			<i class="search icon"></i>
		</a>
		
	</div><!-- /#headermenu -->

	<div id="headersearch" class="invisible">
		<?php get_search_form(); ?>
	</div><!-- /#headersearch -->

</header><!-- /#header -->
			
<div id="wrap">
				
	<div class="left deco" style="background-image: url('<?php echo get_theme_file_uri('dist/images/silver-deco-left.png'); ?>');"></div>
	
	<main id="main">
		<div id="page" class="ui text container">