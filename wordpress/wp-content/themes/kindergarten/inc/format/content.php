<article  id="post-<?php the_ID(); ?>" <?php post_class( 'post-item'); ?>>

	<?php if ( has_post_thumbnail()) { ?>
		<div class="post-image">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail(); ?>
			</a>
		</div><!-- thumbnail-->
	<?php } ?> 

	<div class="post-content">
		<div class="heading-block">
			<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
			<div class="post-meta">
				<span class="date"><?php echo get_the_date(); ?></span>/
				<span class="author"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_the_author_meta( 'display_name' ); ?></a></span>/
				<span class="comments"><?php comments_number( '0', '1', '%' ); ?> <?php esc_html_e( 'Comments ', 'kindergarten' ); ?></span>
			</div>
		</div>
		<div class="content">
			<?php the_content();?>
			<?php wp_link_pages(); ?>
		</div>
		<div class="meta-bottom"><?php esc_html_e( 'Tags: ', 'kindergarten' ); ?><span><?php the_tags('',', ',''); ?></span></div>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->

<?php 
	if ( is_singular() ) wp_enqueue_script( "comment-reply" ); 
	if ( comments_open() || '0' != get_comments_number() ) comments_template(); 
?>