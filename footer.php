<?php
/*
 * =====================================================
 *
 * footer.php 
 * 
 * The Theme footer file
 * 
 * =====================================================
 */
?>

                    <footer class="mdl-mega-footer">
                        <div class="mdl-mega-footer__middle-section">

                            <div class="mdl-mega-footer__drop-down-section">
                                <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
                                <?php dynamic_sidebar('sidebar-2'); ?>
                            </div>

                            <div class="mdl-mega-footer__drop-down-section">
                                <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
                                <?php dynamic_sidebar('sidebar-3'); ?>
                            </div>

                            <div class="mdl-mega-footer__drop-down-section">
                                <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
                                <?php dynamic_sidebar('sidebar-4'); ?>
                            </div>

                            <div class="mdl-mega-footer__drop-down-section">
                                <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
                                <?php dynamic_sidebar('sidebar-5'); ?>
                            </div>

                        </div>

                        <div class="mdl-mega-footer__bottom-section">
                            <div class="mdl-logo"><?php echo '&copy;'.get_bloginfo('name'); ?></div>
                            <?php
                               $contact_menu_args = array(
                                   'theme_location' => 'aftv-legacy-menu',
                                   'container' => FALSE,
                                   'menu_class' => 'mdl-mega-footer__link-list aftv-legacy__link-menu',
                                   'item_spacing' => 'preserve',
                                    'walker' => new AFTV_walker()
                               );
                               if (has_nav_menu('aftv-legacy-menu')) {
                                   wp_nav_menu($contact_menu_args);
                               }
                            ?>
                        </div>
                    </footer>
                    <button onclick="toggle_player()" class="aftv-mobile_tv mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--primary mdl-button--raised">
                        <i class="material-icons">live_tv</i>
                    </button>
                </div>
            </main>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>