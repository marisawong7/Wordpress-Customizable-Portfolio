<?php

function register_primary_menu() {
  register_nav_menu( 'primary', 'Primary Menu' );
}
add_action( 'after_setup_theme', 'register_primary_menu' );

/*
*
* Walker for the main menu 
*
*/
function add_arrow( $output, $item, $depth, $args ){
  //Only add class to 'top level' items on the 'primary' menu.
  if('primary' == $args->theme_location && $depth === 0 ){
      if (in_array("menu-item-has-children", $item->classes)) {
          $new_output = '<div class="sub-wrap">' . 
                          $output . 
                        '<i class="nav-icon fas fa-chevron-down down-icon" aria-hidden="true"></i></div>';
          return $new_output;
      }
  }
  return $output;
}
add_filter( 'walker_nav_menu_start_el', 'add_arrow',10,4);

// Example of how to use a repeatable box

function example_repeatable_customizer($wp_customize) {
  require 'section_vars.php';  
  require_once 'controller.php';  
  
  $wp_customize->add_section($example_section, array(
    'title' => 'Example Repeaters',
  ));
  
  $wp_customize->add_setting(
    $example_repeater,
    array(
        'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
        'transport' => 'refresh',
    ) );

  $wp_customize->add_control(
      new Onepress_Customize_Repeatable_Control(
          $wp_customize,
          $example_repeater,
          array(
              'label' 		=> esc_html__('Example Q & A Repeater'),
              'description'   => '',
              'section'       => $example_section,
              'live_title_id' => 'some_quote',
              'title_format'  => esc_html__('[live_title]'), // [live_title]
              'max_item'      => 10, // Maximum item can add
              'limited_msg' 	=> wp_kses_post( __( 'Max items added' ) ),
              'fields'    => array(
                  'some_quote'  => array(
                      'title' => esc_html__('Text'),
                      'type'  =>'text',
                  ),
                  'some_image' => array(
                    'title' => esc_html__('Image'),
                    'type'  =>'media',
                ),
              ),
          )
      )
  );
}
add_action( 'customize_register', 'example_repeatable_customizer' );

function home_customizer($wp_customize) {
  require 'section_vars.php';
  $wp_customize->add_section($home_section, array(
    'title' => 'Testing Home Page',
  ));

  $wp_customize->add_setting($home_top_vid, array(
    'default' => 'https://www.youtube.com/embed/A0Wyx-OOX4A',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control($home_top_vid, array(
    'label' => 'Top Video Embed',
    'section' => $home_section,
  ));

  $wp_customize->add_setting($home_top_img);
  $wp_customize->add_control( new WP_Customize_Image_Control( 
      $wp_customize, 
      $home_top_img, 
      array(
          'label' => 'Top Image',
          'section' => $home_section
      )
  ));
  // Top Desc
  $wp_customize->add_setting($home_top_desc);
  $wp_customize->add_control($home_top_desc, array(
      'label' => 'Top Description',
      'section' => $home_section,
      'type' => 'textarea'
  ));
}

add_action( 'customize_register', 'home_customizer' );

function hero_customizer($wp_customize) {
  require 'section_vars.php';

  $wp_customize->add_section('hero_section', array(
    'title' => 'Hero Section'
  ));

  $wp_customize->add_setting('hero_section_name', array(
    'default' => 'Name'
  ));

  $wp_customize->add_control('hero-name-control', array(
    'label' => 'Your Name',
    'section' => 'hero_section',
    'settings' => 'hero_section_name'
  ));

  $wp_customize->add_setting('hero_section_img');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_section_img', array(
    'label' => 'Profile Picture',
    'section' => 'hero_section'
  )));

  $wp_customize->add_setting('hero_section_description', array(
    'default' => 'This is a mini description'
  ));
  $wp_customize->add_control('hero-description-control', array(
    'label' => 'Description',
    'section' => 'hero_section',
    'settings' => 'hero_section_description',
    'type' => 'textarea'
  ));

}

add_action('customize_register', 'hero_customizer');

function about_me_customizer($wp_customize) {
  require 'section_vars.php';

  $wp_customize->add_section('about_me_section', array(
    'title' => 'About Me Section'
  ));

  $wp_customize->add_setting('about_me_section_bio', array(
    'default' => 'This is my bio.'
  ));

  $wp_customize->add_control('about-me-control', array(
    'label' => 'Bio',
    'section' => 'about_me_section',
    'settings' => 'about_me_section_bio',
    'type' => 'textarea'
  ));

  $wp_customize->add_setting('about_me_section_skill_1_title', array(
    'default' => 'Skill 1'
  ));

  $wp_customize->add_control('about-me-skil-1-title-control', array(
    'label' => 'Skill 1 Name ',
    'section' => 'about_me_section',
    'settings' => 'about_me_section_skill_1_title'
  ));

  $wp_customize->add_setting('about_me_section_skill_1', array(
    'default' => 'This is my first skill'
  ));

  $wp_customize->add_control('about-me-skil-1-control', array(
    'label' => 'Skill 1 Description',
    'section' => 'about_me_section',
    'settings' => 'about_me_section_skill_1',
    'type' => 'textarea'
  ));

  $wp_customize->add_setting('about_me_section_skill_2_title', array(
    'default' => 'Skill 2'
  ));

  $wp_customize->add_control('about-me-skil-2-title-control', array(
    'label' => 'Skill 2 Name ',
    'section' => 'about_me_section',
    'settings' => 'about_me_section_skill_2_title'
  ));

  $wp_customize->add_setting('about_me_section_skill_2', array(
    'default' => 'This is my second skill'
  ));

  $wp_customize->add_control('about-me-skil-2-control', array(
    'label' => 'Skill 2',
    'section' => 'about_me_section',
    'settings' => 'about_me_section_skill_2',
    'type' => 'textarea'
  ));

  $wp_customize->add_setting('about_me_section_skill_3_title', array(
    'default' => 'Skill 3'
  ));

  $wp_customize->add_control('about-me-skil-3-title-control', array(
    'label' => 'Skill 3 Name ',
    'section' => 'about_me_section',
    'settings' => 'about_me_section_skill_3_title'
  ));

  $wp_customize->add_setting('about_me_section_skill_3', array(
    'default' => 'This is my third skill'
  ));

  $wp_customize->add_control('about_me_section_skill_3', array(
    'label' => 'Skill 3',
    'section' => 'about_me_section',
    'settings' => 'about_me_section_skill_3',
    'type' => 'textarea'
  ));

  


}

