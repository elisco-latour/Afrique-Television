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
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> >
        <div class=" mdl-layout mdl-js-layout  mdl-layout--fixed-header">
            <header class="aftv-prim-head mdl-layout__header mdl-layout__header--waterfall">
                <!-- Top row, always visible -->
                <div class="mdl-layout__header-row aftv-header">
                    <!-- Title -->
                    <span class="mdl-layout-title">
                          <!--<img class="aftv-logo" src="images/afrique_lok.png"/>-->
                        AFRIQUE TELEVISION
                    </span>
                    <div class="mdl-layout-spacer"></div>
                    <button  onclick="toggle_player()" id="toggle_player" class="aftv-live_tv mdl-button mdl-js-button">
                        la chaîne web <i class="material-icons">live_tv</i>
                    </button>
                    <div class="aftv-search mdl-textfield mdl-js-textfield mdl-textfield--expandable
                         mdl-textfield--floating-label mdl-textfield--align-right">
                        <label class=" mdl-buwtton mdl-js-button mdl-button--icon"
                               for="waterfall-exp">
                            <i class="material-icons">search</i>
                        </label>
                        <div class="mdl-textfield__expandable-holder">
                            <input class="mdl-textfield__input" type="text" name="sample"
                                   id="waterfall-exp">
                        </div>
                    </div>
                </div>
                <!-- Bottom row, not visible on scroll -->

                <div class="mdl-layout__header-row mdl-layout--large-screen-only aftv_menu">
                    <!-- <div class="mdl-layout-spacer"></div> -->
                    <!-- Navigation -->
                    <?php
                    // Define AFTV top headr Menu Configuration
                    /*$aftv_menu_parameters = array(
                        'theme_location' => 'aftv-header-menu',
                        'container' => FALSE,
                        'menu_class' => 'mdl-navigation',
                        'items_wrap' => '<nav id="%1$s" class="%2$s">%3$s</nav>',
                        'echo' => FALSE
                            //'walker' => new Aftv_Menu_Walker()
                    );
                    echo strip_tags(wp_nav_menu($aftv_menu_parameters), '<a><nav>');
                     * /
                     * 
                     */
                    
                    $aftv_menu_parameters = array(
                        'theme_location' => "aftv-header-menu",
                        'container' => 'nav',
                        'items_wrap' => '%3$s',
                        'container_class' => 'mdl-navigation',
                        'walker' => new AFTV_walker()
                    );
                    if (has_nav_menu('aftv-header-menu') ){
                        wp_nav_menu($aftv_menu_parameters);
                    }
                    ?>
                </div>
            </header>
            <div class="mdl-layout__drawer">
                <span class="mdl-layout-title">Menu</span>
                <?php 
                $aftv_drawer_menu_parameters = array(
                  'theme_location' => 'aftv-drawer-menu',
                    'container' => 'nav',
                    'container_class' => 'mdl-navigation',
                    'items_wrap' => '%3$s',
                    'walker' => new AFTV_walker()
                );
                
                if (has_nav_menu('aftv-drawer-menu')) {
                    wp_nav_menu($aftv_drawer_menu_parameters);
                }
                ?>
            </div>
            <main class="mdl-layout__content">
                <!--<div class="mdl-grid aftv-content_spacer"></div>-->
                <div class="page-content">
                    <div id="web_tv" class="mdl-grid aftv-web_tv">
                        <div id="web_tv-player" class="aftv-player mdl-cell mdl-cell--12-col">
                            <div class="aftv-media">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PL7-8vqQVPcSfrR6R97L8RTk5nHRYWmOxt" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>