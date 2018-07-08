<div class="our-classes wow fadeIn clearfix">
	<div class="container">
		<div class="heading-block wow fadeIn">
			<h2><?php esc_html_e( 'Related Classes', 'kindergarten' ); ?></h2>
		</div>

		<div class="row">
			<div class="classes">

			<?php 
			   // get the custom post type's taxonomy terms
			 
			    $tag_classkinder = wp_get_object_terms( $post->ID, 'class-tag', array('fields' => 'ids') );
			    // arguments
			    $single_class_related = array(
			    'post_type' => 'kindergarten-class',
			    'post_status' => 'publish',
			    'posts_per_page' => 2, // you may edit this number
			    'tax_query' => array(
			        array(
			            'taxonomy' => 'class-tag',
			            'field' => 'id',
			            'terms' => $tag_classkinder
			        )
			    ),
			    'post__not_in' => array ($post->ID),
			    );
			        
			        $class_related_hook = new WP_Query( $single_class_related );
			        if ($class_related_hook->have_posts()) : while($class_related_hook->have_posts()) : $class_related_hook->the_post();

			        $age_group		= get_field('age_group');
					$class_size		= get_field('class_size');
					$class_price	= get_field('class_price');
					$class_session	= get_field('class_session');
					$color_scheme	= get_field('color_scheme'); 

					$rel_class_terms = get_the_terms($post->ID, 'class-category');

					 foreach($rel_class_terms as $term){
						 $category_name_rel = $term->name;
						 $category_slug_rel = $term->slug;
						}

			        if (has_post_thumbnail()) { 
			            $img_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); 
			                $image2 = aq_resize($img_url[0],  287 , 216, true);
			            }
			    ?>
				<div class="col-md-6 wow fadeInUp">
					<a href="<?php the_permalink(); ?>">
						<div class="class-item" style="background-color: <?php echo esc_html( $color_scheme ); ?>;">
							<div class="class-img pull-right">
								<?php if ( has_post_thumbnail()) { ?> 
			                        <figure>
			                            <img src="<?php echo esc_url( $image2 ); ?>" alt="<?php the_title(); ?>">
			                        </figure>
			                    <?php }
			                    else {
			                        echo '<img src="'. KINDERGARTEN_DIR .'/img/placeholder-related.jpg" alt="placeholder" />';
			                    } ?>
								<div class="overlay dark"></div>
								<span><i class="fa fa-plus"></i></span>
							</div>

							<div class="class-details">
								<div class="class-desc">
									<h4><?php the_title(); ?></h4>
									<p class="class-category"><?php echo sanitize_text_field( $category_name_rel ); ?></p>
									<p class="class-date"><?php echo get_the_date(); ?></p>
								</div>

								<div class="class-type">
									<?php if (!empty($age_group)){ ?>
										<div class="class-year">
											<h6 class="title"><?php esc_html_e( 'Age Group', 'kindergarten' ); ?></h6>
											<p><?php echo sanitize_text_field( $age_group ); ?></p>
										</div>
									<?php }
									if (!empty($class_size)){ ?>
										<div class="class-size">
											<h6 class="title"><?php esc_html_e( 'Class Size', 'kindergarten' ); ?></h6>
											<p><?php echo sanitize_text_field( $class_size ); ?></p>
										</div>
									<?php }
									if (!empty($class_price)){ ?>
										<div class="class-price">
											<h3><?php echo balancetags( $class_price ); ?></h3>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</a>
				</div>
				<?php endwhile; wp_reset_postdata(); endif;  ?>

			</div>
		</div>
	</div>
</div>
<!-- RELATED CLASSES SECTION END -->

<!-- RELATED CLASSES SCRIPT START -->
<script type="text/javascript">
	jQuery(window).load(function(){
		var classDetailsHeight = jQuery('.class-item img').height();
		jQuery(".class-details").css("height", classDetailsHeight);
	});
				
</script>
<!-- RELATED CLASSES SCRIPT END -->