add_action('customize_register', 'about_me_customizer');

function projects_repeater($wp_customize) {
  $wp_customize->add_section('project_repeater_section', array(
    'title' => 'Project Section',
  ));

  $wp_customize->add_setting('default_project_title', array(
    'default' => 'Default Project Title'
  ));
  $wp_customize->add_control('default-project-title-control', array(
    'label' => 'Default Project Title',
    'section' => 'project_repeater_section',
    'settings' => 'default_project_title'
  ));

  $wp_customize->add_setting('default_project_title');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'project_default_img', array(
    'label' => 'Default Project Picture',
    'section' => 'project_repeater_section'
  )));

  $wp_customize->add_setting('default_project_description', array(
    'default' => 'This is the default project description.'
  ));
  $wp_customize->add_control('default-project-description-control', array(
    'label' => 'Default Project Description',
    'section' => 'project_repeater_section',
    'settings' => 'default_project_description',
    'type' => 'textarea'

  ));

  $wp_customize->add_setting('default_project_link', array(
    'default' => 'https://www.google.com'
  ));
  $wp_customize->add_control('default-project-description-link', array(
    'label' => 'Default Project Link',
    'section' => 'project_repeater_section',
    'settings' => 'default_project_link'
  ));

  $wp_customize->add_setting('project_repeater_setting', array(
    'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control(new Onepress_Customize_Repeatable_Control(
    $wp_customize,
    'project_repeater_setting',
    array(
      'label' => esc_html__('Project Repeater'),
      'description' => 'This is the repeater where you can add and edit additional projects',
      'section' => 'project_repeater_section',
      'live_title',
      'live_title_id' => 'some_quote',
      'title_format'  => esc_html__('[live_title]'), // [live_title]
      'max_item'      => 10, // Maximum item can add
      'limited_msg' 	=> wp_kses_post( __( 'Max items added' ) ),
      'fields'    => array(
          'project_title'  => array(
              'title' => esc_html__('Project Title'),
              'type'  =>'text',
          ),
          'project_img' => array(
            'title' => esc_html__('Project Image'),
            'type'  =>'media',
          ),
          'project_desc' => array(
            'title' => esc_html__('Project Description'),
            'type'  =>'textarea',
          ),
          'project_link' => array(
            'title' => esc_html__('Project Link'),
            'type'  =>'text',
          ),
          
      ),
    )
  ));
}
add_action('customize_register', 'projects_repeater');

function footer_customizer($wp_customize) {
  require 'section_vars.php';

  $wp_customize->add_section('footer_section', array(
    'title' => 'Footer Contact Section'
  ));

  $wp_customize->add_setting('linkedin', array(
    'default' => 'https://www.linkedin.com/'
  ));

  $wp_customize->add_control('linkedin-control', array(
    'label' => 'Linkedin Link',
    'section' => 'footer_section',
    'settings' => 'linkedin'
  ));

  $wp_customize->add_setting('facebook', array(
    'default' => 'https://www.facebook.com/'
  ));

  $wp_customize->add_control('fb-control', array(
    'label' => 'Facebook Link',
    'section' => 'footer_section',
    'settings' => 'facebook'
  ));

  $wp_customize->add_setting('instagram', array(
    'default' => 'https://www.instagram.com/'
  ));

  $wp_customize->add_control('instagram-control', array(
    'label' => 'Instagram Link',
    'section' => 'footer_section',
    'settings' => 'instagram'
  ));

  $wp_customize->add_setting('twitter', array(
    'default' => 'https://www.twitter.com/'
  ));

  $wp_customize->add_control('twitter-control', array(
    'label' => 'Twitter Link',
    'section' => 'footer_section',
    'settings' => 'twitter'
  ));

  $wp_customize->add_setting('github', array(
    'default' => 'https://www.github.com/'
  ));

  $wp_customize->add_control('github-control', array(
    'label' => 'Github Link',
    'section' => 'footer_section',
    'settings' => 'github'
  ));

  $wp_customize->add_setting('email', array(
    'default' => 'youremail@umich.edu'
  ));

  $wp_customize->add_control('email-control', array(
    'label' => 'Your Email',
    'section' => 'footer_section',
    'settings' => 'email'
  ));
}

add_action('customize_register', 'footer_customizer');
