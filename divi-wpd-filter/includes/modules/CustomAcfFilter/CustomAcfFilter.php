<?php
class CustomAcfFilter extends ET_Builder_Module {
	public $slug       = 'custom_filter';
	public $vb_support = 'on';

	function init() {
		$this->name = esc_html__( 'Wpd ACF Field Filter', 'et_builder' );
	}

	function get_fields() {
		return array(
			'acffield' => array(
				'label'           => esc_html__( 'ACF FIeld Name', 'et_builder' ),
				'type'            => 'text',
				'default'         => '',
				'description'     => esc_html__( 'Enter a ACF field name for your custom filter.', 'et_builder' ),
			),
		);
	}

	function render( $attrs, $content = null, $render_slug ) {
		$post_type = 'restaurant';
		$acf_field_name = $this->props['acffield']; 
		if(!empty($acf_field_name)) {

			$field_values = [];
			
			$args = [
				'post_type'      => $post_type,
				'posts_per_page' => -1,
			];

			$query = new WP_Query($args);

			if ($query->have_posts()) {
				while ($query->have_posts()) {
					$query->the_post();

					$acf_value = get_field($acf_field_name);

					// Check if the field value exists and add it to the array
					if ($acf_value) {
						$field_values[] = $acf_value;
					}
				}
				wp_reset_postdata();
			}
			ob_start();
		?>
			<div>
				<select name="wpdfilterlist">
					<option value="">- Select -</option>
					<?php
						foreach ($field_values as $field_value) {
					?>
						<option value="<?php echo esc_html($field_value); ?>"><?php echo esc_html($field_value); ?></option>
					<?php } ?>
				</select>
			</div>
		<?php
		return ob_get_clean();
		}
	}
}

new CustomAcfFilter();
