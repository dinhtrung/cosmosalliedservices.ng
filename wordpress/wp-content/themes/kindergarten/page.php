<?php get_header(); 

if( class_exists('acf') ) { 
$hide_title		= get_field('hide_title');
$add_margin_top	= get_field('add_margin_top');
}
else {
$hide_title	= '';	
$add_margin_top	= '';
}


?>

<!-- CONTENT START
============================================= -->
<section id="content" class="single-wrapper" <?php if(!empty($add_margin_top)){ ?>style="margin-top: <?php echo sanitize_text_field( $add_margin_top ); ?>px;"<?php } ?>>
	<!-- Page Title -->
	<?php if($hide_title == false){ ?>
	<div class="grey-background wow fadeIn" <?php if(!empty($add_margin_top)){ ?>style="margin-top: <?php echo sanitize_text_field( $add_margin_top ); ?>px;"<?php } ?>>
		<div class="container">
			<div class="heading-block page-title wow fadeIn">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
	<?php } ?>
	
	<div class="container">
		<div id="content-wrapper" class="wrapper">
	
		<?php while ( have_posts() ) : the_post(); 
		

			get_template_part( 'inc/format/content', 'page' );
					
		endwhile; // end of the loop. ?>

		</div><!-- wrapper -->
	</div>
</section>
<!-- CONTENT END -->


<?php get_footer(); ?>