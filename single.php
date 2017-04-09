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
        <?php while 
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
                </article>
            
            <?php
            // Page links configuration

            wp_link_pages($aftv_page_links);
            ?>
        </div>
        <?php endwhile; ?>
        <?php get_footer(); ?>

