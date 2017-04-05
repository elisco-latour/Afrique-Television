<?php
/*
 *  Archive template file
 */
?>
<?php get_header(); ?>
<main class="mdl-layout__content">
    <div class="page-content">
        <?php require get_template_directory() . '/inc/web-tv-section.php'; ?>
        <div class="mdl-grid aftv_content">
            <div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col mdl-cell--hide-tablet mdl-cell--hide-phone">
                        <div class="aftv-cat__widgets">
                            <?php
                            /*
                             * Display pages sidebar
                             */
                            dynamic_sidebar('sidebar-7');
                            ?>
                        </div>
                    </div>
                    <?php if (have_posts()): ?>
                        <?php while (have_posts()):the_post(); ?>
                            <div class="mdl-card mdl-shadow--2dp aftv-cat--post mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--8-col-phone">
                                <div class="mdl-card__media aftv-media">
                                    <!-- <img src="artticles/000_ka1se_0.jpg"/> -->
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <p class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone aftv-meta-data aftv-category-page">
                                    <span class="aftv-cat"><?php the_category(' | '); ?></span>
                                    <span class="aftv-post__date"><?php _e('publié le: ') ?><?php the_time('j, F, Y'); ?></span>
                                </p>
                                <div class="mdl-card__title">
                                    <h1 class="mdl-card__title-text"><?php the_title(); ?></h1>
                                </div>
                                <div class="mdl-card__actions mdl-card--border">
                                    <a href="<?php the_permalink(); ?>" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                        Lire l'article
                                    </a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php get_template_part('template-parts/navigation/aftv', 'page-navigation'); ?>

                </div>
            </div>
        </div>
        <?php get_footer(); ?>

