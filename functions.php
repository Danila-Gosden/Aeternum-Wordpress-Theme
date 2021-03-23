<?php 

function strategy_assets() {
    wp_enqueue_style( 'style_css', get_template_directory_uri() . '/assets/styles/style.css');

    wp_enqueue_style( 'reset_css', get_template_directory_uri() . '/assets/styles/reset.css');

   
    wp_enqueue_script( 'main_js', get_template_directory_uri() . '/assets/js/main.js', array(), '20151215', true );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/libraries/jquery/jquery.js', array(), '20151215', true );
}

add_action( 'wp_enqueue_scripts', 'strategy_assets' );

show_admin_bar(false);


function admin_panel_setting($wp_customize)
{
    //Home Page Panel
    $wp_customize->add_section(
        'home',
        array(
            'title' => __('Home Page', 'aletheme'),
            'priority' => 1,
        )
    );

    $wp_customize->add_setting(
        'home_header_title',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'home_header_title', array(
                'label' => 'Header Title', 'aletheme',
                'section' => 'home',
                'setting' => 'home_header_title',
                'type' => 'input',
            )
        )
    );

    $home_header_title = 'home_header_title';
    $wp_customize->selective_refresh->add_partial($home_header_title, array(
        'selector' => '.home_header_title', 
        'render_callback' => function() use ($home_header_title) {
            return nl2br(esc_html(get_theme_mod($home_header_title)));
        }
    ));




    $wp_customize->add_setting(
        'home__welcome_block_name',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'home__welcome_block_name', array(
                'label' => 'Pop up name', 'aletheme',
                'section' => 'home',
                'setting' => 'home__welcome_block_name',
                'type' => 'input',
            )
        )
    );

    $home__welcome_block_name = 'home__welcome_block_name';
    $wp_customize->selective_refresh->add_partial($home__welcome_block_name, array(
        'selector' => '.home__welcome_block_name', 
        'render_callback' => function() use ($home__welcome_block_name) {
            return nl2br(esc_html(get_theme_mod($home__welcome_block_name)));
        }
    ));


    $wp_customize->add_setting(
        'home__welcome_text',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'home__welcome_text', array(
                'label' => 'Pop up text', 'aletheme',
                'section' => 'home',
                'setting' => 'home__welcome_text',
                'type' => 'input',
            )
        )
    );

    $home__welcome_text = 'home__welcome_text';
    $wp_customize->selective_refresh->add_partial($home__welcome_text, array(
        'selector' => '.home__welcome_text', 
        'render_callback' => function() use ($home__welcome_text) {
            return nl2br(esc_html(get_theme_mod($home__welcome_text)));
        }
    ));


    $wp_customize->add_setting(
        'home__welcome_link',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'home__welcome_link', array(
                'label' => 'Pop up button', 'aletheme',
                'section' => 'home',
                'setting' => 'home__welcome_link',
                'type' => 'input',
            )
        )
    );

    $home__welcome_link = 'home__welcome_link';
    $wp_customize->selective_refresh->add_partial($home__welcome_link, array(
        'selector' => '.home__welcome_link', 
        'render_callback' => function() use ($home__welcome_link) {
            return nl2br(esc_html(get_theme_mod($home__welcome_link)));
        }
    ));


    $wp_customize->add_setting(
        'home__icons_text1',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'home__icons_text1', array(
                'label' => 'First icon text', 'aletheme',
                'section' => 'home',
                'setting' => 'home__icons_text1',
                'type' => 'input',
            )
        )
    );

    $home__icons_text1 = 'home__icons_text1';
    $wp_customize->selective_refresh->add_partial($home__icons_text1, array(
        'selector' => '.home__icons_text1', 
        'render_callback' => function() use ($home__icons_text1) {
            return nl2br(esc_html(get_theme_mod($home__icons_text1)));
        }
    ));


    $wp_customize->add_setting(
        'home__icons_text2',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'home__icons_text2', array(
                'label' => 'Second icon text', 'aletheme',
                'section' => 'home',
                'setting' => 'home__icons_text2',
                'type' => 'input',
            )
        )
    );

    $home__icons_text2 = 'home__icons_text2';
    $wp_customize->selective_refresh->add_partial($home__icons_text2, array(
        'selector' => '.home__icons_text2', 
        'render_callback' => function() use ($home__icons_text2) {
            return nl2br(esc_html(get_theme_mod($home__icons_text2)));
        }
    ));


    $wp_customize->add_setting(
        'home__icons_text3',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'home__icons_text3', array(
                'label' => 'Third icon text', 'aletheme',
                'section' => 'home',
                'setting' => 'home__icons_text3',
                'type' => 'input',
            )
        )
    );

    $home__icons_text3 = 'home__icons_text3';
    $wp_customize->selective_refresh->add_partial($home__icons_text3, array(
        'selector' => '.home__icons_text3', 
        'render_callback' => function() use ($home__icons_text3) {
            return nl2br(esc_html(get_theme_mod($home__icons_text3)));
        }
    ));


    $wp_customize->add_setting(
        'home__icons_text4',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'home__icons_text4', array(
                'label' => 'Fourth icon text', 'aletheme',
                'section' => 'home',
                'setting' => 'home__icons_text4',
                'type' => 'input',
            )
        )
    );

    $home__icons_text4 = 'home__icons_text4';
    $wp_customize->selective_refresh->add_partial($home__icons_text4, array(
        'selector' => '.home__icons_text4', 
        'render_callback' => function() use ($home__icons_text4) {
            return nl2br(esc_html(get_theme_mod($home__icons_text4)));
        }
    ));


    $wp_customize->add_setting(
        'home__content_name',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'home__content_name', array(
                'label' => 'Main content name', 'aletheme',
                'section' => 'home',
                'setting' => 'home__content_name',
                'type' => 'input',
            )
        )
    );

    $home__content_name = 'home__content_name';
    $wp_customize->selective_refresh->add_partial($home__content_name, array(
        'selector' => '.home__content_name', 
        'render_callback' => function() use ($home__content_name) {
            return nl2br(esc_html(get_theme_mod($home__content_name)));
        }
    ));


    $wp_customize->add_setting(
        'home__content_text',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'home__content_text', array(
                'label' => 'Main content text', 'aletheme',
                'section' => 'home',
                'setting' => 'home__content_text',
                'type' => 'input',
            )
        )
    );

    $home__content_text = 'home__content_text';
    $wp_customize->selective_refresh->add_partial($home__content_text, array(
        'selector' => '.home__content_text', 
        'render_callback' => function() use ($home__content_text) {
            return nl2br(esc_html(get_theme_mod($home__content_text)));
        }
    ));


    $wp_customize->add_setting(
        'home__hieroglyphs_text',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'home__hieroglyphs_text', array(
                'label' => 'Main location text', 'aletheme',
                'section' => 'home',
                'setting' => 'home__hieroglyphs_text',
                'type' => 'input',
            )
        )
    );

    $home__hieroglyphs_text = 'home__hieroglyphs_text';
    $wp_customize->selective_refresh->add_partial($home__hieroglyphs_text, array(
        'selector' => '.home__hieroglyphs_text', 
        'render_callback' => function() use ($home__hieroglyphs_text) {
            return nl2br(esc_html(get_theme_mod($home__hieroglyphs_text)));
        }
    ));



    //About US Page Panel
    $wp_customize->add_section(
        'about',
        array(
            'title' => __('About US Page', 'aletheme'),
            'priority' => 1,
        )
    );
    $wp_customize->add_setting(
        'about__capital_name',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'about__capital_name', array(
                'label' => 'About US Name', 'aletheme',
                'section' => 'about',
                'setting' => 'about__capital_name',
                'type' => 'input',
            )
        )
    );

    $about__capital_name = 'about__capital_name';
    $wp_customize->selective_refresh->add_partial($about__capital_name, array(
        'selector' => '.about__capital_name', 
        'render_callback' => function() use ($about__capital_name) {
            return nl2br(esc_html(get_theme_mod($about__capital_name)));
        }
    ));


    $wp_customize->add_setting(
        'about__capital_text',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'about__capital_text', array(
                'label' => 'About US Text', 'aletheme',
                'section' => 'about',
                'setting' => 'about__capital_text',
                'type' => 'input',
            )
        )
    );

    $about__capital_text = 'about__capital_text';
    $wp_customize->selective_refresh->add_partial($about__capital_text, array(
        'selector' => '.about__capital_text', 
        'render_callback' => function() use ($about__capital_text) {
            return nl2br(esc_html(get_theme_mod($about__capital_text)));
        }
    ));


    $wp_customize->add_setting(
        'about__process_name',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'about__process_name', array(
                'label' => 'About Investment Process Name', 'aletheme',
                'section' => 'about',
                'setting' => 'about__process_name',
                'type' => 'input',
            )
        )
    );

    $about__process_name = 'about__process_name';
    $wp_customize->selective_refresh->add_partial($about__process_name, array(
        'selector' => '.about__process_name', 
        'render_callback' => function() use ($about__process_name) {
            return nl2br(esc_html(get_theme_mod($about__process_name)));
        }
    ));


    $wp_customize->add_setting(
        'about__process_text',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'about__process_text', array(
                'label' => 'About Investment Process Text', 'aletheme',
                'section' => 'about',
                'setting' => 'about__process_text',
                'type' => 'input',
            )
        )
    );

    $about__process_text = 'about__process_text';
    $wp_customize->selective_refresh->add_partial($about__process_text, array(
        'selector' => '.about__process_text', 
        'render_callback' => function() use ($about__process_text) {
            return nl2br(esc_html(get_theme_mod($about__process_text)));
        }
    ));


    $wp_customize->add_setting(
        'about__sectors_name',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'about__sectors_name', array(
                'label' => 'About Companies And Sectors', 'aletheme',
                'section' => 'about',
                'setting' => 'about__sectors_name',
                'type' => 'input',
            )
        )
    );

    $about__sectors_name = 'about__sectors_name';
    $wp_customize->selective_refresh->add_partial($about__sectors_name, array(
        'selector' => '.about__sectors_name', 
        'render_callback' => function() use ($about__sectors_name) {
            return nl2br(esc_html(get_theme_mod($about__sectors_name)));
        }
    ));


    $wp_customize->add_setting(
        'about__sectors_text',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'about__sectors_text', array(
                'label' => 'About Companies And Sectors', 'aletheme',
                'section' => 'about',
                'setting' => 'about__sectors_text',
                'type' => 'input',
            )
        )
    );

    $about__sectors_text = 'about__sectors_text';
    $wp_customize->selective_refresh->add_partial($about__sectors_text, array(
        'selector' => '.about__sectors_text', 
        'render_callback' => function() use ($about__sectors_text) {
            return nl2br(esc_html(get_theme_mod($about__sectors_text)));
        }
    ));




    //Active Ownership Page Panel
    $wp_customize->add_section(
        'active ownership',
        array(
            'title' => __('Active Ownership Page', 'aletheme'),
            'priority' => 1,
        )
    );
    $wp_customize->add_setting(
        'active__ownership_name',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'active__ownership_name', array(
                'label' => 'Active Ownership Name', 'aletheme',
                'section' => 'active ownership',
                'setting' => 'active__ownership_name',
                'type' => 'input',
            )
        )
    );

    $active__ownership_name = 'active__ownership_name';
    $wp_customize->selective_refresh->add_partial($active__ownership_name, array(
        'selector' => '.active__ownership_name', 
        'render_callback' => function() use ($active__ownership_name) {
            return nl2br(esc_html(get_theme_mod($active__ownership_name)));
        }
    ));
    

    $wp_customize->add_setting(
        'active__ownership_text',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'active__ownership_text', array(
                'label' => 'Active Ownership Text', 'aletheme',
                'section' => 'active ownership',
                'setting' => 'active__ownership_text',
                'type' => 'input',
            )
        )
    );

    $active__ownership_text = 'active__ownership_text';
    $wp_customize->selective_refresh->add_partial($active__ownership_text, array(
        'selector' => '.active__ownership_text', 
        'render_callback' => function() use ($active__ownership_text) {
            return nl2br(esc_html(get_theme_mod($active__ownership_text)));
        }
    ));


    $wp_customize->add_setting(
        'active__philosophy_name',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'active__philosophy_name', array(
                'label' => 'Active Ownership Philosophy Name', 'aletheme',
                'section' => 'active ownership',
                'setting' => 'active__philosophy_name',
                'type' => 'input',
            )
        )
    );

    $active__philosophy_name = 'active__philosophy_name';
    $wp_customize->selective_refresh->add_partial($active__philosophy_name, array(
        'selector' => '.active__philosophy_name', 
        'render_callback' => function() use ($active__philosophy_name) {
            return nl2br(esc_html(get_theme_mod($active__philosophy_name)));
        }
    ));


    $wp_customize->add_setting(
        'active__philosophy_text',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'active__philosophy_text', array(
                'label' => 'Active Ownership Philosophy Text', 'aletheme',
                'section' => 'active ownership',
                'setting' => 'active__philosophy_text',
                'type' => 'input',
            )
        )
    );

    $active__philosophy_text = 'active__philosophy_text';
    $wp_customize->selective_refresh->add_partial($active__philosophy_text, array(
        'selector' => '.active__philosophy_text', 
        'render_callback' => function() use ($active__philosophy_text) {
            return nl2br(esc_html(get_theme_mod($active__philosophy_text)));
        }
    ));


    $wp_customize->add_setting(
        'active__strategy_name',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'active__strategy_name', array(
                'label' => 'Active Ownership Strategy Name', 'aletheme',
                'section' => 'active ownership',
                'setting' => 'active__strategy_name',
                'type' => 'input',
            )
        )
    );

    $active__strategy_name = 'active__strategy_name';
    $wp_customize->selective_refresh->add_partial($active__strategy_name, array(
        'selector' => '.active__strategy_name', 
        'render_callback' => function() use ($active__strategy_name) {
            return nl2br(esc_html(get_theme_mod($active__strategy_name)));
        }
    ));


    $wp_customize->add_setting(
        'active__strategy_text1',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'active__strategy_text1', array(
                'label' => 'Active Ownership Strategy 1', 'aletheme',
                'section' => 'active ownership',
                'setting' => 'active__strategy_text1',
                'type' => 'input',
            )
        )
    );

    $active__strategy_text1 = 'active__strategy_text1';
    $wp_customize->selective_refresh->add_partial($active__strategy_text1, array(
        'selector' => '.active__strategy_text1', 
        'render_callback' => function() use ($active__strategy_text1) {
            return nl2br(esc_html(get_theme_mod($active__strategy_text1)));
        }
    ));


    $wp_customize->add_setting(
        'active__strategy_text2',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'active__strategy_text2', array(
                'label' => 'Active Ownership Strategy 2', 'aletheme',
                'section' => 'active ownership',
                'setting' => 'active__strategy_text2',
                'type' => 'input',
            )
        )
    );

    $active__strategy_text2 = 'active__strategy_text2';
    $wp_customize->selective_refresh->add_partial($active__strategy_text2, array(
        'selector' => '.active__strategy_text2', 
        'render_callback' => function() use ($active__strategy_text2) {
            return nl2br(esc_html(get_theme_mod($active__strategy_text2)));
        }
    ));


    $wp_customize->add_setting(
        'active__strategy_text3',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'active__strategy_text3', array(
                'label' => 'Active Ownership Strategy 3', 'aletheme',
                'section' => 'active ownership',
                'setting' => 'active__strategy_text3',
                'type' => 'input',
            )
        )
    );

    $active__strategy_text3 = 'active__strategy_text3';
    $wp_customize->selective_refresh->add_partial($active__strategy_text3, array(
        'selector' => '.active__strategy_text3', 
        'render_callback' => function() use ($active__strategy_text3) {
            return nl2br(esc_html(get_theme_mod($active__strategy_text3)));
        }
    ));


    $wp_customize->add_setting(
        'active__strategy_text4',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'active__strategy_text4', array(
                'label' => 'Active Ownership Strategy 4', 'aletheme',
                'section' => 'active ownership',
                'setting' => 'active__strategy_text4',
                'type' => 'input',
            )
        )
    );

    $active__strategy_text4 = 'active__strategy_text4';
    $wp_customize->selective_refresh->add_partial($active__strategy_text4, array(
        'selector' => '.active__strategy_text4', 
        'render_callback' => function() use ($active__strategy_text4) {
            return nl2br(esc_html(get_theme_mod($active__strategy_text4)));
        }
    ));


    $wp_customize->add_setting(
        'active__strategy_text5',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'active__strategy_text5', array(
                'label' => 'Active Ownership Strategy 5', 'aletheme',
                'section' => 'active ownership',
                'setting' => 'active__strategy_text5',
                'type' => 'input',
            )
        )
    );

    $active__strategy_text5 = 'active__strategy_text5';
    $wp_customize->selective_refresh->add_partial($active__strategy_text5, array(
        'selector' => '.active__strategy_text5', 
        'render_callback' => function() use ($active__strategy_text5) {
            return nl2br(esc_html(get_theme_mod($active__strategy_text5)));
        }
    ));


    $wp_customize->add_setting(
        'active__strategy_text6',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'active__strategy_text6', array(
                'label' => 'Active Ownership Strategy 6', 'aletheme',
                'section' => 'active ownership',
                'setting' => 'active__strategy_text6',
                'type' => 'input',
            )
        )
    );

    $active__strategy_text6 = 'active__strategy_text6';
    $wp_customize->selective_refresh->add_partial($active__strategy_text6, array(
        'selector' => '.active__strategy_text6', 
        'render_callback' => function() use ($active__strategy_text6) {
            return nl2br(esc_html(get_theme_mod($active__strategy_text6)));
        }
    ));


    $wp_customize->add_setting(
        'active__board_name',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'active__board_name', array(
                'label' => 'Active Ownership Advisory Board Name', 'aletheme',
                'section' => 'active ownership',
                'setting' => 'active__board_name',
                'type' => 'input',
            )
        )
    );

    $active__board_name = 'active__board_name';
    $wp_customize->selective_refresh->add_partial($active__board_name, array(
        'selector' => '.active__board_name', 
        'render_callback' => function() use ($active__board_name) {
            return nl2br(esc_html(get_theme_mod($active__board_name)));
        }
    ));


    $wp_customize->add_setting(
        'active__board_text',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'active__board_text', array(
                'label' => 'Active Ownership Advisory Board Text', 'aletheme',
                'section' => 'active ownership',
                'setting' => 'active__board_text',
                'type' => 'input',
            )
        )
    );

    $active__board_text = 'active__board_text';
    $wp_customize->selective_refresh->add_partial($active__board_text, array(
        'selector' => '.active__board_text', 
        'render_callback' => function() use ($active__board_text) {
            return nl2br(esc_html(get_theme_mod($active__board_text)));
        }
    ));


    $wp_customize->add_setting(
        'active__focus_name',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'active__focus_name', array(
                'label' => 'Active Ownership Public Focus Name', 'aletheme',
                'section' => 'active ownership',
                'setting' => 'active__focus_name',
                'type' => 'input',
            )
        )
    );

    $active__focus_name = 'active__focus_name';
    $wp_customize->selective_refresh->add_partial($active__focus_name, array(
        'selector' => '.active__focus_name', 
        'render_callback' => function() use ($active__focus_name) {
            return nl2br(esc_html(get_theme_mod($active__focus_name)));
        }
    ));


    $wp_customize->add_setting(
        'active__focus_text1',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'active__focus_text1', array(
                'label' => 'Active Ownership Public Focus 1', 'aletheme',
                'section' => 'active ownership',
                'setting' => 'active__focus_text1',
                'type' => 'input',
            )
        )
    );

    $active__focus_text1 = 'active__focus_text1';
    $wp_customize->selective_refresh->add_partial($active__focus_text1, array(
        'selector' => '.active__focus_text1', 
        'render_callback' => function() use ($active__focus_text1) {
            return nl2br(esc_html(get_theme_mod($active__focus_text1)));
        }
    ));

    $wp_customize->add_setting(
        'active__focus_text2',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'active__focus_text2', array(
                'label' => 'Active Ownership Public Focus 2', 'aletheme',
                'section' => 'active ownership',
                'setting' => 'active__focus_text2',
                'type' => 'input',
            )
        )
    );

    $active__focus_text2 = 'active__focus_text2';
    $wp_customize->selective_refresh->add_partial($active__focus_text2, array(
        'selector' => '.active__focus_text2', 
        'render_callback' => function() use ($active__focus_text2) {
            return nl2br(esc_html(get_theme_mod($active__focus_text2)));
        }
    ));


    $wp_customize->add_setting(
        'active__focus_text3',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'active__focus_text3', array(
                'label' => 'Active Ownership Public Focus 3', 'aletheme',
                'section' => 'active ownership',
                'setting' => 'active__focus_text3',
                'type' => 'input',
            )
        )
    );

    $active__focus_text3 = 'active__focus_text3';
    $wp_customize->selective_refresh->add_partial($active__focus_text3, array(
        'selector' => '.active__focus_text3', 
        'render_callback' => function() use ($active__focus_text3) {
            return nl2br(esc_html(get_theme_mod($active__focus_text3)));
        }
    ));


    $wp_customize->add_setting(
        'active__focus_text4',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'active__focus_text4', array(
                'label' => 'Active Ownership Public Focus 4', 'aletheme',
                'section' => 'active ownership',
                'setting' => 'active__focus_text4',
                'type' => 'input',
            )
        )
    );

    $active__focus_text4 = 'active__focus_text4';
    $wp_customize->selective_refresh->add_partial($active__focus_text4, array(
        'selector' => '.active__focus_text4', 
        'render_callback' => function() use ($active__focus_text4) {
            return nl2br(esc_html(get_theme_mod($active__focus_text4)));
        }
    ));


    $wp_customize->add_setting(
        'active__focus_namePrivat',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'active__focus_namePrivat', array(
                'label' => 'Active Ownership Privat Focus Name', 'aletheme',
                'section' => 'active ownership',
                'setting' => 'active__focus_namePrivat',
                'type' => 'input',
            )
        )
    );

    $active__focus_namePrivat = 'active__focus_namePrivat';
    $wp_customize->selective_refresh->add_partial($active__focus_namePrivat, array(
        'selector' => '.active__focus_namePrivat', 
        'render_callback' => function() use ($active__focus_namePrivat) {
            return nl2br(esc_html(get_theme_mod($active__focus_namePrivat)));
        }
    ));


    $wp_customize->add_setting(
        'active__focus_textPrivat1',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'active__focus_textPrivat1', array(
                'label' => 'Active Ownership Privat Focus 1', 'aletheme',
                'section' => 'active ownership',
                'setting' => 'active__focus_textPrivat1',
                'type' => 'input',
            )
        )
    );

    $active__focus_textPrivat1 = 'active__focus_textPrivat1';
    $wp_customize->selective_refresh->add_partial($active__focus_textPrivat1, array(
        'selector' => '.active__focus_textPrivat1', 
        'render_callback' => function() use ($active__focus_textPrivat1) {
            return nl2br(esc_html(get_theme_mod($active__focus_textPrivat1)));
        }
    ));


    $wp_customize->add_setting(
        'active__focus_textPrivat2',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'active__focus_textPrivat2', array(
                'label' => 'Active Ownership Privat Focus 2', 'aletheme',
                'section' => 'active ownership',
                'setting' => 'active__focus_textPrivat2',
                'type' => 'input',
            )
        )
    );

    $active__focus_textPrivat2 = 'active__focus_textPrivat2';
    $wp_customize->selective_refresh->add_partial($active__focus_textPrivat2, array(
        'selector' => '.active__focus_textPrivat2', 
        'render_callback' => function() use ($active__focus_textPrivat2) {
            return nl2br(esc_html(get_theme_mod($active__focus_textPrivat2)));
        }
    ));


    $wp_customize->add_setting(
        'active__focus_textPrivat3',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'active__focus_textPrivat3', array(
                'label' => 'Active Ownership Privat Focus 3', 'aletheme',
                'section' => 'active ownership',
                'setting' => 'active__focus_textPrivat3',
                'type' => 'input',
            )
        )
    );

    $active__focus_textPrivat3 = 'active__focus_textPrivat3';
    $wp_customize->selective_refresh->add_partial($active__focus_textPrivat3, array(
        'selector' => '.active__focus_textPrivat3', 
        'render_callback' => function() use ($active__focus_textPrivat3) {
            return nl2br(esc_html(get_theme_mod($active__focus_textPrivat3)));
        }
    ));



    //Team Page Panel
    $wp_customize->add_section(
        'team',
        array(
            'title' => __('Team Page', 'aletheme'),
            'priority' => 1,
        )
    );
    $wp_customize->add_setting(
        'team__contact_txt',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'team__contact_txt', array(
                'label' => 'Team Name', 'aletheme',
                'section' => 'team',
                'setting' => 'team__contact_txt',
                'type' => 'input',
            )
        )
    );

    $team__contact_txt = 'team__contact_txt';
    $wp_customize->selective_refresh->add_partial($team__contact_txt, array(
        'selector' => '.team__contact_txt', 
        'render_callback' => function() use ($team__contact_txt) {
            return nl2br(esc_html(get_theme_mod($team__contact_txt)));
        }
    ));


    $wp_customize->add_setting(
        'team__contact_why',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'team__contact_why', array(
                'label' => 'Team Skills', 'aletheme',
                'section' => 'team',
                'setting' => 'team__contact_why',
                'type' => 'input',
            )
        )
    );

    $team__contact_why = 'team__contact_why';
    $wp_customize->selective_refresh->add_partial($team__contact_why, array(
        'selector' => '.team__contact_why', 
        'render_callback' => function() use ($team__contact_why) {
            return nl2br(esc_html(get_theme_mod($team__contact_why)));
        }
    ));


    $wp_customize->add_setting(
        'team__contact_btn',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'team__contact_btn', array(
                'label' => 'Team Btn', 'aletheme',
                'section' => 'team',
                'setting' => 'team__contact_btn',
                'type' => 'input',
            )
        )
    );

    $team__contact_btn = 'team__contact_btn';
    $wp_customize->selective_refresh->add_partial($team__contact_btn, array(
        'selector' => '.team__contact_btn', 
        'render_callback' => function() use ($team__contact_btn) {
            return nl2br(esc_html(get_theme_mod($team__contact_btn)));
        }
    ));


    $wp_customize->add_setting(
        'team__about_name',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'team__about_name', array(
                'label' => 'Team About Name', 'aletheme',
                'section' => 'team',
                'setting' => 'team__about_name',
                'type' => 'input',
            )
        )
    );

    $team__about_name = 'team__about_name';
    $wp_customize->selective_refresh->add_partial($team__about_name, array(
        'selector' => '.team__about_name', 
        'render_callback' => function() use ($team__about_name) {
            return nl2br(esc_html(get_theme_mod($team__about_name)));
        }
    ));


    $wp_customize->add_setting(
        'team__about_1person_name',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'team__about_1person_name', array(
                'label' => '1 Person Name', 'aletheme',
                'section' => 'team',
                'setting' => 'team__about_1person_name',
                'type' => 'input',
            )
        )
    );
    
    $team__about_1person_name = 'team__about_1person_name';
    $wp_customize->selective_refresh->add_partial($team__about_1person_name, array(
        'selector' => '.team__about_1person_name', 
        'render_callback' => function() use ($team__about_1person_name) {
            return nl2br(esc_html(get_theme_mod($team__about_1person_name)));
        }
    ));


    $wp_customize->add_setting(
        'team__about_1person_position',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'team__about_1person_position', array(
                'label' => '1 Person Position', 'aletheme',
                'section' => 'team',
                'setting' => 'team__about_1person_position',
                'type' => 'input',
            )
        )
    );

    $team__about_1person_position = 'team__about_1person_position';
    $wp_customize->selective_refresh->add_partial($team__about_1person_position, array(
        'selector' => '.team__about_1person_position', 
        'render_callback' => function() use ($team__about_1person_position) {
            return nl2br(esc_html(get_theme_mod($team__about_1person_position)));
        }
    ));


    $wp_customize->add_setting(
        'team__about_1person_text1',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'team__about_1person_text1', array(
                'label' => '1 Person About1', 'aletheme',
                'section' => 'team',
                'setting' => 'team__about_1person_text1',
                'type' => 'input',
            )
        )
    );

    $team__about_1person_text1 = 'team__about_1person_text1';
    $wp_customize->selective_refresh->add_partial($team__about_1person_text1, array(
        'selector' => '.team__about_1person_text1', 
        'render_callback' => function() use ($team__about_1person_text1) {
            return nl2br(esc_html(get_theme_mod($team__about_1person_text1)));
        }
    ));


    $wp_customize->add_setting(
        'team__about_1person_text2',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'team__about_1person_text2', array(
                'label' => '1 Person About2', 'aletheme',
                'section' => 'team',
                'setting' => 'team__about_1person_text2',
                'type' => 'input',
            )
        )
    );

    $team__about_1person_text2 = 'team__about_1person_text2';
    $wp_customize->selective_refresh->add_partial($team__about_1person_text2, array(
        'selector' => '.team__about_1person_text2', 
        'render_callback' => function() use ($team__about_1person_text2) {
            return nl2br(esc_html(get_theme_mod($team__about_1person_text2)));
        }
    ));


    $wp_customize->add_setting(
        'team__about_1person_text3',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'team__about_1person_text3', array(
                'label' => '1 Person About3', 'aletheme',
                'section' => 'team',
                'setting' => 'team__about_1person_text3',
                'type' => 'input',
            )
        )
    );

    $team__about_1person_text3 = 'team__about_1person_text3';
    $wp_customize->selective_refresh->add_partial($team__about_1person_text3, array(
        'selector' => '.team__about_1person_text3', 
        'render_callback' => function() use ($team__about_1person_text3) {
            return nl2br(esc_html(get_theme_mod($team__about_1person_text3)));
        }
    ));


    $wp_customize->add_setting(
        'team__about_2person_name',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'team__about_2person_name', array(
                'label' => '2 Person Name', 'aletheme',
                'section' => 'team',
                'setting' => 'team__about_2person_name',
                'type' => 'input',
            )
        )
    );

    $team__about_2person_name = 'team__about_2person_name';
    $wp_customize->selective_refresh->add_partial($team__about_2person_name, array(
        'selector' => '.team__about_2person_name', 
        'render_callback' => function() use ($team__about_2person_name) {
            return nl2br(esc_html(get_theme_mod($team__about_2person_name)));
        }
    ));


    $wp_customize->add_setting(
        'team__about_2person_position',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'team__about_2person_position', array(
                'label' => '2 Person Position', 'aletheme',
                'section' => 'team',
                'setting' => 'team__about_2person_position',
                'type' => 'input',
            )
        )
    );

    $team__about_2person_position = 'team__about_2person_position';
    $wp_customize->selective_refresh->add_partial($team__about_2person_position, array(
        'selector' => '.team__about_2person_position', 
        'render_callback' => function() use ($team__about_2person_position) {
            return nl2br(esc_html(get_theme_mod($team__about_2person_position)));
        }
    ));

    $wp_customize->add_setting(
        'team__about_3person_name',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'team__about_3person_name', array(
                'label' => '3 Person Name', 'aletheme',
                'section' => 'team',
                'setting' => 'team__about_3person_name',
                'type' => 'input',
            )
        )
    );

    $team__about_3person_name = 'team__about_3person_name';
    $wp_customize->selective_refresh->add_partial($team__about_3person_name, array(
        'selector' => '.team__about_3person_name', 
        'render_callback' => function() use ($team__about_3person_name) {
            return nl2br(esc_html(get_theme_mod($team__about_3person_name)));
        }
    ));


    $wp_customize->add_setting(
        'team__about_3person_position',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'team__about_3person_position', array(
                'label' => '3 Person Position', 'aletheme',
                'section' => 'team',
                'setting' => 'team__about_3person_position',
                'type' => 'input',
            )
        )
    );

    $team__about_3person_position = 'team__about_3person_position';
    $wp_customize->selective_refresh->add_partial($team__about_3person_position, array(
        'selector' => '.team__about_3person_position', 
        'render_callback' => function() use ($team__about_3person_position) {
            return nl2br(esc_html(get_theme_mod($team__about_3person_position)));
        }
    ));


    $wp_customize->add_setting(
        'team__about_3person_text1',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'team__about_3person_text1', array(
                'label' => '3 Person About1', 'aletheme',
                'section' => 'team',
                'setting' => 'team__about_3person_text1',
                'type' => 'input',
            )
        )
    );

    $team__about_3person_text1 = 'team__about_3person_text1';
    $wp_customize->selective_refresh->add_partial($team__about_3person_text1, array(
        'selector' => '.team__about_3person_text1', 
        'render_callback' => function() use ($team__about_3person_text1) {
            return nl2br(esc_html(get_theme_mod($team__about_3person_text1)));
        }
    ));


    $wp_customize->add_setting(
        'team__about_3person_text2',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'team__about_3person_text2', array(
                'label' => '3 Person About2', 'aletheme',
                'section' => 'team',
                'setting' => 'team__about_3person_text2',
                'type' => 'input',
            )
        )
    );

    $team__about_3person_text2 = 'team__about_3person_text2';
    $wp_customize->selective_refresh->add_partial($team__about_3person_text2, array(
        'selector' => '.team__about_3person_text2', 
        'render_callback' => function() use ($team__about_3person_text2) {
            return nl2br(esc_html(get_theme_mod($team__about_3person_text2)));
        }
    ));



    //Contact Page Panel
    $wp_customize->add_section(
        'contact',
        array(
            'title' => __('Contact Page', 'aletheme'),
            'priority' => 1,
        )
    );
    $wp_customize->add_setting(
        'contact__content_name',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'contact__content_name', array(
                'label' => 'Contact Us Name', 'aletheme',
                'section' => 'contact',
                'setting' => 'contact__content_name',
                'type' => 'input',
            )
        )
    );

    $contact__content_name = 'contact__content_name';
    $wp_customize->selective_refresh->add_partial($contact__content_name, array(
        'selector' => '.contact__content_name', 
        'render_callback' => function() use ($contact__content_name) {
            return nl2br(esc_html(get_theme_mod($contact__content_name)));
        }
    ));

    $wp_customize->add_setting(
        'contact__content_text',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'contact__content_text', array(
                'label' => 'Contact Us Text', 'aletheme',
                'section' => 'contact',
                'setting' => 'contact__content_text',
                'type' => 'input',
            )
        )
    );

    $contact__content_text = 'contact__content_text';
    $wp_customize->selective_refresh->add_partial($contact__content_text, array(
        'selector' => '.contact__content_text', 
        'render_callback' => function() use ($contact__content_text) {
            return nl2br(esc_html(get_theme_mod($contact__content_text)));
        }
    ));


    $wp_customize->add_setting(
        'contact__connection_name',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'contact__connection_name', array(
                'label' => 'Contact Us Information', 'aletheme',
                'section' => 'contact',
                'setting' => 'contact__connection_name',
                'type' => 'input',
            )
        )
    );

    $contact__connection_name = 'contact__connection_name';
    $wp_customize->selective_refresh->add_partial($contact__connection_name, array(
        'selector' => '.contact__connection_name', 
        'render_callback' => function() use ($contact__connection_name) {
            return nl2br(esc_html(get_theme_mod($contact__connection_name)));
        }
    ));


    $wp_customize->add_setting(
        'contact__connection_1person_mail',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'contact__connection_1person_mail', array(
                'label' => 'First Person Mail', 'aletheme',
                'section' => 'contact',
                'setting' => 'contact__connection_1person_mail',
                'type' => 'input',
            )
        )
    );

    $contact__connection_1person_mail = 'contact__connection_1person_mail';
    $wp_customize->selective_refresh->add_partial($contact__connection_1person_mail, array(
        'selector' => '.contact__connection_1person_mail', 
        'render_callback' => function() use ($contact__connection_1person_mail) {
            return nl2br(esc_html(get_theme_mod($contact__connection_1person_mail)));
        }
    ));


    $wp_customize->add_setting(
        'contact__connection_1person_phone',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'contact__connection_1person_phone', array(
                'label' => 'First Person Phone', 'aletheme',
                'section' => 'contact',
                'setting' => 'contact__connection_1person_phone',
                'type' => 'input',
            )
        )
    );

    $contact__connection_1person_phone = 'contact__connection_1person_phone';
    $wp_customize->selective_refresh->add_partial($contact__connection_1person_phone, array(
        'selector' => '.contact__connection_1person_phone', 
        'render_callback' => function() use ($contact__connection_1person_phone) {
            return nl2br(esc_html(get_theme_mod($contact__connection_1person_phone)));
        }
    ));


    $wp_customize->add_setting(
        'contact__connection_2person_mail',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'contact__connection_2person_mail', array(
                'label' => 'Second Person Mail', 'aletheme',
                'section' => 'contact',
                'setting' => 'contact__connection_2person_mail',
                'type' => 'input',
            )
        )
    );

    $contact__connection_2person_mail = 'contact__connection_2person_mail';
    $wp_customize->selective_refresh->add_partial($contact__connection_2person_mail, array(
        'selector' => '.contact__connection_2person_mail', 
        'render_callback' => function() use ($contact__connection_2person_mail) {
            return nl2br(esc_html(get_theme_mod($contact__connection_2person_mail)));
        }
    ));


    $wp_customize->add_setting(
        'contact__connection_2person_phone',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'contact__connection_2person_phone', array(
                'label' => 'Second Person Phone', 'aletheme',
                'section' => 'contact',
                'setting' => 'contact__connection_2person_phone',
                'type' => 'input',
            )
        )
    );

    $contact__connection_2person_phone = 'contact__connection_2person_phone';
    $wp_customize->selective_refresh->add_partial($contact__connection_2person_phone, array(
        'selector' => '.contact__connection_2person_phone', 
        'render_callback' => function() use ($contact__connection_2person_phone) {
            return nl2br(esc_html(get_theme_mod($contact__connection_2person_phone)));
        }
    ));


    $wp_customize->add_setting(
        'contact__connection_3person_mail',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'contact__connection_3person_mail', array(
                'label' => 'Third Person Mail', 'aletheme',
                'section' => 'contact',
                'setting' => 'contact__connection_3person_mail',
                'type' => 'input',
            )
        )
    );

    $contact__connection_3person_mail = 'contact__connection_3person_mail';
    $wp_customize->selective_refresh->add_partial($contact__connection_3person_mail, array(
        'selector' => '.contact__connection_3person_mail', 
        'render_callback' => function() use ($contact__connection_3person_mail) {
            return nl2br(esc_html(get_theme_mod($contact__connection_3person_mail)));
        }
    ));


    $wp_customize->add_setting(
        'contact__connection_3person_phone',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'contact__connection_3person_phone', array(
                'label' => 'Third Person Phone', 'aletheme',
                'section' => 'contact',
                'setting' => 'contact__connection_3person_phone',
                'type' => 'input',
            )
        )
    );

    $contact__connection_3person_phone = 'contact__connection_3person_phone';
    $wp_customize->selective_refresh->add_partial($contact__connection_3person_phone, array(
        'selector' => '.contact__connection_3person_phone', 
        'render_callback' => function() use ($contact__connection_3person_phone) {
            return nl2br(esc_html(get_theme_mod($contact__connection_3person_phone)));
        }
    ));


    $wp_customize->add_setting(
        'contact__map_name',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'contact__map_name', array(
                'label' => 'Location Name', 'aletheme',
                'section' => 'contact',
                'setting' => 'contact__map_name',
                'type' => 'input',
            )
        )
    );

    $contact__map_name = 'contact__map_name';
    $wp_customize->selective_refresh->add_partial($contact__map_name, array(
        'selector' => '.contact__map_name', 
        'render_callback' => function() use ($contact__map_name) {
            return nl2br(esc_html(get_theme_mod($contact__map_name)));
        }
    ));


    $wp_customize->add_setting(
        'contact__map_text',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'contact__map_text', array(
                'label' => 'Location Text', 'aletheme',
                'section' => 'contact',
                'setting' => 'contact__map_text',
                'type' => 'input',
            )
        )
    );

    $contact__map_text = 'contact__map_text';
    $wp_customize->selective_refresh->add_partial($contact__map_text, array(
        'selector' => '.contact__map_text', 
        'render_callback' => function() use ($contact__map_text) {
            return nl2br(esc_html(get_theme_mod($contact__map_text)));
        }
    ));


    $wp_customize->add_setting(
        'contact__map_office',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'contact__map_office', array(
                'label' => 'Location About Office', 'aletheme',
                'section' => 'contact',
                'setting' => 'contact__map_office',
                'type' => 'input',
            )
        )
    );

    $contact__map_office = 'contact__map_office';
    $wp_customize->selective_refresh->add_partial($contact__map_office, array(
        'selector' => '.contact__map_office', 
        'render_callback' => function() use ($contact__map_office) {
            return nl2br(esc_html(get_theme_mod($contact__map_office)));
        }
    ));


    $wp_customize->add_setting(
        'contact__map_location',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'contact__map_location', array(
                'label' => 'Our Location', 'aletheme',
                'section' => 'contact',
                'setting' => 'contact__map_location',
                'type' => 'input',
            )
        )
    );

    $contact__map_location = 'contact__map_location';
    $wp_customize->selective_refresh->add_partial($contact__map_location, array(
        'selector' => '.contact__map_location', 
        'render_callback' => function() use ($contact__map_location) {
            return nl2br(esc_html(get_theme_mod($contact__map_location)));
        }
    ));

}
add_action('customize_register', 'admin_panel_setting');
