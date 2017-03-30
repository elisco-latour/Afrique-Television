<?php
/*
 * =====================================================
 *   Afrique Televison: header.php Template file
 * =====================================================
 */
?>
<!DOCTYPE html >
<html <?php language_attributes(); ?> >
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" value="width=device-wdith, initial-scale=1.0" />
        <link rel="profile" href="" />

        <?php wp_head(); ?>
    </head>
    <body class="<?php body_class(); ?>" >
        <div class=" mdl-layout mdl-js-layout  mdl-layout--fixed-header">
            <?php
            // Define AFTV top headr Menu Configuration
            $aftv_menu_parameters = array(
                'theme_location' => 'aftv-header-menu',
                'container' => FALSE,
                'menu_class' => 'mdl-navigation',
                'items_wrap' => '<nav id="%1$s" class="%2$s">%3$s</nav>',
                'echo' => FALSE
                    //'walker' => new Aftv_Menu_Walker()
            );
            echo strip_tags(wp_nav_menu($aftv_menu_parameters), '<a><nav>');
            ?>
        </div>
    </body>
</html>
