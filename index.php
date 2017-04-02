<?php
/*
 * =====================================================
 *   Afrique Televison: index.php Template file
 * =====================================================
 */
?>
<?php
/*
 * Load the header.php
 */
get_header();
?>
<?php if (have_posts()): ?>
    <?php while 
        /*
         * Starts Aftv the loop here
         */
        (have_posts()):the_post(); 
    ?>
        <div class="mdl-grid aftv_content">
            <div class="mdl-grid">
                <article class="mdl-card mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone  aftv-horizontal-group-article">

                    <div class="mdl-cell mdl-cell--5-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
                        <div class="mdl_card_media aftv-media mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                        <p class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone horizontal-cat">
                            <span class="aftv-cat "><?php echo 'la categorie'; ?></span>
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
                            <a class="mdl-button mdl-js-button mdl-button--primary" href="<?php the_permalink(); ?>">
                                Lire l'article
                            </a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
<?php
/*
 * Load the theme's footer file
 */

get_footer();
?>