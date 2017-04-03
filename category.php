<?php
/*
 * Category Template FIle
 */
?>
<?php get_header(); ?>

<main class="mdl-layout__content">
    <div class="page-content">
        <?php require get_template_directory() . '/inc/web-tv-section.php'; ?>
        <div class="mdl-grid aftv_content">
            <div class="mdl-cell mdl-cell--8-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                <div class="mdl-grid">
                    <?php if (have_posts()): ?>
                        <?php while (have_posts()):the_post(); ?>
                            <div class="mdl-card  mdl-shadow--2dp aftv-cat--post mdl-cell mdl-cell--12-col">
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
                                <p class="mdl-card_supporting-text aftv-post__excerpt">
                                    <?php echo get_the_excerpt(); ?>
                                </p>
                                <div class="mdl-card__actions mdl-card--border">
                                    <a href="<?php the_permalink(); ?>" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                        Lire l'article
                                    </a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="mdl-shadow--2dp mdl-cell mdl-cell--12-col">
                        <button class="mdl-card__actions mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored aftv-cat__read-more">
                            Plus d'articles
                            <!-- For modern browsers. -->
                            <i class="material-icons">chevron_right</i>

                            <!-- For IE9 or below. -->
                            <!-- <i class="material-icons">&#xE5CC;</i> -->
                        </button>
                    </div>

                </div>
            </div>
            <div class="aftv-cat__widgets mdl-cell mdl-cell--4-col mdl-cell--hide-tablet mdl-cell--hide-phone">
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col">
                        <?php
                        /*
                         * Display pages sidebar
                         */
                        dynamic_sidebar('sidebar-6');
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php get_footer(); ?>