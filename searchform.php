
<form class="ui mini action input" method="get" 
			action="<?php echo esc_url( home_url( '/' ) ); ?>">

	<label class="sr-only" >
		<?php _e('Search for:','st3ll4th3m3'); ?>
	</label><!-- /#headerSearchFormLabel -->

	<input class="prompt" placeholder="Search..." name="s" 
				 value="<?php echo get_search_query(); ?>" /><!-- /#headerSearchFormInput -->

	<button class="ui mini icon submit button"><i class="search icon"></i></button>

</form><!-- /#headerSearchForm -->