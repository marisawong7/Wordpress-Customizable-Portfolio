<?php 
  get_header();
  require get_template_directory() . '/inc/section_vars.php';
?>
<!-- <h1>The Front Page</h1>

<?php if (get_theme_mod($home_top_img)) { ?>
  <img 
    src="<?php echo get_theme_mod($home_top_img) ?>" 
    alt=""
  >
<?php } ?>

<?php if (get_theme_mod($home_top_desc)) { ?>
  <h4>
    <?php echo get_theme_mod($home_top_desc) ?>
  </h4>
<?php } ?> -->

<div class="intro">
        <img class="intro-icon" src="<?php echo get_theme_mod('hero_section_img')?>" alt="">
        <div class="intro-text-box">
            <p class="intro-header-text"> 👋 Hola, I'm <span class="intro-header-name"><?php echo get_theme_mod('hero_section_name') ?></span></p>
            <p class="intro-and-project-basic-text"><?php echo get_theme_mod('hero_section_description') ?></p>
        </div>
</div>

    <div class="full-layout">
      <div class="subsection" id="about-me">
          <h2 class="subsection-header">About Me.</h2>
          <div class="about-me-overlay">
              <p class="about-me-text-general">
                <?php echo get_theme_mod('about_me_section_bio') ?>
              </p>
              <div class="three-column-format">
                  <div class="three-column-format-category">
                      <img src="<?php echo get_template_directory_uri();?>/img/briefcase.png" alt="">
                      <h4><?php echo get_theme_mod('about_me_section_skill_1_title') ?></h4>
                      <p class="subsection-description-small-text"> <?php echo get_theme_mod('about_me_section_skill_1') ?> </p>
                  </div>
                  <div class="three-column-format-category">
                      <img src="<?php echo get_template_directory_uri();?>/img/life_buoy.png" alt="">
                      <h4><?php echo get_theme_mod('about_me_section_skill_2_title') ?></h4>
                      <p class="subsection-description-small-text"><?php echo get_theme_mod('about_me_section_skill_2') ?> </p>
                  </div>
                  <div class="three-column-format-category">
                      <img src="<?php echo get_template_directory_uri();?>/img/Vector.png" alt="">
                      <h4><?php echo get_theme_mod('about_me_section_skill_3_title') ?></h4>
                      <p class="subsection-description-small-text"><?php echo get_theme_mod('about_me_section_skill_3') ?> </p>
                  </div>
              </div>
          </div>
      </div>
      <hr>
      
      <div class="subsection" id="projects">
        <h2 class="subsection-header">Projects.</h2>
        <div class="projects-general-container">

            <div class="project-subsection">
                <div class="project-section-text-side">
                    <p class="project-subsection-subtitle"><?php echo get_theme_mod('default_project_title') ?></p>
                    <p class="intro-and-project-basic-text project-basic-text"><?php echo get_theme_mod('default_project_description') ?>
                    </p>
                    <p class="project-smaller-explanation-text">
                        Insight into how you built it, and other professional 
                        housekeeping like what skills it took, ie I used c++.
                    </p>
                    <a href="<?php echo get_theme_mod('default_project_link') ?>" class="projects-github-icon-text">
                        <p class="projects-github-icon-text"><img class="projects-github-icon" src="<?php echo get_template_directory_uri();?>/img/GitHub-Mark.png" alt="">See more about this project</p>
                    </a>
                </div>
                <div class="project-section-image-side">
                    <img class="project-section-image-side-image" src="<?php echo get_template_directory_uri();?>/img/eee.png" alt="">
                </div>
            </div>



            <?php
                // get_example_data is in /inc/template_functions.php
                $data  = get_projects_data('project_repeater_setting');
                if(!empty( $data ) ) { 
            ?>
                  <div class="project-subsection">
                  <?php
                    foreach ( $data as $k => $f ) {
                      ?>
                      <div class="project-section-text-side">
                          <p class="project-subsection-subtitle"><?php echo $f['project_title'] ?> </p>
                          <p class="intro-and-project-basic-text project-basic-text">
                              <?php echo $f['project_desc'] ?>
                          </p>
                          <p class="project-smaller-explanation-text">
                              Insight into how you built it, and other professional 
                              housekeeping like what skills it took, ie I used c++.
                          </p>
                          <a href="<?php echo $f['project_link'] ?>" class="projects-github-icon-text">
                              <p class="projects-github-icon-text"><img class="projects-github-icon" src="<?php echo get_template_directory_uri();?>/img/GitHub-Mark.png" alt="">See more about this project</p>
                          </a>
                      </div>
                      <div class="project-section-image-side">
                        <?php
                          $media = '';
                          if ($f['project_img']) {
                            // get_media_url function is in template_functions.php
                            $media = '<img class="project-section-image-side-image"src="'.esc_url( get_media_url( $f['project_img'] ) ).'">';
                          }
                        ?>
                        <?php echo $media ?> 
                      </div>

                      <?php
                    }
              ?>
                      </div>
              <?php } ?>




            <hr>
      </div>
    </div>
  </div>
    

<?php get_footer(); ?>
