<?php

function alexandre_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');
    add_image_size('card-header', 350, 215, true);
}

function alexandre_register_assets()
{
    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', [], false, true);
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

function alexandre_menu_class($classes)
{
    $classes[] = 'nav-item';
    return $classes;
}

function alexandre_menu_link_class($attrs)
{
    $attrs['class'] = 'nav-link';
    return $attrs;
}

function alexandre_pagination()
{
    $pages = paginate_links(['type' => 'array']);
    if ($pages === null) {
        return;
    }
    echo '<nav aria-label="Pagination" class="my-4">';
    echo '<ul class="pagination">';
    foreach ($pages as $page) {
        $active = strpos($page, 'current') !== false;
        $class = 'page-item';
        if ($active) {
            $class .= ' active';
        }
        echo '<li class="' . $class . '">';
        echo str_replace('page-numbers', 'page-link', $page);
        echo '</li>';
    }
    echo '</ul>';
    echo '</nav>';
}

function insertbackbutton($content)
{
    if (is_single()) {
        $back = $_SERVER['HTTP_REFERER'];
        if (isset($back) && $back != '') {
            $content .= '<a class="d-block text-right" href="' . $back . '" title="Retour"><button type="button" class="btn btn-outline-primary">Retour</button></a> ';
        }
    };
    return $content;
}

add_action('after_setup_theme', 'alexandre_supports');
add_action('wp_enqueue_scripts', 'alexandre_register_assets');
add_filter('nav_menu_css_class', 'alexandre_menu_class');
add_filter('nav_menu_link_attributes', 'alexandre_menu_link_class');
add_filter('the_content', 'insertbackbutton');

//require_once('metaboxes/sponso.php');
//SponsoMetaBox::register();
