<?php global $pmc_data; ?>
	<div class="entry">
		<div class = "meta">
			<div class="topLeftBlog">	
				<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				
				<div class = "post-meta">
					<?php 
					$post_icon = '<div class="post-icon"><i class="fa fa-pencil"></i></div>';
					if ( has_post_format( 'gallery' , get_the_id())) {
						$post_icon = '<div class="post-icon"><i class="fa fa-picture-o"></i></div>';
					}
					if ( has_post_format( 'video' , get_the_id())) {
						$post_icon = '<div class="post-icon"><i class="fa fa-video-camera"></i></div>';
					}
					if ( has_post_format( 'audio' , get_the_id())) {
						$post_icon = '<div class="post-icon"><i class="fa fa-microphone"></i></div>';
					}
					echo $post_icon;
					?>
					<span><?php the_time('F j, Y') ?></span>  <span><?php echo '<em>' . get_the_category_list( __( ', ', 'pmc-themes' ) ) . '</em>'; ?></span> <a href="#commentform"><?php comments_number(); ?></a>
				</div>	
			</div>
			
			<div class="blogContent">
				<div class="blogcontent"><?php the_excerpt() ?></div>
				<a class="blogmore" href="<?php the_permalink() ?>"><?php _e('Ler mais','pmc-themes'); ?> </a>
			</div>
		</div>		
	</div>