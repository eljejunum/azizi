<?php
/**
 * Plugin Name: Azizi Widgets
 * Description: Sidebar widgets for David Azizi Site
 * Version: 0.1
 * Author: Jordan Mirrer
 * Author URI: http://www.jordanmirrer.com
 */


add_action( 'widgets_init', 'azizi_testimonials_widget' );


function azizi_testimonials_widget() {
	register_widget( 'Azizi_Testimonials_Widget' );
}

class Azizi_Testimonials_Widget extends WP_Widget {

	function Testimonials_Widget() {
		$widget_ops = array( 
			'classname' => 'testimonials-class', 
			'description' => __('Display a series of testimonials', 'testimonials') );
		
		$control_ops = array( 
			'width' => 270, 
			'height' => 350, 
			'id_base' => 'testimonials-widget' );
		
		$this->WP_Widget( 'testimonials-widget', __('Testimonials Widget', 'testimonials'), $widget_ops, $control_ops );
	}
	
	function widget( $args, $instance ) {
		extract( $args );

		//Our variables from the widget settings.
		$title = apply_filters('widget_title', $instance['title'] );
		$testimonial_content = $instance[ 'testimonial_content' ];
		$name = $instance['name'];

		echo $before_widget;

		// Display the widget title 
		if ( $title )
			echo $before_title . $title . $after_title;
			
		//Display the testimonial content 
		if ( $testimonial_content )
			printf( '<p>' . __('My testimony is %1$s.', 'testimonials') . '</p>', $testimonial_content );

		//Display the name 
		if ( $name )
			printf( '<p>' . __('My name is %1$s.', 'testimonials') . '</p>', $name );
		
		echo $after_widget;
	}

	//Update the widget 
	 
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		//Strip tags from title and name to remove HTML 
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['testimonial_content'] = strip_tags( $new_instance['testimonial_content'] );
		$instance['name'] = strip_tags( $new_instance['name'] );

		return $instance;
	}

	
	function form( $instance ) {

		//Set up some default widget settings.
		$defaults = array( 
			'title' => __('Testimonials', 'testimonials'),
			'testimonial_content' => __('', 'testimonials'),
			'name' => __('', 'testimonials')
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		//Widget Title: Text Input.
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'testimonials'); ?></label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
		</p>

		//Text Input.
		<p>
			<label for="<?php echo $this->get_field_id( 'name' ); ?>"><?php _e('Speaker Name:', 'testimonials'); ?></label>
			<input id="<?php echo $this->get_field_id( 'name' ); ?>" name="<?php echo $this->get_field_name( 'name' ); ?>" value="<?php echo $instance['name']; ?>" style="width:100%;" />
		</p>

		
		//Text Input.
		<p>
			<label for="<?php echo $this->get_field_id( 'testimonial_content' ); ?>"><?php _e('Testimonial:', 'testimonials'); ?></label>
			<input id="<?php echo $this->get_field_id( 'testimonial_content' ); ?>" name="<?php echo $this->get_field_name( 'testimonial_content' ); ?>" value="<?php echo $instance['testimonial_content']; ?>" style="width:100%;" />
		</p>

	<?php
	}
}

?>