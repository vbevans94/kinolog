<?php

class elite_Customizer {

    public static function elite_Register($wp_customize) {

        self::elite_Sections($wp_customize);

        self::elite_Controls($wp_customize);
    }

    public static function elite_Sections($wp_customize) {

        /**
         * Add panel for home page feature area
         */
        $wp_customize->add_panel('general_setting_panel', array(
            'title' => __('General Settings', 'elite-lite'),
            'description' => __('Allows you to setup home page feature area section for Elite Lite Theme.', 'elite-lite'),
            'priority' => '10',
            'capability' => 'edit_theme_options'
        ));

        /**
         * Site Title Section
         */
        $wp_customize->add_section('title_tagline', array(
            'title' => __('Site Title & Tagline', 'elite-lite'),
            'priority' => '',
            'panel' => 'general_setting_panel'
        ));

        /**
         * Remove control for site icon
         */
        $wp_customize->remove_control('site_icon');

        /**
         * Logo and favicon section
         */
        $wp_customize->add_section('logo_fevi_setting', array(
            'title' => __('Logo & Favicon', 'elite-lite'),
            'description' => __('Allows you to customize header logo, favicon settings for Elite Lite Theme.', 'elite-lite'), //Descriptive tooltip
            'panel' => 'general_setting_panel',
            'priority' => '',
            'capability' => 'edit_theme_options'
                )
        );

        /**
         * Home page feature section settings
         */
        $wp_customize->add_section('home_page_feature', array(
            'title' => __('Feature Section Settings', 'elite-lite'),
            'description' => __('Allows you to setup home page feature section for Elite Lite Theme.', 'elite-lite'), //Descriptive tooltip
            'panel' => '',
            'priority' => '11',
            'capability' => 'edit_theme_options'
                )
        );

        /**
         * Home page setting section
         */
        $wp_customize->add_section('home_page_setting', array(
            'title' => __('Home Page Settings', 'elite-lite'),
            'description' => __('Allows you to setup home page section for Elite Lite Theme.', 'elite-lite'),
            'panel' => '',
            'priority' => '13',
            'capability' => 'edit_theme_options'
        ));


        /**
         * Footer Setting
         */
        $wp_customize->add_section('footer_section', array(
            'title' => __('Footer Settings', 'elite-lite'),
            'description' => __('Allows you to setup footer section for Elite Lite Theme.', 'elite-lite'),
            'panel' => '',
            'priority' => '14',
            'capability' => 'edit_theme_options'
        ));

        /**
         * Add panel for styling option
         */
        $wp_customize->add_panel('style_setting', array(
            'title' => __('Style Settings', 'elite-lite'),
            'description' => __('Allows you to setup Theme text and Background color for Elite Lite Theme.', 'elite-lite'),
            'priority' => '15',
            'capability' => 'edit_theme_options'
        ));

        /**
         * Background color Section
         */
        $wp_customize->add_section('colors', array(
            'title' => __('Background color Setting', 'elite-lite'),
            'description' => __('Allows you to change Background color for Elite Lite Theme. This only works when no any image set as background image.', 'elite-lite'),
            'priority' => '',
            'panel' => 'style_setting'
        ));

        /**
         * Background Image Section
         */
        $wp_customize->add_section('background_image', array(
            'title' => __('Background Image setting', 'elite-lite'),
            'description' => __('Allows you to change background image for Elite Lite Theme. This will overright the background color property', 'elite-lite'),
            'priority' => '',
            'panel' => 'style_setting'
        ));

        /**
         * Text color Section
         */
        $wp_customize->add_section('text_colors', array(
            'title' => __('Text color setting', 'elite-lite'),
            'description' => __('Allows you to change text color for Elite Lite Theme.', 'elite-lite'),
            'priority' => '',
            'panel' => 'style_setting'
        ));

        /**
         * Style Section
         */
        $wp_customize->add_section('style_section', array(
            'title' => __('Custom Style Setting', 'elite-lite'),
            'description' => __('Allows you to change style using custom css for Elite Lite Theme.', 'elite-lite'),
            'panel' => 'style_setting',
            'priority' => '',
            'capability' => 'edit_theme_options'
                )
        );
    }

    public static function elite_Section_Content() {

        $section_content = array(
            'logo_fevi_setting' => array(
                'elite_logo',
                'elite_favicon'
            ),
            'home_page_feature' => array(
                'elite_slideimage1',
                'elite_sliderhead1',
                'elite_sliderdesc1',
                'elite_slidelink_text1',
                'elite_slidelink1'
            ),
            'home_page_setting' => array(
                'elite_homehead',
                'elite_homecontent',
                'elite_home_blog',
                'elite_post_front'
            ),
            'footer_section' => array(
                'elite_footertext'
            ),
            'style_section' => array(
                'elite_customcss'
            ),
        );
        return $section_content;
    }

