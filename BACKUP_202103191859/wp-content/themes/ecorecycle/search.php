<?php if (have_posts()) { ?>
	<?php get_template_part('category'); ?>
<?php } else { ?>
	<?php get_header(); ?>
	<?php 
		global $pmc_data; 
		if(is_plugin_active( 'page-builder-pmc/page-builder-pmc.php')) { 
			$post_custom = get_post_custom($post->ID); 
			echo do_shortcode( '[template id="'.$pmc_data['top_content_blog'].'"]' );
		}?>
		<div class="mainwrap blog">
			<div class="main clearfix">		
				<div class="content blog">
				<div class="search-no-resault">
					<?php _e('Nada foi encontrado para o termo de pesquisa!','pmc-themes'); ?>
				</div>
				<div class="one_fourth">
					<?php the_widget( 'WP_Widget_Search','title='.__("Tente novamente","pmc-theme")); ?> 
				</div>
				<div class="one_fourth">
					<?php the_widget( 'WP_Widget_Categories'); ?> 
				</div>	
				<div class="one_fourth">
					<?php the_widget( 'WP_Widget_Archives'); ?> 
				</div>		
				<div class="one_fourth last">
					<?php the_widget( 'WP_Widget_Tag_Cloud'); ?> 
				</div>					
				</div>
			</div>
		</div>

	<?php get_footer(); ?>
<?php }  ?>