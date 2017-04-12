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
                    <article id="post-<?php the_ID(); ?>" <?php post_class("mdl-card  mdl-shadow--2dp aftv-cat--post mdl-cell mdl-cell--12-col"); ?>>
                                <div class="mdl-card__media aftv-media">
                                    <!-- <img src="artticles/000_ka1se_0.jpg"/> -->
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <p class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone aftv-meta-data aftv-category-page">
                                    <span class="aftv-cat"><?php the_category(' | '); ?></span>
                                    <span class="aftv-post__date"><?php _e('publi&eacute; le: ','afrique-television') ?><?php the_time('j, F, Y'); ?></span>
                                </p>
                                <div class="mdl-card__title">
                                    <h1 class="mdl-card__title-text">
                                        <a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h1>
                                </div>
                                <p class="mdl-card_supporting-text aftv-post__excerpt">
                                    <?php echo get_the_excerpt(); ?>
                                </p>
                                <div class="mdl-card__actions mdl-card--border">
                                    <a href="<?php the_permalink(); ?>" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                        Lire l'article
                                    </a>
                                </div>
                    </article>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php
                    /*
                     * Display the page navigation here
                     */
                    get_template_part('template-parts/navigation/aftv', 'page-navigation');
                    ?>
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