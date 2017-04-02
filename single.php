<?php
/*
 * Single post Template
 */
?>
<?php get_header(); ?>
    <?php while (have_posts()):the_post();?>
        <div class="aftv-ribbon"></div>
        <main class="mdl-layout__content aftv-single--page">
            <div class="page-content ">
                
                <?Php require
                /*
                 * Load the web Tv section
                 */
                get_template_directory().'/inc/web-tv-section.php';
                ?>
                <div class="mdl-grid  aftv-single--page-container">
                    <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
                    <article class="mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">

                        <div class="aftv-single--posst-content">
                            <header class="aftv-single--post-header">
                                <h1 class="aftv-post__title mdl-card__title-text mdl-card__title-text"><?php the_title(); ?></h1>
                                <div class="mdl_card_media aftv-media aftv-post__thumbnail">
                                    <!-- <iframe src="https://www.youtube.com/embed/qmVID93aqP4?ecver=2" width="640" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe> -->
                                    <!-- <img src="artticles/000_j364c.jpg"/> -->
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="aftv-post__meta-data">
                                    <p class="aftv-post__date"><?php _e('publié le: ') ?><?php the_time('J, F ,Y');  ?></p>
                                    <p class="aftv-post__categories">
                                        <?php 
                                        //Display The post category
                                         echo '<span class="aftv-cat">Economie</span><span class="aftv-cat">Politique</span>';
                                        ?>
                                    </p>
                                </div>
                            </header>
                            <?php the_content(); ?>
                        </div>
                    </article>
                </div>
            <?php endwhile; ?>
        <?php get_footer(); ?>

