<?php global $pmc_data; ?>
<?php  $portfolio = get_post_custom( get_the_id()); ?>
<!-- top bar with breadcrumb and post navigation -->

<!-- main content start -->
<div class="mainwrap single-default">
	<?php if (have_posts()) : while (have_posts()) : the_post();  $postmeta = get_post_custom(get_the_id());  ?>
	<div class="main clearfix">	
	<div class="content singledefult">
		<div class="postcontent singledefult" id="post-<?php  get_the_id(); ?>" <?php post_class(); ?>>		
			<div class="blogpost">		
				<div class="posttext">
					<?php if ( !has_post_format( 'gallery' , get_the_id())) { ?>
						 
						<div class="blogsingleimage">			
							
							<?php	
							if ( !get_post_format() ) {
						
								
							?>
								<?php echo pmc_getImage(get_the_id(), 'blog'); ?>
							<?php } ?>
							<?php if ( has_post_format( 'video' , get_the_id())) {?>
							
								<?php  
									$video = '';

									$video_arg  = '';
									$video = wp_oembed_get( $postmeta["video_post_url"][0], $video_arg );		
									$video = preg_replace('/width=\"(\d)*\"/', 'width="570"', $video);			
									$video = preg_replace('/height=\"(\d)*\"/', 'height="420"', $video);	
									echo $video;	
								?>
							<?php
							}
							else if (isset($portfolio['show_video'][0]) && isset($portfolio['video'][0])){
								$video = '';
								$video_arg  = '';
								$video = wp_oembed_get( $portfolio['video'][0], $video_arg );		
								$video = preg_replace('/width=\"(\d)*\"/', 'width="800"', $video);			
								$video = preg_replace('/height=\"(\d)*\"/', 'height="460"', $video);	
								echo $video;							
							}
							?>	
							<?php if ( has_post_format( 'audio' , get_the_id())) {?>
							<div class="audioPlayer">
								<?php 
								if(isset($postmeta["audio_post_url"][0]))
									echo do_shortcode('[audio file="'. $postmeta["audio_post_url"][0] .'"]') ?>
							</div>
							<?php
							}
							?>	
							<?php if(has_post_format( 'video' , get_the_id())){ ?>
								<div class = "meta videoGallery">
							<?php } 
							
							else {?>
								<div class = "meta">
							<?php } 		
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
									echo $post_icon;?>
									<span><?php the_time('F j, Y') ?></span>  <span><?php echo '<em>' . get_the_category_list( __( ', ', 'pmc-themes' ) ) . '</em>'; ?></span> <a href="#commentform"><?php comments_number(); ?></a>
								</div>	
							
						</div>
					<?php } else {?>
						<?php
						global $post;
						$post_subtitrare = get_post( get_the_id() );
						$content = $post_subtitrare->post_content;
						$pattern = get_shortcode_regex();
						preg_match( "/$pattern/s", $content, $match );
						if( isset( $match[2] ) && ( "gallery" == $match[2] ) ) {
							$atts = shortcode_parse_atts( $match[3] );
							$attachments = isset( $atts['ids'] ) ? explode( ',', $atts['ids'] ) : get_children( 'post_type=attachment&post_mime_type=image&post_parent=' . get_the_id() .'&order=ASC&orderby=menu_order ID' );
						}
						if ($attachments) {?>
						<div class="gallery-single">
						<?php
							foreach ($attachments as $attachment) {
								$title = '';
								//echo apply_filters('the_title', $attachment->post_title);
								$image =  wp_get_attachment_image_src( $attachment, 'gallery' ); 	 
								$imagefull =  wp_get_attachment_image_src( $attachment, 'full' ); 	 ?>
									<div class="image-gallery">
										<a href="<?php echo $imagefull[0] ?>" rel="lightbox[single-gallery]" title="<?php the_title(); ?>"><div class = "over"></div>
											<img src="<?php echo $image[0] ?>" alt="<?php the_title(); ?>"/>			
										</a>	
									</div>			
									<?php } ?>
						</div>
						<div class="bottomborder"></div>
						<?php } ?>
							<div class = "meta videoGallery">
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
								echo $post_icon;?>								
								<?php the_time('F j, Y') ?> <?php _e('By ','pmc-themes') ?> <?php echo get_the_author_link() ?> - <a href="#commentform"><?php comments_number(); ?></a>
								</div>	
					<?php }  ?>
					<div class="sentry">
						<?php if ( has_post_format( 'video' , get_the_id())) {?>
							<div><?php the_content(); ?></div>
						<?php
						}
					    if ( has_post_format( 'audio' , get_the_id())) { ?>
							<div><?php the_content(); ?></div>
						<?php
						}						
						if(has_post_format( 'gallery' , get_the_id())){?>
							<div class="gallery-content"><?php the_content(); 	?></div>
						<?php } 
						if( !get_post_format()){?> 
						    <?php add_filter('the_content', 'pmc_addlightbox'); ?>
							<div><?php the_content(); ?></div>		
						<?php } ?>
						<div class="post-page-links"><?php wp_link_pages(); ?></div>
						<div class="singleBorder"></div>
					</div>
				</div>
				
				<?php if(has_tag()) { ?>
					<div class="tags"><i class = "fa fa-tags"></i><?php the_tags('',', ',''); ?></div>	
				<?php } ?>
				
				<div class="share-post">
					<div class="share-post-title">
						<h3><?php _e('Compartilhe','pmc-themes') ?></h3>
					</div>
					<div class="share-post-icon">
						<div class="socialsingle"><?php pmc_socialLinkSingle() ?></div>	
					</div>
				</div>
				
				<div class = "author-info-wrap">
				<div class="blogAuthor">
					<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo get_avatar($comment, 100); ?></a>
				</div>
					<div class="authorBlogName">	
						<?php _e('Publicado por ','pmc-themes'); ?> <?php echo get_the_author(); ?>  
					</div>
					<div class = "bibliographical-info"><?php echo get_the_author_meta('description')?></div>
				</div>
				
			</div>						
			
		</div>	
		
		<?php
		$posttags = wp_get_post_tags(get_the_id(), array( 'fields' => 'ids' ));
		$query_custom = new WP_Query(
			array( "tag__in" => $posttags,
				   "orderby" => 'rand',
				   "showposts" => 4,
				   "post__not_in" => array(get_the_id())
			) );
		if ($query_custom->have_posts()) : ?>
			<div class="titleborderOut">
				<div class="titleborder"></div>
			</div>
			<div class="relatedtitle">
				<h3><?php  _e('Conte&uacute;do Relacionado','pmc-themes'); ?></h3>
			</div>
			<div class="related">	
			
			<?php
			$count = 0;
			while ($query_custom->have_posts()) : $query_custom->the_post(); 
				if(pmc_getImage(get_the_id(), 'related') !=''){
					$image_related = pmc_getImage(get_the_id(), 'related');
				}
				else{
					$image_related = '<img src="http://placehold.it/180x90">';
				}
				if($count != 3){ ?>
					<div class="one_fourth">
				<?php } else { ?>
					<div class="one_fourth last">
				<?php } ?>
						<div class="image"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php echo $image_related ?></a></div>
						<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h4>			
					</div>
						
				<?php 
				$count++;
			endwhile; ?>
			</div>
		<?php endif;
		wp_reset_postdata(); 
		
		?>	
	
	
	<?php comments_template(); ?>
					
	<?php endwhile; else: ?>
					
		<?php get_template_part('404'); ?>
	<?php endif; ?>
	</div>
	<!-- main sidebar -->
	<?php get_sidebar(); ?>
</div>
</div>