    public static function elite_Settings() {

        $theme_settings = array(
            'elite_logo' => array(
                'id' => 'elite_options[elite_logo]',
                'label' => __('Custom Logo', 'elite-lite'),
                'description' => __('Upload a logo for your Website. The recommended size for the logo is 221px width x 84px height.', 'elite-lite'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => get_template_directory_uri() . '/images/logo.png'
            ),
            'elite_favicon' => array(
                'id' => 'elite_options[elite_favicon]',
                'label' => __('Custom Favicon', 'elite-lite'),
                'description' => __('Here you can upload a Favicon for your Website. Specified size is 16px x 16px.', 'elite-lite'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),
            'elite_post_front' => array(
                'id' => 'elite_options[elite_post_front]',
                'label' => __('Posts On Front Page', 'elite-lite'),
                'description' => __('Turn on or off the home page blog post as per your requirement.', 'elite-lite'),
                'type' => 'option',
                'setting_type' => 'radio',
                'default' => '1',
                'choices' => array(
                    'true' => 'On',
                    'false' => 'Off'
                )
            ),
            'elite_slideimage1' => array(
                'id' => 'elite_options[elite_slideimage1]',
                'label' => __('Feature Image', 'elite-lite'),
                'description' => __('Choose your image for feature. Optimal size is 640px wide and 332px height.', 'elite-lite'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),
            'elite_sliderhead1' => array(
                'id' => 'elite_options[elite_sliderhead1]',
                'label' => __('Feature Heading', 'elite-lite'),
                'description' => __('Enter your text heading for homepage feature heading', 'elite-lite'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),
            'elite_sliderhead1' => array(
                'id' => 'elite_options[elite_sliderhead1]',
                'label' => __('Feature Heading', 'elite-lite'),
                'description' => __('Enter your text heading for homepage feature heading', 'elite-lite'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),
            'elite_sliderdesc1' => array(
                'id' => 'elite_options[elite_sliderdesc1]',
                'label' => __('Feature Description', 'elite-lite'),
                'description' => __('Enter your text for feature description', 'elite-lite'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),
            'elite_slidelink_text1' => array(
                'id' => 'elite_options[elite_slidelink_text1]',
                'label' => __('Feature Read More Link Text', 'elite-lite'),
                'description' => __('Enter your text for feature read more Link', 'elite-lite'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),
            'elite_slidelink1' => array(
                'id' => 'elite_options[elite_slidelink1]',
                'label' => __('Feature Read More Link', 'elite-lite'),
                'description' => __('Enter yout link url for read more', 'elite-lite'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => ''
            ),
            'elite_homehead' => array(
                'id' => 'elite_options[elite_homehead]',
                'label' => __('Homepage Content Heading', 'elite-lite'),
                'description' => __('Enter your text heading for homepage content heading', 'elite-lite'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),
            'elite_homecontent' => array(
                'id' => 'elite_options[elite_homecontent]',
                'label' => __('Homepage Content Description', 'elite-lite'),
                'description' => __('Put your text content or html code in this area. If required, You can visually design using the WordPress Page/Post Editor too and later copy and paste the HTML from that editor', 'elite-lite'),
                'type' => 'option',
                'setting_type' => 'texteditor',
                'default' => ''
            ),
            'elite_home_blog' => array(
                'id' => 'elite_options[elite_home_blog]',
                'label' => __('Blog Posts Area Heading', 'elite-lite'),
                'description' => __('Enter your text for posts heading', 'elite-lite'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),
            'elite_footertext' => array(
                'id' => 'elite_options[elite_footertext]',
                'label' => __('Footer Text', 'elite-lite'),
                'description' => __('Enter text you want to be displayed on Footer', 'elite-lite'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),
            'elite_customcss' => array(
                'id' => 'elite_options[elite_customcss]',
                'label' => __('Custom CSS', 'elite-lite'),
                'description' => __('Quickly add your custom CSS code to your theme by writing the code in this block.', 'elite-lite'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            )
        );
        return $theme_settings;
    }

    public static function elite_Controls($wp_customize) {

        $sections = self::elite_Section_Content();
        $settings = self::elite_Settings();

        foreach ($sections as $section_id => $section_content) {

            foreach ($section_content as $section_content_id) {

                switch ($settings[$section_content_id]['setting_type']) {
                    case 'image':
                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'elite_sanitize_url');
                        $wp_customize->add_control(new WP_Customize_Image_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id']
                                )
                        ));
                        break;

                    case 'text':
                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'elite_sanitize_text');

                        $wp_customize->add_control(new WP_Customize_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id'],
                            'type' => 'text'
                                )
                        ));
                        break;

                    case 'textarea':

                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'elite_sanitize_textarea');

                        $wp_customize->add_control(new WP_Customize_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id'],
                            'type' => 'textarea'
                                )
                        ));
                        break;

                    case 'link':

                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'elite_sanitize_url');

                        $wp_customize->add_control(new WP_Customize_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id'],
                            'type' => 'text'
                                )
                        ));
                        break;

                    case 'color':

                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'elite_sanitize_color');

                        $wp_customize->add_control(new WP_Customize_Color_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id']
                                )
                        ));
                        break;

                    case 'number':

                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'elite_sanitize_number');

