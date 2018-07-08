<?php get_header();  ?>

<!-- CONTENT START
============================================= -->
<div id="content" class="single-wrapper">

	<!-- BLOG START
	============================================= -->
	<div class="blog-single">
        <div class="container">
            <div class="row">

				<!-- BLOG LOOP START
				============================================= -->
				<div class="single-post-wrap col-md-8 wow fadeIn">

				<?php while ( have_posts() ) : the_post(); 
		
					get_template_part( 'inc/format/content', get_post_format() );

				endwhile; // end of the loop. ?>
				
				</div>
				<!-- BLOG LOOP END -->

				<!-- SIDEBAR START
				============================================= -->

				<?php get_sidebar(); ?>

				<!-- SIDEBAR END -->

			</div>
		</div>
	</div>
	<!-- BLOOG END -->

</div>
<!-- CONTENT END -->
		

<?php get_footer(); ?>