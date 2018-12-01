<?php

function ju_recent_recipes_tab(){
	add_action( 'bp_template_title', 'ju_buddypress_recipe_posts_title' );
	add_action( 'bp_template_content', 'ju_buddypress_posts_content' );

	bp_core_load_template(
		apply_filters( 'bp_core_template_plugin', 'members/single/plugins' )
	);
}

function ju_buddypress_recipe_posts_title(){
	?>
	<div class="text-center">My Recipes</div>
	<?php
}

function ju_buddypress_posts_content(){
	$profile_user_id                =   bp_displayed_user_id();

	if( empty($profile_user_id) ){
		return;
	}

	$posts                          =   new WP_Query([
		'author'                    =>  $profile_user_id,
		'posts_per_page'            =>  10,
		'post_type'                 =>  'recipe'
	]);

	if( $posts->have_posts() ){
		?><div class="col-md-8 col-md-offset-2"><?php

		while( $posts->have_posts() ){
			$posts->the_post();

			get_template_part( 'partials/post/content-excerpt' );
		}

		?></div><?php

		wp_reset_postdata();
	}
}