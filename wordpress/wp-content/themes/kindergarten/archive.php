<?php get_header();  ?>

<!-- BLOG START
============================================= -->
<div class="blog archives more-padding">
	<div class="container">
		<div class="row">

			<!-- BLOG LOOP START
			============================================= -->
			<div class="blog-post col-md-8 wow fadeIn">

				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); 

						get_template_part( 'inc/format/loop', get_post_format() );

					endwhile; ?>
					
				<?php else : ?>

				<?php get_template_part( 'inc/format/content', 'no-result' ); ?>

				<?php endif; ?>

				<?php kindergarten_content_nav($pages = '', $range = 2); ?>
			
			</div>
			<!-- BLOG LOOP END -->

		<?php get_sidebar(); ?>

		</div><!-- row -->
	</div><!-- container -->
</div><!-- search-result -->

<?php get_footer(); ?>