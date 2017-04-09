<?php
/*
 * Comments.php File Template
 */

/*
 * The template for display Afrique Television comments
 * 
 * The area of the pqge that contains comments and comment form
 * 
 * @package Wordpress
 * @subapckage Afrique-television
 * @since Afrique-television 1.0
 * 
 */

/*
 * Test if post is password protected
 * if so, it will stop processing the template
 */
if (post_password_required()) {
    return;
}

/*
 * make a test to see if there are comments associated with the post
 */
?>
<div id="comments" class="comments-area">
    <?php if (have_comments()): ?>
        <h2 class="comments-title">
            <?php
            printf(_nx('Un avis sur "%2$s"', '%1$s avis sur "%2$s"', get_comments_number(),'Titre des commentaires', 'afrique-television'), number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>');
            ?>
        </h2>
        <ol><!-- Comments List -->
            <?php
            wp_list_comments(array(
                'style' => 'ol',
                'short_ping' => TRUE,
                'avatar_size' => 80
            ));
            ?>
        </ol><!-- .comment-list -->
        <?php
        /*
         * Are there comments to navigate trough ?
         */
        if (get_comment_pages_count() > 1 && get_option('page_comments')):
            ?>
            <nav class="navigation comment-navigation">
                <h1 class="screen-reader-text section-heading"><?php _e('Navigation des commentaires', 'afrique-television') ?></h1>
                <div class="nav-previous"><?php previous_comments_link(__('&larr; Anciens commentaires', 'afrique-television')); ?></div>
                <div class="nav-next"><?php next_comments_link('Nouveaux commentaires &rarr', 'afrique-television'); ?></div>
            </nav> <!-- Comments navigation -->
        <?php endif; //Check for comments navigation  ?>
        <?php if (!comments_open() && get_comments_number()): ?>
            <p class="no-comments"><?php _e('Les commentaires sont clos', 'afrique-television'); ?></p>
        <?php endif; ?>
        <?php comment_form(); ?>
    <?php endif; // End check if there are comments ?>
            <div class="pagination">
                <?php paginate_comments_links(); ?>
            </div>
</div>
