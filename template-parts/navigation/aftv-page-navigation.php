<?php
/*
 * Page navigation Template file
 */
?>
<div class="mdl-cell mdl-cell--12-col mdl-shadow--2dp aftv-pagination-container">
    <?php
    the_posts_pagination(array(
        'prev_text' => __('Page pr&eacute;c&eacute;dente', 'afrique-television'),
        'next_text' => __('Page suivante', 'afrique-television'),
        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('', 'afrique-television') . ' </span>'
    ));
    ?>
</div>

