<?php
add_theme_support( 'custom-logo', array(
    //ALTO
    'height'      => 50,
    //ANCHO
    'width'       => 250,
    //PERMITIR FLEXIBILIDAD EN EL TAMAÑO
    'flex-height' => true,
    'flex-width'  => true,
    //
    'header-text' => array( 'site-title', 'site-description' ),
) );

function evanzu_customize_register($wp_customize)
{
    $wp_customize -> add_panel('home_site',array(
        'title' => __("Edita el inicio de la página"),
        'description' => __("Puedes editar todo respecto al home desde aqui"),
        'priority' => 10,
    ));

    //////galeria/////////////////////
    $wp_customize->add_section('evanzu_galeria', array(
        'panel' =>'home_site',
        'priority'             => 11,
        'capability'         => 'edit_theme_options',
        'title'                => __('Galeria', 'd5-business-line'),
        'description'          => ''
    ));
  
    $wp_customize->add_setting('evanzu[galleri-image-one]', array(
        'default'           => get_template_directory_uri() . '/assets/images/slides/1_slider.png',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-one', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'evanzu_galeria',
        'settings'             => 'evanzu[galleri-image-one]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    )));


    $wp_customize->add_setting('evanzu[galleri-image-two]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-two', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'evanzu_galeria',
        'settings'             => 'evanzu[galleri-image-two]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    )));

}
add_action('customize_register', 'evanzu_customize_register');

?>