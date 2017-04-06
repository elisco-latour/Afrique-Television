<?php
/*
 * ========================================
 *     The Front page Template
 *     Afrique Television
 * ========================================
 */
?>
<?php
/*
 * Load the header of the site
 */
get_header();
?>
<main class="mdl-layout__content">
    <!--<div class="mdl-grid aftv-content_spacer"></div>-->
    <div class="page-content">
        <?Php
        /*
         * load The web tv section
         */
        require get_template_directory() . '/inc/web-tv-section.php';
        ?>
        <div class="mdl-grid aftv_content">
            <section class="mdl-cell mdl-cell--8-col  une-info">
                <div class="mdl-grid">
                    <?php
                    $une_args = array(
                        'cat' => array(2),
                        'posts_per_page' => 1,
                        'orderby' => 'date'
                    );
                    $une_query = new WP_Query($une_args);

                    if ($une_query->have_posts()):
                        ?>
                        <?php while ($une_query->have_posts()):$une_query->the_post(); ?>
                            <article class="mdl-card mdl-cell mdl-cell--12-col section--center mdl-shadow--2dp">
                                <div class="mdl_card_media aftv-media">
                                    <!-- <img src="artticles/000_j364c.jpg"/>-->
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <p class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone aftv-meta-data">
                                    <span class="aftv-cat"><?php the_category(' | '); ?></span>
                                    <span class="aftv-post__date"><?php _e('publié le: ') ?><?php the_time('j, F, Y'); ?></span>
                                </p>
                                <div class="mdl-card__title">
                                    <h1 class="mdl-card__title-text ">
                                        <?php the_title(); ?>
                                    </h1>
                                </div>
                                <p class="mdl-card__supporting-text">
                                    <?php echo get_the_excerpt(); ?>
                                </p>
                                <div class="mdl-card__actions ">
                                    <a class="mdl-button mdl-js-button mdl-button--primary mdl-js-ripple-effect " href="<?php the_permalink() ?>">
                                        Lire l'article
                                    </a>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>

                    <?php
                    $une_suite_args = array(
                        'cat' => array(2),
                        'posts_per_page' => 2,
                        'orderby' => 'date',
                        'offset' => 1
                    );
                    $une_suite_query = new WP_Query($une_suite_args);

                    if ($une_suite_query->have_posts()):
                        ?>
                        <?php while ($une_suite_query->have_posts()):$une_suite_query->the_post(); ?>
                            <article class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                                <div class="mdl_card_media aftv-media">
                                    <!-- <img src="artticles/000_Par7634959_1_0.jpg"/>-->
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <p class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone aftv-meta-data">
                                    <span class="aftv-cat"><?php the_category(' | '); ?></span>
                                    <span class="aftv-post__date"><?php _e('publié le: ') ?><?php the_time('j, F, Y'); ?></span>
                                </p>
                                <div class="mdl-card__title">
                                    <h2 class="mdl-card__title-text">
                                        <?php the_title(); ?>
                                    </h2>
                                </div>
                                <div class="mdl-card__actions">
                                    <a class="mdl-button mdl-js-button mdl-button--primary mdl-js-ripple-effect" href="<?php the_permalink(); ?>">
                                        Lire l'article
                                    </a>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </section>

            <!-- ASide STARTS -->
            <aside class="mdl-cell mdl-cell--4-col mdl-shadow--2dp aftv-widget--1">
                <div class="mdl-grid">
                    <h4 class="aftv-widget--title mdl-cell--12-col">L'info en continu</h4>
                    <section class="aftv-timeline-container">
                        <div class="aftv-timeline">
                            <?php
                            $aftv_continu_args = array(
                                'cat' => array(),
                                'posts_per_page' => 4,
                                'orderby' => 'date'
                            );
                            $aftv_continu_query = new WP_Query($aftv_continu_args);

                            if ($aftv_continu_query->have_posts()):
                                ?>
                                <?php while ($aftv_continu_query->have_posts()):$aftv_continu_query->the_post(); ?>


                            <div class="miakpo">
                                <div class="aftv-timeline__img"></div>
                                
                                    <a class="continu-item" href="<?php the_permalink(); ?>">
                                        <p><span class="aftv-cat"><?php echo strip_tags(get_the_category_list(' | '), ''); ?></span></p> 
                                        <h5><?php the_title(); ?></h5>
                                        <p><?php echo 'Publié le: '; ?><?php the_time('j F, Y'); ?></p>
                                    </a>
                                
                            </div>
                            <?php endwhile; ?>
                            <?php endif; ?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                    </section>

                    <section class="mdl-cell mdl-cell--12-col aftv-single--widget">
                        <div class="aftv-media--2">
                            <!-- <img src="images/afrique_appli.jpg" alt="APPLICATION MOBILE d'AFRIQUE TELEVISION"/>-->
                            <?php dynamic_sidebar('sidebar-1'); ?>
                        </div>
                    </section>
                </div>
            </aside>

            <!-- TOUTE L'ACTUALITE -->
            <section class="aftv-cat-section mdl-cell mdl-cell--12-col">
                <div class="mdl-grid">
                    <?php
                    $aftv_actualite_args = array(
                        'cat' => array(-9),
                        'posts_per_page' => 6,
                        'orderby' => 'date'
                    );
                    $aftv_actualite_query = new WP_Query($aftv_actualite_args);

                    if ($aftv_actualite_query->have_posts()):
                        ?>
                        <?php while ($aftv_actualite_query->have_posts()):$aftv_actualite_query->the_post(); ?>
                            <article class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                                <div class="mdl_card_media aftv-media">
                                    <!--<img src="artticles/000_7V2DC(1).jpg"/>-->
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <p class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone aftv-meta-data">
                                    <span class="aftv-cat"><?php the_category(' | '); ?></span>
                                    <span class="aftv-post__date"><?php _e('publié le: ') ?><?php the_time('j, F, Y'); ?></span>
                                </p>
                                <div class="mdl-card__title">
                                    <h2 class="mdl-card__title-text">
                                        <?php the_title(); ?>
                                    </h2>
                                </div>

                                <div class="mdl-card__actions">
                                    <a class="mdl-button mdl-js-button mdl-button--primary mdl-js-ripple-effect" href="<?php the_permalink(); ?>">
                                        Lire l'article
                                    </a>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </section>

            <!-- SECTION DES EMISSIONS -->
            <section class="aftv-cat-section aftv-special-section mdl-cell mdl-cell--12-col ">
                <div class="mdl-grid emissions mdl-grid--no-spacing ">
                    <div class="mdl-cell mdl-cell--12-col">
                        <h1 class="section-title mdl-cell mdl-cell--3-col">NOS EMISSIONS</h1>
                    </div>

                    <?php
                    $aftv_emissions_args = array(
                        'cat' => array(9),
                        'posts_per_page' => 3,
                        'orderby' => 'date'
                    );
                    $aftv_emissions_query = new WP_Query($aftv_emissions_args);

                    if ($aftv_emissions_query->have_posts()):
                        ?>
                        <?php while ($aftv_emissions_query->have_posts()):$aftv_emissions_query->the_post(); ?>
                            <article class="mdl-shadow--2dp mdl-card mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone  aftv-horizontal-group-article">
                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <div class="mdl_card_media mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                                            <div class="aftv-media__video">
                                                <!-- <img src="artticles/000_il2rv_0.jpg"/>-->
                                                <?php the_post_thumbnail(); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <p class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone horizontal-cat aftv-meta-data">
                                            <span class="aftv-cat "><?php the_category(' | '); ?></span>
                                            <span class="aftv-post__date"><?php _e('publié le: ') ?><?php the_time('j, F, Y'); ?></span>
                                        </p>
                                        <div class="mdl-card__title">
                                            <h2 class="mdl-card__title-text">
                                                <?php the_title(); ?>
                                            </h2>
                                        </div>
                                        <div class="mdl-card__actions">
                                            <a class="mdl-button mdl-js-button mdl-button--primary mdl-js-ripple-effect" href="<?php the_permalink(); ?>">
                                                Suivre l'émission
                                            </a>
                                        </div>
                                    </div>                        
                                </div>
                            </article>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </section>

            <section class="aftv-cat-section aftv-special-section mdl-cell mdl-cell--12-col">
                <div class="mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                    <h1 class="section-title ">LES GRANDS DOSSIERS</h1>

                    <?php
                    $aftv_dossiers_args = array(
                        'cat' => array(-9),
                        'posts_per_page' => 3,
                        'orderby' => 'date'
                    );
                    $aftv_dossiers_query = new WP_Query($aftv_dossiers_args);

                    if ($aftv_dossiers_query->have_posts()):
                        ?>
                        <?php while ($aftv_dossiers_query->have_posts()):$aftv_dossiers_query->the_post(); ?>

                            <article class="mdl-card mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone  aftv-horizontal-group-article">
                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--5-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
                                        <div class="mdl_card_media aftv-media mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--7-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                                        <p class="horizontal-cat mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                                            <span class="aftv-cat "><?php the_category(' | '); ?></span>
                                            <span class="aftv-post__date"><?php _e('publié le: ') ?><?php the_time('j, F, Y'); ?></span>
                                        </p>
                                        <div class="mdl-card__title">
                                            <h2 class=" mdl-card__title-text">
                                                <?php the_title(); ?>
                                            </h2>
                                        </div>

                                        <p class=" mdl-card__supporting-text">
                                            <?php echo get_the_excerpt(); ?>
                                        </p>
                                        <div class="mdl-card__actions">
                                            <a class="mdl-button mdl-js-button mdl-button--primary mdl-js-ripple-effect" href="<?php the_permalink(); ?>">
                                                Lire l'article
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>

                </div>
            </section>
        </div> 
        <?php
        /*
         * Load the footer of the site
         */
        get_footer();
        ?>