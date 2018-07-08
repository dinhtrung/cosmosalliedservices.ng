<?php get_header(); 
		
while ( have_posts() ) : the_post(); ?>

<!-- CONTENT START
============================================= -->
<section id="content" class="single-wrapper">
	<!-- Page Title -->
	<div class="grey-background wow fadeIn">
		<div class="container">
			<div class="heading-block page-title wow fadeIn">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>

	<!-- SINGLE CLASS START
	============================================= -->
	<div class="single-classes clearfix">
		<div class="container">
			<div class="row">
				<!-- Class Gallery Start -->
				<div class="class-gallery wow fadeIn col-md-6 clearfix">
					<div class="class-flexslider">
						<ul class="slides">
						<?php
							$images = get_field('class_gallery');

							if( $images){
								foreach( $images as $image ):
								$alt = $image['alt'];
						?>
							<li data-thumb="<?php echo esc_url( $image['url'] ); ?>">
								<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $alt ); ?>" />
							</li>
							<?php endforeach; } ?>
						</ul>
					</div>
				</div>
				<!-- Class Gallery End -->

				<!-- Class Content Start -->
				<div class="class-content wow fadeIn col-md-6 clearfix">
					<?php the_content(); ?>
					<?php 
					$age_group		= get_field('age_group');
					$class_size		= get_field('class_size');
					$class_price	= get_field('class_price');
					$class_session	= get_field('class_session'); ?>
					<table class="table">
						<tbody>
						<?php if (!empty($age_group)){ ?>
							<tr>
								<td><?php esc_html_e( 'Age Group', 'kindergarten' ); ?> :</td>
								<td><?php echo sanitize_text_field( $age_group ); ?></td>
							</tr>
						<?php }
						if (!empty($class_size)){ ?>
							<tr>
								<td><?php esc_html_e( 'Class Size', 'kindergarten' ); ?> :</td>
								<td><?php echo sanitize_text_field( $class_size ); ?></td>
							</tr>
						<?php }
						if (!empty($class_price)){ ?>
							<tr>
								<td><?php esc_html_e( 'Pricing', 'kindergarten' ); ?></td>
								<td><?php echo balancetags( $class_price ); ?></td>
							</tr>
						<?php }
						if (!empty($class_session)){ ?>
							<tr>
								<td><?php esc_html_e( 'Sessions', 'kindergarten' ); ?></td>
								<td><?php echo balancetags( $class_session ); ?></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
				<!-- Class Content End -->

				<!-- CLASS COUNTDOWN START
				============================================= -->
				<?php 
				$start_years		= get_field('start_years');
				$start_month		= get_field('start_month');
				$start_days			= get_field('start_days'); ?>
				<div class="first-day wow fadeIn">
					<div class="container">
						<div class="heading-block wow fadeIn">
							<h3><?php esc_html_e( 'Class Start', 'kindergarten' ); ?></h3>
						</div>

						<div class="row">
							<div class="first-day-countdown">
								<div id="clock"></div>
							</div>
						</div>
					</div>
					<script type="text/javascript">
					jQuery(document).ready(function(){
					jQuery('#clock').countdown('<?php echo sanitize_text_field( $start_years ); ?>/<?php echo sanitize_text_field( $start_month ); ?>/<?php echo sanitize_text_field( $start_days ); ?>', function(event) {
				        var jQuerythis = jQuery(this).html(event.strftime(''
				        + 
				        '<div class="col-md-3 text-center day"><h3>Day</h3><div class="count-bg"><p>%D</p></div></div>'
				        + 
				        '<div class="col-md-3 text-center hour"><h3>Hours</h3><div class="count-bg"><p>%H</p></div></div>'
				        + 
				        '<div class="col-md-3 text-center minute"><h3>Minutes</h3><div class="count-bg"><p>%M</p></div></div>'
				        + 
				        '<div class="col-md-3 text-center second"><h3>Second</h3><div class="count-bg"><p>%S</p></div></div>'));
				    });
				    });
				    </script>
				</div>
				<!-- CLASS COUNTDOWN END -->
			</div>
		</div>
	</div>
	<!-- SINGLE CLASS END -->

	<!-- CLASS FEATURE SECTION START
	============================================= -->
	<?php if(have_rows('class_feature')): ?>
	<div class="class-feature grey-background clearfix">
		<div class="container">
			<div class="row">
				<?php while(have_rows('class_feature')):the_row(); 

					$feature_title 		= get_sub_field('feature_title');
					$feature_description 		= get_sub_field('feature_description');
					$feature_icon_or_image 		= get_sub_field('feature_icon_or_image');
					$feature_icon 		= get_sub_field('feature_icon');
					$feature_image 		= get_sub_field('feature_image');
					$feature_background_color 		= get_sub_field('feature_background_color'); ?>

				<div class="feature-item col-md-4 wow fadeInUp">
					<div class="feature-with-bg" style="background-color: <?php echo esc_html( $feature_background_color ); ?>;">
						<?php if( $feature_icon_or_image == 'icon' ) { ?>
						<div class="feature-icon">
							<div class="icon fa <?php echo sanitize_text_field( $feature_icon ); ?>"></div>
						</div>
						<?php }
						else { ?>
						<div class="feature-icon">
							<img src="<?php echo esc_url( $feature_image ); ?>" alt="feat-icon" class="icon">
						</div>
						<?php } ?>
						<div class="feature-desc">
							<h4><?php echo sanitize_text_field( $feature_title ); ?></h4>
							<?php echo balancetags( $feature_description ); ?>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<!-- CLASS FEATURE END -->


	<!-- RELATED CLASSES SECTION START
	============================================= -->
	<?php $show_or_hide_related_class	= get_field('show_or_hide_related_class'); 

	if ($show_or_hide_related_class == true){ ?>
	<?php get_template_part( 'inc/part/related', 'class' ); ?>
	<?php } ?>

</section>
<!-- CONTENT END -->

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>