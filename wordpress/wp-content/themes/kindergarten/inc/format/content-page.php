<article  id="page-<?php the_ID(); ?>" <?php post_class( 'page'); ?>>

<div class="page-content clearfix">
 
	<?php the_content(); ?>
	<?php wp_link_pages(); ?>
                     
</div><!-- page-content -->    

	<div class="page-comment">
	<?php 
    	$options = get_option('kindergarten_framework');
    	$allow_comment = $options['allow_comment'];

    	if( $allow_comment == '1' ) {
		if ( is_singular() ) wp_enqueue_script( "comment-reply" ); 
		if ( comments_open() || '0' != get_comments_number() ) comments_template(); 

	}
	?>
	</div>

</article><!-- #page<?php the_ID(); ?> -->