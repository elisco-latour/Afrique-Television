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
            wp_nav_menu( array(
                'menu_id' =>  'aftv-header-menu'
            ));
            ?>
        </div>
    </body>
</html>
