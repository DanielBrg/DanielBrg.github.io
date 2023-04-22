<?phpclass AQ_Start_Content_Block extends AQ_Block {		//set and create block	function __construct() {		$block_options = array(			'name' => 'Start Content',			'size' => 'span12',			'resizable' => 0,			'icon' => 'fa-dot-circle-o',			'icon_color' => 'FFF',			'category' => 'Structure',			'help' => 'This is the start content block. If you wish the content to be centered and not fullwidth, it must be placed bettween start and end blocks.'		);				//create the block		parent::__construct('aq_start_content_block', $block_options);	}		function form($instance) {				$defaults = array(			'color' => '#fff',			'border_color' => '#fff',			'backgroundimage' => '',			'paddingtop' => '0',			'paddingbottom' => '0',			'bordertopbottom' => '0',			'backgroundvideo' => '',			'backgroundvideo_opera' => '',			'backgroundvideo_safari' => '',			'video_text' => '',						'show_video' => 0,							'icon' => '',			'show_icon' => 0,				'use_parallax' => 0,			'video_auto_play' => 0,						'video_height' => '400',			'use_rain' => 0,			'full_width_rain_image' => 0,			'custom_class' => '',			'use_miniheader_class' => 0,			'use_shop_class' => 0,		);				$instance = wp_parse_args($instance, $defaults);		extract($instance);						?>		<p class="description note">			<?php _e('Use this block to create main content block after top Wrappers.', 'pmc-themes') ?>		</p>		<div class="description third box" >			<h3>Image settings</h3>			<p class="description">			<label for="<?php echo $this->get_field_id('color') ?>">				Background color<br/>				<?php echo aq_field_color_picker('color', $block_id, $color, $defaults['color']) ?>			</label>			</p>			<label for="<?php echo $this->get_field_id('backgroundimage') ?>">				Background image (image must be inside this WP install (in media library))<br/>				<?php echo aq_field_upload('backgroundimage', $block_id, $backgroundimage) ?>			</label>						<label for="<?php echo $this->get_field_id('use_parallax') ?>">				<?php echo aq_field_checkbox('use_parallax', $block_id, $use_parallax); ?>				Use parallax (can't be used with rain effect)?			</label>			<br>			<label for="<?php echo $this->get_field_id('use_rain') ?>">				<?php echo aq_field_checkbox('use_rain', $block_id, $use_rain); ?>				Use Rain effect?			</label>			<br>						<label for="<?php echo $this->get_field_id('full_width_rain_image') ?>">				<?php echo aq_field_checkbox('full_width_rain_image', $block_id, $full_width_rain_image); ?>				Use rain image full width (cover the screen)?			</label>						</div>					<div class="description third box">			<h3>Border settings</h3>			<label for="<?php echo $this->get_field_id('bordertopbottom') ?>">				Border width (at top and bottom of the block)<br/>				<?php echo aq_field_input('bordertopbottom', $block_id, $bordertopbottom) ?>			</label>			<p class="description">			<label for="<?php echo $this->get_field_id('border_color') ?>">				Border color<br/>				<?php echo aq_field_color_picker('border_color', $block_id, $border_color, $defaults['border_color']) ?>			</label>				</p>		</div>			<div class="description third last box">,			<h3>Padding settings</h3>			<label for="<?php echo $this->get_field_id('paddingtop') ?>">				Padding top (use only if you are setting an image as background)<br/>				<?php echo aq_field_input('paddingtop', $block_id, $paddingtop) ?>			</label>			<label for="<?php echo $this->get_field_id('paddingbottom') ?>">				Padding bottom (use only if you are setting an image as background)<br/>				<?php echo aq_field_input('paddingbottom', $block_id, $paddingbottom) ?>			</label>				<div class="custom-class">			<label for="<?php echo $this->get_field_id('custom_class') ?>">				Use custom class<br>				<?php echo aq_field_input('custom_class', $block_id, $custom_class); ?>			</label>			<br>			<label for="<?php echo $this->get_field_id('use_miniheader_class') ?>">				<?php echo aq_field_checkbox('use_miniheader_class', $block_id, $use_miniheader_class); ?>				Check if you have small centered menu in this START/END block.			</label>						<br>			<label for="<?php echo $this->get_field_id('use_shop_class') ?>">				<?php echo aq_field_checkbox('use_shop_class', $block_id, $use_shop_class); ?>				Check if you have cart block within this START/END block.			</label>			</div>		</div>		<div class="description box">			<div class="description half">				<h3>Video links</h3>				<label for="<?php echo $this->get_field_id('backgroundvideo') ?>">					Background Video (video link)<br/>					<?php echo aq_field_upload('backgroundvideo', $block_id, $backgroundvideo) ?>				</label>				<label for="<?php echo $this->get_field_id('backgroundvideo') ?>">					Background Video (video link)<br/>					<?php echo aq_field_upload('backgroundvideo', $block_id, $backgroundvideo) ?>				</label>				<label for="<?php echo $this->get_field_id('backgroundvideo_opera') ?>">					Background Video URL (in OGV format for Opera)- video link. You can convert video for Opera: <a href="http://video.online-convert.com/convert-to-ogg">Convert to OGG</a><br/>					<?php echo aq_field_upload('backgroundvideo_opera', $block_id, $backgroundvideo_opera) ?>				</label>					<label for="<?php echo $this->get_field_id('backgroundvideo_safari') ?>">					Background Video URL (in WEBM format for Safari) - video link. You can convert video for Safari: <a href="http://video.online-convert.com/convert-to-webm">Convert to WEBM</a><br/>					<?php echo aq_field_upload('backgroundvideo_safari', $block_id, $backgroundvideo_safari) ?>				</label>							</div>								<div class="description half last">				<h3>Other video settings</h3>				<label for="<?php echo $this->get_field_id('video_text') ?>">					Video text (text in the middle of the video)					<?php echo aq_field_textarea('video_text', $block_id, $video_text, $size = 'full pmc-editor') ?>				</label>				<label for="<?php echo $this->get_field_id('video_height') ?>">					Background Video height (only on autoplay)<br/>					<?php echo aq_field_input('video_height', $block_id, $video_height) ?>				</label>				<label for="<?php echo $this->get_field_id('video_auto_play') ?>">					<?php echo aq_field_checkbox('video_auto_play', $block_id, $video_auto_play); ?>					Auto Play video?				</label>				<label for="<?php echo $this->get_field_id('show_video') ?>">					<?php echo aq_field_checkbox('show_video', $block_id, $show_video); ?>					Show video for background?				</label>						</div>			</div>									<?php			}		function block($instance) {		$defaults = array(			'color' => '#fff',			'border_color' => '#fff',			'backgroundimage' => '',			'paddingtop' => '0',			'paddingbottom' => '0',			'bordertopbottom' => '0',			'backgroundvideo' => '',			'backgroundvideo_opera' => '',			'backgroundvideo_safari' => '',			'video_text' => '',						'show_video' => 0,							'icon' => '',			'show_icon' => 0,				'video_auto_play' => 0,						'video_height' => '400',			'use_parallax' => 0,			'use_rain' => 0,				'full_width_rain_image' => 0,			'custom_class' => '',					'use_miniheader_class' => 0,			'use_shop_class' => 0,					);		$instance = wp_parse_args($instance, $defaults);		extract($instance);		$rand = rand(0,99);		$style  = $video_clear = $style_video = $use_parallax_class = $use_rain_class = $use_rain_image  = $background_style = $use_rain_id = $full_rain_image_class = $use_rain_image_input = $miniheader_class = $shop_class = '';		if(isset($use_parallax) && $use_parallax == 1)			$use_parallax_class = 'pmc_parallax';					if(isset($icon) && $icon != ''){			$icon = explode('-',$icon); $icon = $icon[1];}		if(isset($full_width_rain_image) && $full_width_rain_image == 1){				$full_rain_image_class = 'pmc_full_image_rain';			}			if(isset($use_rain) && $use_rain != 0){			$image_path = $backgroundimage;			$image_path = explode('/wp-content/',$image_path);			$use_rain_image_input = '<input id="pmc_rain_img" type="hidden"  value="/wp-content/'.$image_path[1].'" />';			$use_rain_image = '<img style="display:none; position:absolute;width:100%;top:0;" id="pmc_rain-'.$rand.'" alt="background" src="" />';;			$use_rain_id = 'id="pmc_rain_canvas-'.$rand.'"';			$use_rain_class = 'pmc_rain';			}			$rand = rand(0,999);		if($use_rain == 0){				$background_style = 'background:'.$color.' url('.$backgroundimage.') 50% 0;background-size:cover;';			echo '<style scoped>.mainwrap.rand-'.$rand .' #headerwrap{background:'.$color.' !important;}</style>';		}		if($use_miniheader_class){$miniheader_class = 'smallheader';}		if($use_shop_class){$shop_class = 'shop';}		$text = '<div '.$use_rain_id.' class="mainwrap rand-'.$rand.' '.$use_parallax_class.' '.$use_rain_class.' '.$full_rain_image_class.' '.$custom_class.' '.$miniheader_class.' '.$shop_class.'" style="'.$background_style.'border-top:'.$bordertopbottom.'px solid '.$border_color.';border-bottom:'.$bordertopbottom.'px solid '.$border_color.';padding:'.$paddingtop.'px 0 '.$paddingbottom.'px 0;">'.$use_rain_image.$use_rain_image_input ;				if($show_icon){					$text .= '<div class="mainwrap-icon-background"></div><div class="mainwrap-icon"><i class="fa fa-'.$icon.' fa-2x"></i></div>';				}		if(isset($backgroundimage) && $backgroundimage != '')			$backgroundimage_out = 'poster="'.$backgroundimage.'"';			if(isset($video_height) && $video_height != '')			$style = 'style="height:'.$video_height.'px"';		if(isset($show_video) && $show_video == 1){			$video_clear = 'video';			if(isset($video_auto_play) && $video_auto_play == 1){				$args = 'autoplay';				$style_video = 'style="position:absolute;"';				}			else{				$args = 'controls';				$style = '';			}			$text .= '			<div class="mainwrap-video" '.$style.'>						<video '.$args.' loop id="bgvid" '.$backgroundimage_out.' '.$style_video.'>						<source src="'.$backgroundvideo_safari.'" type="video/webm">						<source src="'.$backgroundvideo_opera.'" type="video/ogv">												<source src="'.$backgroundvideo.'" type="video/mp4">						</video>			</div>			<div class="video-text">'.$video_text.' </div>									';		}							$text .= '	<div class="main clearfix '.$video_clear.'">';		$text .= '<div class="content fullwidth">';			echo wpautop(do_shortcode(htmlspecialchars_decode($text)));}}