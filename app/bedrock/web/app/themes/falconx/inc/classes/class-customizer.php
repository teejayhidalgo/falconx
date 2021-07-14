<?php
/**
 * Register Menus
 *
 * @package Falconx
 */

namespace FALCONX_THEME\Inc;

use FALCONX_THEME\Inc\Traits\Singleton;

class Customizer {

	use Singleton;

	protected function __construct() {

		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks() {

		/**
		 * Actions.
		 */
		add_action( 'customize_register', [ $this, 'falconx_customize_register' ] );
        
	}

	public function falconx_customize_register($wp_customize) {
        $main_section_id = 'falconx_expertise_hero';
        $falconx_section_expertise = 'falconx_section_expertise';
        $falconx_section_why = 'falconx_section_why';
        $falconx_section_outcome = 'falconx_section_outcome';
        $falconx_section_footer = 'falconx_section_footer';

        $wp_customize->add_section( $main_section_id,
        [
            'title' => __( 'Hero Section Editor' ),
            'description' => esc_html__( 'Customize Hero Section.' )
        ]
        );

        $wp_customize->add_section( $falconx_section_expertise,
        [
            'title' => __( 'Expertise Section Editor' ),
            'description' => esc_html__( 'Customize Expertise Section' )
        ]
        );

        $setting_id = "hero_banner_image";
        $wp_customize->add_setting( $setting_id );

        $hero_header_text = "hero_header_text";
        $wp_customize->add_setting( $hero_header_text );

        $hero_header_highlight = "hero_header_highlight";
        $wp_customize->add_setting( $hero_header_highlight );

        $hero_header_content = "hero_header_content";
        $wp_customize->add_setting( $hero_header_content );

        $wp_customize->add_control( 
        new \WP_Customize_Image_Control(
            $wp_customize,
            $setting_id,
            [
                'label' => esc_html__('hero'),
                'section' => $main_section_id,
                'settings' => $setting_id,
            ]
            )    
        );

        $wp_customize->add_control(
            $hero_header_text,
            [
                'label' => __( 'Hero Header' ),
                'description' => esc_html__( 'Your Copy Here' ),
                'section' => $main_section_id,
                'type' => 'textarea',
                'input_attrs' => array( // Optional.
                    'class' => 'my-custom-class'
                )
            ]   
                
        );

        $wp_customize->add_control(
            $hero_header_highlight,
            [
                'label' => __( 'Hero Header Highlight' ),
                'description' => esc_html__( 'Highlighted text' ),
                'section' => $main_section_id,
                'type' => 'textarea',
                'input_attrs' => array( // Optional.
                    'class' => 'highlighted-header'
                )
            ]   
                
        );

        $wp_customize->add_control(
            $hero_header_content,
            [
                'label' => __( 'Hero Header Content' ),
                'description' => esc_html__( 'Content' ),
                'section' => $main_section_id,
                'type' => 'textarea'
            ]   
                
        );

        $expertise_bg_color = 'expertise_bg_color';
        $wp_customize->add_setting( $expertise_bg_color,
        [
            'default' => '#003878',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_hex_color'
        ]
        
        );
 
        $wp_customize->add_control( $expertise_bg_color,
        [
            'label' => __( 'Expertise Background Color' ),
            'section' => $falconx_section_expertise,
            'type' => 'color'
        ]
           
        );

        $expertise_label = "expertise_label";
        $wp_customize->add_setting( $expertise_label );

        $expertise_label_copy = "expertise_label_copy";
        $wp_customize->add_setting( $expertise_label_copy );

        $wp_customize->add_control(
            $expertise_label,
            [
                'label' => __( 'Expertise Label' ),
                'section' => $falconx_section_expertise,
                'type' => 'textarea'
            ]   
                
        );

        $wp_customize->add_control(
            $expertise_label_copy,
            [
                'label' => __( 'Expertise Content Copy' ),
                'section' => $falconx_section_expertise,
                'type' => 'textarea'
            ]   
                
        );


        $expertise_icon_image1 = "expertise_icon_image1";
        $wp_customize->add_setting( $expertise_icon_image1 );

        $expertise_icon_image2 = "expertise_icon_image2";
        $wp_customize->add_setting( $expertise_icon_image2 );

        $expertise_icon_image3 = "expertise_icon_image3";
        $wp_customize->add_setting( $expertise_icon_image3 );

        $expertise_icon_image4 = "expertise_icon_image4";
        $wp_customize->add_setting( $expertise_icon_image4 );

        $expertise_icon_text1 = "expertise_icon_text1";
        $wp_customize->add_setting( $expertise_icon_text1 );

        $expertise_icon_text2 = "expertise_icon_text2";
        $wp_customize->add_setting( $expertise_icon_text2 );

        $expertise_icon_text3 = "expertise_icon_text3";
        $wp_customize->add_setting( $expertise_icon_text3 );

        $expertise_icon_text4 = "expertise_icon_text4";
        $wp_customize->add_setting( $expertise_icon_text4 );

        $wp_customize->add_control( 
        new \WP_Customize_Image_Control(
            $wp_customize,
            $expertise_icon_image1,
            [
                'label' => esc_html__('Icon 1'),
                'section' => $falconx_section_expertise,
                'settings' => $expertise_icon_image1,
            ]
            )    
        );

        $wp_customize->add_control(
            $expertise_icon_text1,
            [
                'label' => __( 'Expertise Icon Text' ),
                'section' => $falconx_section_expertise,
                'type' => 'textarea'
            ]   
                
        );

        

        $wp_customize->add_control( 
            new \WP_Customize_Image_Control(
                $wp_customize,
                $expertise_icon_image2,
                [
                    'label' => esc_html__('Icon 2'),
                    'section' => $falconx_section_expertise,
                    'settings' => $expertise_icon_image2,
                ]
                )    
            );

            $wp_customize->add_control(
                $expertise_icon_text2,
                [
                    'label' => __( 'Expertise Icon Text' ),
                    'section' => $falconx_section_expertise,
                    'type' => 'textarea'
                ]   
                    
            );

            $wp_customize->add_control( 
                new \WP_Customize_Image_Control(
                    $wp_customize,
                    $expertise_icon_image3,
                    [
                        'label' => esc_html__('Icon 3'),
                        'section' => $falconx_section_expertise,
                        'settings' => $expertise_icon_image3,
                    ]
                    )    
                );

                $wp_customize->add_control(
                    $expertise_icon_text3,
                    [
                        'label' => __( 'Expertise Icon Text' ),
                        'section' => $falconx_section_expertise,
                        'type' => 'textarea'
                    ]   
                        
                );

                $wp_customize->add_control( 
                    new \WP_Customize_Image_Control(
                        $wp_customize,
                        $expertise_icon_image4,
                        [
                            'label' => esc_html__('Icon 4'),
                            'section' => $falconx_section_expertise,
                            'settings' => $expertise_icon_image4,
                        ]
                        )    
                    );


        $wp_customize->add_control(
            $expertise_icon_text4,
            [
                'label' => __( 'Expertise Icon Text' ),
                'section' => $falconx_section_expertise,
                'type' => 'textarea'
            ]   
                
        );


        $this->falconx_customize_why_section($wp_customize);
        $this->falconx_customize_outcome_section($wp_customize);
        $this->falconx_customize_footer_section($wp_customize);
    }

    public function falconx_customize_why_section($wp_customize) {
        $falconx_section_why = 'falconx_section_why';

        $wp_customize->add_section( $falconx_section_why,
        [
            'title' => __( 'Why Section Editor' ),
            'description' => esc_html__( 'Customize Why Section.' )
        ]
        );

        $why_banner_image = "why_banner_image";
        $wp_customize->add_setting( $why_banner_image );

        $wp_customize->add_control( 
        new \WP_Customize_Image_Control(
            $wp_customize,
            $why_banner_image,
            [
                'label' => esc_html__('Why Section Background Image'),
                'section' => $falconx_section_why,
                'settings' => $why_banner_image,
            ]
            )    
        );

        $why_header_text = "why_header_text";
        $wp_customize->add_setting( $why_header_text );

        $why_header_highlight = "why_header_highlight";
        $wp_customize->add_setting( $why_header_highlight );

        $why_header_content = "why_header_content";
        $wp_customize->add_setting( $why_header_content );

        

        $wp_customize->add_control(
            $why_header_text,
            [
                'label' => __( 'Why Header' ),
                'section' => $falconx_section_why,
                'type' => 'textarea'
            ]   
                
        );

        $wp_customize->add_control(
            $why_header_highlight,
            [
                'label' => __( 'Why Header Highlight' ),
                'section' => $falconx_section_why,
                'type' => 'textarea'
            ]   
                
        );

        $wp_customize->add_control(
            $why_header_content,
            [
                'label' => __( 'Why Header Content' ),
                'description' => esc_html__( 'Content' ),
                'section' => $falconx_section_why,
                'type' => 'textarea'
            ]   
                
        );
    }

    public function falconx_customize_outcome_section($wp_customize) {
        $falconx_section_outcome = 'falconx_section_outcome';

        $wp_customize->add_section( $falconx_section_outcome,
        [
            'title' => __( 'Outcome Section Editor' ),
            'description' => esc_html__( 'Customize Business Outcome Section.' )
        ]
        );

        $icons_list = [
            'Thumbnail 1' => ['outcome_thumb_1','outcome_thumb_title_1','outcome_thumb_text_1'], 
            'Thumbnail 2' => ['outcome_thumb_2','outcome_thumb_title_2','outcome_thumb_text_2'], 
            'Thumbnail 3' => ['outcome_thumb_3','outcome_thumb_title_3','outcome_thumb_text_3'], 
            'Thumbnail 4' => ['outcome_thumb_4','outcome_thumb_title_4','outcome_thumb_text_4'], 
        ];

        foreach($icons_list as $logo_key => $logo_item){
            $logo_setting_id = sprintf('falconx_%s', $logo_item[0]);
            $wp_customize->add_setting($logo_setting_id);

            $wp_customize->add_control( 
            new \WP_Customize_Image_Control(
                $wp_customize,
                $logo_setting_id,
                [
                    'label' => esc_html__($logo_key),
                    'section' => $falconx_section_outcome,
                    'settings' => $logo_setting_id,
                ]
                )    
            );

            $outcome_thumb_title = sprintf('falconx_%s', $logo_item[1]);
            $wp_customize->add_setting( $outcome_thumb_title );
            $wp_customize->add_control(
            $outcome_thumb_title,
            [
                'label' => __( 'Thumb Title' ),
                'section' => $falconx_section_outcome,
                'type' => 'textarea'
            ]   
            );

            $outcome_thumb_text = sprintf('falconx_%s', $logo_item[2]);
            $wp_customize->add_setting( $outcome_thumb_text );
            $wp_customize->add_control(
            $outcome_thumb_text,
            [
                'label' => __( 'Thumb Description' ),
                'section' => $falconx_section_outcome,
                'type' => 'textarea'
            ]   
            );
        }



    }

    public function falconx_customize_footer_section($wp_customize) {
        $falconx_section_footer = 'falconx_section_footer';

        $wp_customize->add_section( $falconx_section_footer,
        [
            'title' => __( 'Footer Section Editor' ),
            'description' => esc_html__( 'Customize Footer Section.' )
        ]
        );

        $falcon_footer_header = 'falcon_footer_header';
        $wp_customize->add_setting( $falcon_footer_header );
        $wp_customize->add_control(
        $falcon_footer_header,
        [
            'label' => __( 'Footer Header' ),
            'section' => $falconx_section_footer,
            'type' => 'textarea'
        ]   
        );

        $falcon_footer_text = 'falcon_footer_text';
        $wp_customize->add_setting( $falcon_footer_text );
        $wp_customize->add_control(
        $falcon_footer_text,
        [
            'label' => __( 'Footer Text' ),
            'section' => $falconx_section_footer,
            'type' => 'textarea'
        ]   
        );

        $falcon_footer_call_button_text = 'falcon_footer_call_button_text';
        $wp_customize->add_setting( $falcon_footer_call_button_text );
        $wp_customize->add_control(
        $falcon_footer_call_button_text,
        [
            'label' => __( 'First Button Text' ),
            'section' => $falconx_section_footer,
            'type' => 'input'
        ]   
        );

        $falcon_footer_contact_button_text = 'falcon_footer_contact_button_text';
        $wp_customize->add_setting( $falcon_footer_contact_button_text );
        $wp_customize->add_control(
        $falcon_footer_contact_button_text,
        [
            'label' => __( 'second Button Text' ),
            'section' => $falconx_section_footer,
            'type' => 'input'
        ]   
        );

    }


}