                        $wp_customize->add_control(new WP_Customize_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id'],
                            'type' => 'text'
                                )
                        ));
                        break;

                    case 'select':

                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'elite_sanitize_select');

                        $wp_customize->add_control(new WP_Customize_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id'],
                            'type' => 'select',
                            'choices' => $settings[$section_content_id]['choices']
                                )
                        ));
                        break;

                    case 'radio':

                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'elite_sanitize_radio');

                        $wp_customize->add_control(new WP_Customize_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id'],
                            'type' => 'radio',
                            'choices' => $settings[$section_content_id]['choices']
                                )
                        ));
                        break;

                    case 'texteditor':

                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'elite_sanitize_html');

                        $wp_customize->add_control(new WP_Customize_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id'],
                            'type' => 'textarea'
                                )
                        ));
                        break;

                    default:
                        break;
                }
            }
        }
    }

    public static function add_setting($wp_customize, $setting_id, $default, $type, $sanitize_callback) {
        $wp_customize->add_setting($setting_id, array(
            'default' => $default,
            'capability' => 'edit_theme_options',
            'sanitize_callback' => array('elite_Customizer', $sanitize_callback),
            'type' => $type
                )
        );
    }

    /**
     * adds sanitization callback funtion : textarea
     * @package elite
     */
    public static function elite_sanitize_textarea($value) {
        $value = esc_html($value);
        return $value;
    }

    /**
     * adds sanitization callback funtion : url
     * @package elite
     */
    public static function elite_sanitize_url($value) {
        $value = esc_url($value);
        return $value;
    }

    /**
     * adds sanitization callback funtion : text
     * @package elite
     */
    public static function elite_sanitize_text($value) {
        $value = sanitize_text_field($value);
        return $value;
    }

    /**
     * adds sanitization callback funtion : email
     * @package elite
     */
    public static function elite_sanitize_email($value) {
        $value = sanitize_email($value);
        return $value;
    }

    /**
     * adds sanitization callback funtion : number
     * @package elite
     */
    public static function elite_sanitize_number($value) {
        $value = preg_replace("/[^0-9+ ]/", "", $value);
        return $value;
    }

    /**
     * adds sanitization callback funtion : number
     * @package elite
     */
    public static function elite_sanitize_color($value) {
        $value = sanitize_hex_color($value);
        return $value;
    }

    /**
     * adds sanitization callback funtion : select
     * @package elite
     */
    public static function elite_sanitize_select($value, $setting) {
        global $wp_customize;
        $control = $wp_customize->get_control($setting->id);
        if (array_key_exists($value, $control->choices)) {
            return $value;
        } else {
            return $setting->default;
        }
    }

    /**
     * adds sanitization callback funtion : radio
     * @package elite
     */
    public static function elite_sanitize_radio($value, $setting) {
        global $wp_customize;
        $control = $wp_customize->get_control($setting->id);
        if (array_key_exists($value, $control->choices)) {
            return $value;
        } else {
            return $setting->default;
        }
    }

    /**
     * adds sanitization callback funtion : html content
     * @package elite
     */
    public static function elite_sanitize_html($value) {
        $value = wp_kses_post($value);
        return $value;
    }

}

// Setup the Theme Customizer settings and controls...
add_action('customize_register', array('elite_Customizer', 'elite_Register'));

function elite_registers() {
    wp_register_script('elite_jquery_ui', '//code.jquery.com/ui/1.11.0/jquery-ui.js', array("jquery"), true);
    wp_register_script('elite_customizer_script', get_template_directory_uri() . '/functions/js/elite_customizer.js', array("jquery", "elite_jquery_ui"), true);
    wp_enqueue_script('elite_customizer_script');
    wp_localize_script('elite_customizer_script', 'ink_advert', array(
        'pro' => __('View PRO version', 'elite-lite'),
        'url' => esc_url('http://www.inkthemes.com/wp-themes/elite-lite-wp-theme/'),
		'support_text' => __('Need Help!','elite-lite'),
		'support_url' => esc_url('http://www.inkthemes.com/lets-connect/')
    ));
}

add_action('customize_controls_enqueue_scripts', 'elite_registers');
