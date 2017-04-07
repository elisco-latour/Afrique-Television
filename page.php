<?php
/*
 * Single pageTemplate
 */
?>
<?php get_header(); ?>
<?php while (have_posts()):the_post(); ?>
    <div class="aftv-ribbon"></div>
    <main class="mdl-layout__content aftv-single--page">
        <div class="page-content ">

            <?Php
            /*
             * Load Web TV Section
             */
            require get_template_directory() . '/inc/web-tv-section.php';
            ?>
            <div class="mdl-grid  aftv-single--page-container">
                <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
                <article class="mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">

                    <div class="aftv-single--posst-content">
                        <header class="aftv-single--post-header">
                            <h1 class="aftv-post__title mdl-card__title-text mdl-card__title-text"><?php the_title(); ?></h1>
                            <div class="aftv-post__meta-data">
                                <p class="aftv-single--page__metadata">
                                    <span class="aftv-cat"><?php the_category(' | '); ?></span>
                                    <span class="aftv-post__date"><?php _e('publi&eacute; le: ') ?><?php the_time('j, F, Y'); ?></span>
                                </p>
                            </div>
                        </header>
                        <?php the_content(); ?>
                    </div>
                </article>
            </div>
        <?php endwhile; ?>
        <?php get_footer(); ?>

