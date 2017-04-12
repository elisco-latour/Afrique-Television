<?php
/*
 * Single post Template
 */
?>
<?php get_header(); ?>
<div class="aftv-ribbon"></div>
<main class="mdl-layout__content aftv-single--page">
    <div class="page-content ">

        <?Php
        /*
         * Load Web TV Section
         */
        require get_template_directory() . '/inc/web-tv-section.php';
        ?>
        <?php
        while
        (have_posts()):the_post();

            $aftv_page_links = array(
                'before' => '<p>' . __('Pages:', 'afrique-television'),
                'after' => '</p>',
                'link_before' => '',
                'link_after' => '',
                'next_or_number' => 'number',
                'separator' => ' ',
                'nextpagelink' => __('Next page', 'afrique-television'),
                'previouspagelink' => __('Previous page', 'afrique-television'),
                'pagelink' => '%',
                'echo' => 1
            );
            ?>
            <div class="mdl-grid  aftv-single--page-container">
                <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
                <article id="post-<?php the_ID(); ?>" <?php post_class("mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col"); ?>>
                    <div class="aftv-single--posst-content">
                        <header class="aftv-single--post-header">
                            <h1 class="aftv-post__title mdl-card__title-text mdl-card__title-text"><?php the_title(); ?></h1>
                            <div class="mdl_card_media aftv-media aftv-post__thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <span class="aftv-post__caption"><?php aftv_post_thumbnail_caption(); ?></span>
                            <div class="aftv-post__meta-data">
                                <p class="aftv-single--page__metadata">
                                    <span class="aftv-cat"><?php the_category(' | '); ?></span>
                                    <span class="aftv-post__date"><?php _e('publi&eacute; le: ', 'afrique-television') ?><?php the_time('j, F, Y'); ?></span>
                                </p>
                            </div>
                        </header>
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; ?>
                <section class="mdl-grid aftv-single-post__navigation">
                    <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                        <?php
                        /*
                         * Get the previous Post
                         */
                        $aftv_previous_post = get_previous_post(TRUE);

                        /*
                         *  If previous post exists, we will display it
                         */
                        if ($aftv_previous_post):
                            $aftv_previous_post_params = array(
                                'posts_per_page' => 1,
                                'include' => $aftv_previous_post->ID
                            );
                            $aftv_previous_post = get_posts($aftv_previous_post_params);
                            ?>
                            <?php
                            foreach ($aftv_previous_post as $prev_post): setup_postdata($prev_post);
                                ?>
                                <a href="<?php echo $prev_post->guid ?>" class="aftv-previous-post__link">
                                    <span><?php _e('Article précédent', 'afrique-television') ?></span>
                                    <p><?php echo $prev_post->post_title; ?></p>
                                </a>
                                <?php wp_reset_postdata(); ?>
                            <?php endforeach; ?>
                        <?php endif; ?>

                    </div>
                    <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                        <?php
                        /*
                         * Get the next post
                         */
                        $aftv_next_post = get_next_post(TRUE);

                        /*
                         * We display next post if it exists
                         */
                        if ($aftv_next_post):
                            $aftv_next_post_params = array(
                                'posts_per_page' => 1,
                                'include' => $aftv_next_post->ID
                            );
                            $aftv_next_post = get_posts($aftv_next_post_params);
                            ?>
                            <?php foreach ($aftv_next_post as $next_post):setup_postdata($next_post); ?>

                                <a href="<?php echo $next_post->guid ?>" class="aftv-next-post__link">
                                    <span><?php _e('Article suivant', 'afrique-television') ?></span>
                                    <p><?php echo $next_post->post_title; ?></p>
                                </a>
                                <?php wp_reset_postdata(); ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </section>
            </article>

            <?php
            // Page links configuration

            wp_link_pages($aftv_page_links);
            ?>
        </div>
        <?php get_footer(); ?>

