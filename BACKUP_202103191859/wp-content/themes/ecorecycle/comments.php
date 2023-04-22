<?php
	global $pmc_data;
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
function mytheme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
	
	<div class = "specificComment" id="comment-<?php comment_ID(); ?>">
	<div class="blogAuthor">
		<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo get_avatar($comment, 100); ?></a>
	</div>
	<div class = "right-part">

		<div class ="comment-meta">
			<span class="authorBlogName">	

				<?php echo get_comment_author_link(); ?>  
			</span>
			<span class = "commentsDate"> <?php printf('%1$s at %2$s', get_comment_date(),  get_comment_time()) ?><?php edit_comment_link('(Edit)','  ','') ?>
				<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
			</span>	
		</div>

		
		<div class="commenttext"><?php comment_text() ?></div>
	</div>
	
	<?php if ($comment->comment_approved == '0') : ?>
	 <em><?php echo 'Your comment is awaiting moderation.' ?></em>
	 <br />
	<?php endif; ?>
	 
	</div>
<?php
        }	
?>
<!-- You can start editing here. -->
	<?php 
		$no_comments = get_comments_number( $post->ID );
		$cancel_reply_link = __('Cancelar','pmc-themes');  					
		$title_reply_to = __('Responder para','pmc-themes'); 			
		$label_submit = __('Comentar','pmc-themes');  		
		$translation_comment_website = __('Website','pmc-themes');  	
		$translation_comment_required = __('requerido','pmc-themes');  
		$translation_comment_mail = __('Mail','pmc-themes'); 	
		$translation_comment_name = __('Nome','pmc-themes');		
		$translation_comment_closed = __('Coment&aacute;rios encerrados.','pmc-themes');		
	?>
	
<?php if ( have_comments() ) : ?>
	
	<ol class="commentlist">	
	<div class="titleborderOut">
		<div class="titleborder"></div>
	</div>
	<h3 id="comments"><?php comments_number(); ?></h3>	
	
	<?php wp_list_comments('type=comment&callback=mytheme_comment'); ?>
	</ol>
	<div class="commentnav">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>
 <?php else : // this is displayed if there are no comments so far ?>
	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->
	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments"><?php echo $translation_comment_closed; ?></p>
	<?php endif; ?>
<?php endif; ?>
<?php if ( comments_open() ) : ?>
<?php $aria_req = ''; $post_id = ''; $defaults = array( 'fields' => apply_filters( 'comment_form_default_fields', array(
    'author' => '<div class="commentfield">' .
                '<label for="author">' . $translation_comment_name . '' .
				( $req ? ' <small>('.$translation_comment_required .')</small>' : '' ) .
                '</label><br><input id="author" name="author" type="text" value="' .
                esc_attr( $commenter['comment_author'] ) . '"  tabindex="1"' . $aria_req . ' />' .
                '</div>',
    'email'  => '<div class="commentfield">' .
                '<label for="email">' . $translation_comment_mail . '' .
                ( $req ? ' <small>('.$translation_comment_required .')</small>' : '' ) .
                '</label> <br><input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" tabindex="2"' . $aria_req . ' />' .
                '</div>',
    'url'    => '<div class="commentfield">' .
                '<label for="url">' . $translation_comment_website . '</label>' .
                '<br><input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '"  tabindex="3" />' .
                '</div>' ) ),
    'comment_field' => '' .
                '<div>' .
                '<textarea id="comment" name="comment" cols="45" rows="8" tabindex="4" aria-required="true"></textarea>' .
                '</div>',
    'must_log_in' => '
<p class="must-log-in">' .  sprintf( __( 'Voc&ecirc; precisa estar <a href="%s">logao </a> para comentar.' ,'pmc-themes'), wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>
',
    'logged_in_as' => '
<p class="logged-in-as">' . sprintf( __( 'Logado como <a href="%s">%s</a>. <a title="Desconectar usu&aacute;rio" href="%s">Desconectar?</a></p>
' ,'pmc-themes'), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ),
    'comment_notes_before' => '',
    'comment_notes_after' => '',
    'id_form' => 'commentform',
    'id_submit' => 'submit',
    'title_reply' => '',
    'title_reply_to' => $title_reply_to,
    'cancel_reply_link' => $cancel_reply_link,
    'label_submit' => $label_submit,
	
	
); ?>
<div id="commentform">
<div class="titleborderOut">
		<div class="titleborder"></div>
	</div>
<h3><?php echo $label_submit ?></h3>
<?php comment_form($defaults); ?>
</div>
<?php endif; // if you delete this the sky will fall on your head ?>
