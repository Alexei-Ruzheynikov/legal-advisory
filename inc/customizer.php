<?php
/**
 * legal-advisory Theme Customizer
 *
 * @package legal-advisory
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function legal_advisory_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'legal_advisory_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'legal_advisory_customize_partial_blogdescription',
			)
		);
	}

	// Новые настройки
	
	$wp_customize->add_section('custom_color_section', array(
		'title' => 'Наш кастомайзер',
		'priority' => 30,
	));

	$wp_customize->add_setting('header_textcolor', array(
		'default' => '#26afff',
		'transport' => 'refresh',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'link_color', array(
		'label' => 'Введите цвет',
		'section' => 'custom_color_section',
		'settings' => 'header_textcolor',
	)));



	// Новые поля
	$wp_customize->add_setting('themename_theme_options[text_test]', array(
		'default' => 'value_xyz',
		'capability' => 'edit_theme_options',
		'type' => 'option',
	));

	$wp_customize->add_control( 'themename_text_test', array(
		'label' => 'Введите текст',
		'section' => 'custom_color_section',
		'settings' => 'themename_theme_options[text_test]',
	));

	//  =============================
    //  = Radio Input               =
    //  =============================

	$wp_customize->add_setting('themename_theme_options[color_scheme]', array(
        'default'        => 'value2',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));
  
    $wp_customize->add_control('themename_color_scheme', array(
        'label'      => __('Color Scheme', 'themename'),
        'section'    => 'custom_color_section',
        'settings'   => 'themename_theme_options[color_scheme]',
        'type'       => 'radio',
        'choices'    => array(
            'value1' => 'Choice 1',
            'value2' => 'Choice 2',
            'value3' => 'Choice 3',
        ),
    ));

	//  =============================
    //  = Checkbox                  =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[checkbox_test]', array(
        'capability' => 'edit_theme_options',
        'type'       => 'option',
    ));
  
    $wp_customize->add_control('display_header_text', array(
        'settings' => 'themename_theme_options[checkbox_test]',
        'label'    => __('Display Header Text'),
        'section'  => 'custom_color_section',
        'type'     => 'checkbox',
    ));

}
add_action( 'customize_register', 'legal_advisory_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function legal_advisory_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function legal_advisory_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function legal_advisory_customize_preview_js() {
	wp_enqueue_script( 'legal-advisory-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'legal_advisory_customize_preview_js' );


function legal_advisory_customize_color_css() {
	?>
	<style type="text/css">
		.logo { background-color: #<?php echo get_theme_mod('header_textcolor', '26afff'); ?>; }
	</style>
	<?php
}
add_action('wp_head', 'legal_advisory_customize_color_css');