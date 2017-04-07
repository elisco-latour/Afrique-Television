<?php
/*
 * 404.php Template file
 */
?>
<?php get_header(); ?>
<main class="mdl-layout__content">
    <div class="page-content">
        <div class="mdl-grid aftv_content">
            <!-- For modern browsers. -->
            <div class="aftv-404-cam mdl-cell--12-col">
                
                <p><?php _e('D&eacute;sol&eacute;, nous ne parvenons pas &agrave; trouver la page que vous recherchez', 'afrique-television') ?></p>
                 <i class="material-icons">error</i> 
                <!-- For IE9 or below. -->
                <!-- <i class="material-icons">&#xE04B;</i> -->
                <form action="#">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="sample1">
                        <label class="mdl-textfield__label" for="sample1">Text...</label>
                    </div>
                    <div class="">
                        <input class="mdl-button mdl-button--colored mdl-button--primary mdl-js-button mdl-js-ripple-effect" type="submit" value="Rechercher sur Afrique T&eacute;l&eacute;vision"/>
                    </div>
                </form>
                
            </div>
        </div>
        <?php get_footer(); ?>