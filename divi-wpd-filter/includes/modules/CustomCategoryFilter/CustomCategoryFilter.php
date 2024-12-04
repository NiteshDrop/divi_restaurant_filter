<?php
class CustomCategoryFilter extends ET_Builder_Module {
	public $slug       = 'custom_category_filter';
	public $vb_support = 'on';

	function init() {
		$this->name = esc_html__( 'Wpd Category Filter', 'et_builder' );
	}

	function get_fields() {
		return array(
			'category' => array(
				'label'           => esc_html__( 'Category Slug', 'et_builder' ),
				'type'            => 'text',
				'default'         => '',
				'description'     => esc_html__( 'Enter a Category Slug for your custom filter.', 'et_builder' ),
			),
		);
	}

	function render( $attrs, $content = null, $render_slug ) {
		$category_slug_name = $this->props['category'];
		if(!empty($category_slug_name)) {
			$taxonomy = $category_slug_name;
			$terms = get_terms($taxonomy); // Get all terms of a taxonomy
			ob_start(); 
	?>
	<div>
		<select name="wpdcategorylist">
			<option value="">- Select -</option>
			<?php
				foreach ($terms as $term ) {
			?>
				<option value="<?php echo $term->name; ?>"><?php echo $term->name; ?></option>
			<?php } ?>
		</select>
	</div>
	<?php
	return ob_get_clean();
		}
	}
}

new CustomCategoryFilter();
