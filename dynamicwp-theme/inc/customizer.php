<?php
function dynamicwp_customize_register($wp_customize){
     
        // Panels 
        $wp_customize->add_panel( 'header_content', array( 
        'title'            => __( ' Dynamicwp Header', ' dynamicwp' ),
        'description'      => __( '' ), 
        'priority'         => 10,   
        ) );
        
        // Sections 
        $wp_customize->add_section('header_section', array(
            'title'    => __('Header Content', ' dynamicwp'),
            'description' => '',
            'priority' => 120,
            'panel' => 'header_content',
        ));   
        
        

        //  =============================
        //  = Html Input  dynamicwp Header Image =
        //  =============================

        // Settings
        $wp_customize->add_setting('header_text', array(
            'default'        => ' HOME PAGE BY MV',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
        ));
        
        // Controls
        $wp_customize->add_control('header_text', array(
            'label'      => __('Text Test', ' dynamicwp'),
            'section'    => 'header_section',
            'settings'   => 'header_text',
            'type'           => 'textarea', 
            
        ));
        


        //  =============================
        //  =Text change              =
        //  =============================
        $wp_customize->add_setting('onlyTextOutput', array(
            'default'           => 'ABC',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr',
            'type'           => 'theme_mod',  
        ));
    
        $wp_customize->add_control( "onlyTextOutput", array(
            'label'    => __('change text', 'themename'),
            'section'  => 'header_section',
            'settings' => 'onlyTextOutput',
            'type' => 'text',        
        ));


        //  =============================
        //  = Color Picker              =
        //  =============================
        $wp_customize->add_setting('header_color', array(
            'default'           => '#27ae61',
            'type'           => 'theme_mod',
        ));
      
        $wp_customize->add_control( "header_color", array(
            'label'    => __('Color scheme', 'dynamicwp'),
            'section'  => 'header_section',
            'settings' => 'header_color',
            'type' => 'color',
        ));
  
    
        
        //  =============================
        //  = Radio Input               =
        //  =============================
        $wp_customize->add_setting('header_image_show_hide', array(
            'default'        => 'yes',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
        ));
        
        $wp_customize->add_control('header_image_show_hide', array(
            'label'      => __('Thumbnail Hide Show', 'dynamicwp'),
            'section'    => 'header_section',
            'settings'   => 'header_image_show_hide',
            'type'       => 'radio',
            'choices'    => array(
                'yes' => 'Yes',
                'no' => 'No',
            ),
        ));


        
        //  =============================
        //  = Image Upload              =
        //  =============================
        $wp_customize->add_setting('logo_upload', array(
            'default'           => 'http://dynamicwp/wp-content/uploads/2021/05/dummy-logo.png',
            'capability'        => 'edit_theme_options',
        ));
    
        $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'logo_upload', array(
            'label'    => __('STICKY LOGO Upload Test', 'dynamicwp'),
            'section'  => 'header_section',
            'settings' => 'logo_upload',
        )));



}
add_action('customize_register', 'dynamicwp_customize_register');