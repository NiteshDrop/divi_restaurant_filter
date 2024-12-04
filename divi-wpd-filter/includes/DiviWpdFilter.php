<?php
class DiviWpdFilter extends DiviExtension {

	/**
	 * The gettext domain for the extension's translations.
	 *
	 * @since 1.0.0
	 *
	 * @var string
	 */
	public $gettext_domain = 'divi-wpd-filter';

	/**
	 * The extension's WP Plugin name.
	 *
	 * @since 1.0.0
	 *
	 * @var string
	 */
	public $name = 'wpd-filter';

	/**
	 * The extension's version
	 *
	 * @since 1.0.0
	 *
	 * @var string
	 */
	public $version = '1.0.0';

	/**
	 * DICM_DiviCustomModules constructor.
	 *
	 * @param string $name
	 * @param array  $args
	 */
	public function __construct( $name = 'wpd-filter', $args = array() ) {
		$this->plugin_dir              = plugin_dir_path( __FILE__ );
		$this->plugin_dir_url          = plugin_dir_url( $this->plugin_dir );
		$this->_builder_js_data        = array(
			'i10n' => array(
				'dicm_cta_all_options' => array(
					'basic_fields'         => esc_html__( 'Basic Fields', 'divi-wpd-filter' ),
					'text'                 => esc_html__( 'Text', 'divi-wpd-filter' ),
					'textarea'             => esc_html__( 'Textarea', 'divi-wpd-filter' ),
					'select'               => esc_html__( 'Select', 'divi-wpd-filter' ),
					'toggle'               => esc_html__( 'Toggle', 'divi-wpd-filter' ),
					'multiple_buttons'     => esc_html__( 'Multiple Buttons', 'divi-wpd-filter' ),
					'multiple_checkboxes'  => esc_html__( 'Multiple Checkboxes', 'divi-wpd-filter' ),
					'input_range'          => esc_html__( 'Input Range', 'divi-wpd-filter' ),
					'input_datetime'       => esc_html__( 'Input Date Time', 'divi-wpd-filter' ),
					'input_margin'         => esc_html__( 'Input Margin', 'divi-wpd-filter' ),
					'checkboxes_category'  => esc_html__( 'Checkboxes Category', 'divi-wpd-filter' ),
					'select_sidebar'       => esc_html__( 'Select Sidebar', 'divi-wpd-filter' ),
					'code_fields'          => esc_html__( 'Code Fields', 'divi-wpd-filter' ),
					'codemirror'           => esc_html__( 'Codemirror', 'divi-wpd-filter' ),
					'prop_value'           => esc_html__( 'Prop value: ', 'divi-wpd-filter' ),
					'rendered_prop_value'  => esc_html__( 'Rendered prop value: ', 'divi-wpd-filter' ),
					'form_fields'          => esc_html__( 'Form Fields', 'divi-wpd-filter' ),
					'option_list'          => esc_html__( 'Option List', 'divi-wpd-filter' ),
					'option_list_checkbox' => esc_html__( 'Option List Checkbox', 'divi-wpd-filter' ),
					'option_list_radio'    => esc_html__( 'Option List Radio', 'divi-wpd-filter' ),
					'typography_fields'    => esc_html__( 'Typography Fields', 'divi-wpd-filter' ),
					'select_font_icon'     => esc_html__( 'Select Font Icon', 'divi-wpd-filter' ),
					'select_text_align'    => esc_html__( 'Select Text Align', 'divi-wpd-filter' ),
					'select_font'          => esc_html__( 'Select Font', 'divi-wpd-filter' ),
					'color_fields'         => esc_html__( 'Color Fields', 'divi-wpd-filter' ),
					'color'                => esc_html__( 'Color', 'divi-wpd-filter' ),
					'color_alpha'          => esc_html__( 'Color Alpha', 'divi-wpd-filter' ),
					'upload_fields'        => esc_html__( 'Upload Fields', 'divi-wpd-filter' ),
					'upload'               => esc_html__( 'Upload', 'divi-wpd-filter' ),
					'advanced_fields'      => esc_html__( 'Advanced Fields', 'divi-wpd-filter' ),
					'tab_1_text'           => esc_html__( 'Tab 1 Text', 'divi-wpd-filter' ),
					'tab_2_text'           => esc_html__( 'Tab 2 Text', 'divi-wpd-filter' ),
					'presets_shadow'       => esc_html__( 'Presets Shadow', 'divi-wpd-filter' ),
					'preset_affected_1'    => esc_html__( 'Preset Affected 1', 'divi-wpd-filter' ),
					'preset_affected_2'    => esc_html__( 'Preset Affected 2', 'divi-wpd-filter' ),
				),
			),
		);

		parent::__construct( $name, $args );
	}
}

new DiviWpdFilter;
