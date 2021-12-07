<!-- If you have a navbar or html on the top of every page put it here -->
<?php wp_head(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Example Website Title</title>
</head>
<body>
    <div class="container">
        <div class="nav-bar">
        
        <ul>
            <li class="nav-bar-option-name"><a class="nav-bar-name-text" href="#"><?php echo get_theme_mod('hero_section_name') ?></a></li>
            <div class="nav-bar-right-side">
                <li class="nav-bar-right-side-options"><a class="nav-bar-option-text" href="#about-me">About</a></li>
                <li class="nav-bar-right-side-options"><a class="nav-bar-option-text" href="#projects">Projects</a></li>
                <li class="nav-bar-right-side-options"><a class="nav-bar-option-text" href="#contact">Contact</a></li>
            </div>
        </ul>
    </div>
            </div>
                <?php  
                wp_nav_menu( $args = array(
                    'menu_class'        => "nav-links", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                    'container'         => "div", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
                    'container_id'      => "menu", // (string) The ID that is applied to the container.
                    'theme_location'    => "primary", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
                    'container_class'   => "", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
                    'menu_id'           => "menu-primary", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
                ) );
                ?>
                
            </div>
