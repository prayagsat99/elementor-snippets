/**
 * Responsive Column Order Control for Elementor
 * 
 * Allows users to set column display order for different devices (desktop, tablet, mobile).
 * 
 * Add this code to your theme's functions.php file or a custom plugin.
 */

 function prayagsat99_add_responsive_column_order( $element, $args ) {
	$element->add_responsive_control(
		'responsive_column_order',
		[
			'label' => __( 'PS99 Responsive Column Order', 'prayagsat99-elementor-extras' ),
			'type' => \Elementor\Controls_Manager::NUMBER,
			'separator' => 'before',
			'selectors' => [
				'{{WRAPPER}}' => '-webkit-order: {{VALUE}}; -ms-flex-order: {{VALUE}}; order: {{VALUE}};',
			],
		]
	);
}
add_action( 'elementor/element/column/layout/before_section_end', 'prayagsat99_add_responsive_column_order', 10, 2 ); 
