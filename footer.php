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
                            <div class="mdl-logo">AFRIQUE TELEVISION</div>
                            <ul class="mdl-mega-footer__link-list">
                                <li><a href="#">Aide</a></li>
                                <li><a href="#">Termes & Condtions</a></li>
                            </ul>
                        </div>
                    </footer>
                    <button onclick="toggle_player()" class="aftv-mobile_tv mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--primary">
                        <i class="material-icons">live_tv</i>
                    </button>
                </div>
            </main>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>