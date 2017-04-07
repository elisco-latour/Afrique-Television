<?php
/*
 * Template of page based on categories
 */
?>
<?php
function aftv_show_catpage($aftv_category) {
    $cat_page_output = '';
    $cat_page_output .= '<main class="mdl-layout__content">'; //Open the main tag
    $cat_page_output .= '<div class="page-content">'; // Open tag of the page content div
    $cat_page_output .= require get_template_directory() . '/inc/web-tv-section.php'; // Add the web Tv section
    $cat_page_output .= '<div class="mdl-grid aftv_content">'; //Open tag of the first grid
    $cat_page_output .= '<div class="mdl-cell mdl-cell--8-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">'; // Open tag of the column in which posts will be displayed
    $cat_page_output .= '<div class="mdl-grid">'; //Open tag of the grid contains in the first column
    /*
     * Afrique Television category page loop configuration
    */
    $aftv_cat_page_args = array(
    'cat' => array($aftv_category),
    'posts_per_page' => -1,
    'orderby' => 'date'
    );
    $aftv_catpage_query = new WP_Query($aftv_cat_page_args);

    if ($aftv_catpage_query->have_posts()):
    while ($aftv_catpage_query->have_posts()):$aftv_catpage_query->the_post();
    $cat_page_output .= ' <div class="mdl-card  mdl-shadow--2dp aftv-cat--post mdl-cell mdl-cell--12-col">';
    $cat_page_output .= '<div class="mdl-card__media aftv-media">';
    $cat_page_output .= the_post_thumbnail();
    $cat_page_output .= '</div>';
    $cat_page_output .= '<p class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone aftv-meta-data aftv-category-page">';
    $cat_page_output .= '<span class="aftv-cat">'.the_category(' | ').'</span>';
    $cat_page_output .= '<span class="aftv-post__date">'._e('publié le: ');
    $cat_page_output .= the_time('j, F, Y').'</span>';
    $cat_page_output .= '</p>';
    $cat_page_output .= '<div class="mdl-card__title">';
    $cat_page_output .= '<h1 class="mdl-card__title-text">'.the_title().'</h1>';
    $cat_page_output .= '</div>';
    $cat_page_output .= '<p class="mdl-card_supporting-text aftv-post__excerpt">';
    $cat_page_output .= get_the_excerpt();
    $cat_page_output .= '</p>';
    $cat_page_output .= '<div class="mdl-card__actions mdl-card--border">';
    $cat_page_output .= '<a href="'.the_permalink().'" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">';
    $cat_page_output .= "Lire l'article";
    $cat_page_output .= '</a>';
    $cat_page_output .= '</div>';
    $cat_page_output .= '</div>';
    endwhile; 
    endif;
    wp_reset_postdata();
    $cat_page_output .= get_template_part('template-parts/navigation/aftv', 'page-navigation');
    $cat_page_output .= '</div>';
    $cat_page_output .= '</div>';
    $cat_page_output .= '<div class="aftv-cat__widgets mdl-cell mdl-cell--4-col mdl-cell--hide-tablet mdl-cell--hide-phone">';
    $cat_page_output .= '<div class="mdl-grid">';
    $cat_page_output .= '<div class="mdl-cell mdl-cell--12-col">';
    $cat_page_output .= dynamic_sidebar('sidebar-6');
    $cat_page_output .= '</div>';
    $cat_page_output .= '</div>';
    $cat_page_output .= '</div>';
    $cat_page_output .= '</div>';
}

