<?php

class kindergarten_latest_thumb_Widget extends WP_Widget {
	
	function kindergarten_latest_thumb_Widget()
	{
		$widget_ops = array('classname' => 'recent-post', 'description' => '');

		$control_ops = array('id_base' => 'kindergarten_latest_thumb-widget');

		parent::__construct('kindergarten_latest_thumb-widget', 'Kindergarten Latest Post', $widget_ops, $control_ops);
	}
	
	function widget($args, $instance)
	{
		extract($args);
		$title = apply_filters('widget_title', $instance['title']);

		echo $before_widget;

		if($title) {
			echo  $before_title.$title.$after_title;
		} ?>

	    	<div class="recent-post">
		    	<?php 
		    		    $latest_post_wid = array(
					        'post_type'         => 'post',
					        'posts_per_page'	=> $instance['amount'],
					        'ignore_sticky_posts' => 1,						        
					    );
		    		$latest_thumb = new WP_Query($latest_post_wid); 
		    		if ($latest_thumb->have_posts()) : while($latest_thumb->have_posts()) : $latest_thumb->the_post();
		    		$img_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); 
					    $blogwidimg = aq_resize($img_url[0],  50 , 50, true);
		    	?>
		    	
			    	<!-- widget-news -->
	                <div class="post-item">
                        <a href="single-post.html">
                            <div class="post-thumb">
                                <?php if ( has_post_thumbnail()) { ?>
									<img src="<?php echo esc_url( $blogwidimg ); ?>" alt="">
								<?php }

								else {
									echo '<img src="'. KINDERGARTEN_DIR .'/img/placeholder-latestpost-widget.jpg" alt="placeholder" />';
								}

								?>
                                <div class="overlay dark">
                                    <span><i class="fa fa-plus"></i></span>
                                </div>
                            </div>
                        </a>
                        <div class="post-content">
                            <a href="<?php the_permalink(); ?>">
                                <h4><?php the_title(); ?></h4>
                            </a>
                           	<p><?php echo excerpt(10); ?></p>
                            <div class="meta">
                                <span class="date"><?php echo get_the_date(); ?></span>
                            </div>
                        </div>
                    </div>
	                <!-- widget-news end -->

		    	<?php 
		    		endwhile; wp_reset_postdata(); endif;
		    	?>
	    	</div>
		
		<?php echo $after_widget;
	}
	
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;

		$instance['title'] = strip_tags($new_instance['title']);
		if( is_numeric($new_instance['amount']) ){
			$instance['amount'] = $new_instance['amount'];
		} else {
			$new_instance['amount'] = '3';
		}

		return $instance;
	}

	function form($instance)
	{
		$defaults = array('title' => 'Latest Posts', 'amount' => '3');
		$instance = wp_parse_args((array) $instance, $defaults); ?>
		
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php esc_html_e( 'Title', 'kindergarten' ); ?>:</label>
			<input class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('amount'); ?>"><?php esc_html_e( 'Amount of Posts', 'kindergarten' ); ?>:</label>
			<input class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('amount'); ?>" name="<?php echo $this->get_field_name('amount'); ?>" value="<?php echo $instance['amount']; ?>" />
		</p>
	<?php
	}
}

add_action( 'widgets_init', create_function('', 'return register_widget("kindergarten_latest_thumb_Widget");') );