<?php

/**
 * Template Name: personal-post
 * Template Post Type: page, post, personal-post
 */

$title = get_field('titre_de_la_page');
$date = get_field('date_du_post');
$article = get_field('article');
$link = get_field('link_url');
$images = get_field('images');

?>

<?php get_header() ?>

</div>
<!-- header des customs personnel -->
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3 mb-4"><?php echo $title ?></h1>
        <?php echo $article ?>
        <a class="btn btn-outline-success btn-lg" href="<?php echo $link ?>" role="button" target="_blank">Visitez le site !</a>
    </div>
</div>
<div class="container-lg">
    <p class="text-center"><?php echo $date ?></p>
    <!-- Diapo -->
    <div id="diapo">
        <!----------------img01------------------->
        <div>
            <input type="radio" id="check_1" name="check" class="r_check" checked="checked">
            <label for="check_1" class="on_check">
                <img class="vignette" src="<?php echo esc_url($images['img1']); ?>" alt="">
            </label>
            <img class="big_image" src="<?php echo esc_url($images['img1']); ?>" alt="">
        </div>
        <!----------------img02------------------->

        <div>
            <input type="radio" id="check_2" name="check" class="r_check">
            <label for="check_2" class="on_check">
                <img class="vignette" src="<?php echo esc_url($images['img2']); ?>" alt="">
            </label>
            <img class="big_image" src="<?php echo esc_url($images['img2']); ?>" alt=""></div>
        <!----------------img03------------------->
        <div>
            <input type="radio" id="check_3" name="check" class="r_check">
            <label for="check_3" class="on_check">
                <img class="vignette" src="<?php echo esc_url($images['img3']); ?>" alt="">
            </label>
            <img class="big_image" src="<?php echo esc_url($images['img3']); ?>" alt="">
        </div>
        <!----------------img04------------------->
        <div>
            <input type="radio" id="check_4" name="check" class="r_check">
            <label for="check_4" class="on_check">
                <img class="vignette" src="<?php echo esc_url($images['img4']); ?>" alt="">
            </label>
            <img class="big_image" src="<?php echo esc_url($images['img4']); ?>" alt="">
        </div>
        <!----------------img05------------------->
        <div>
            <input type="radio" id="check_5" name="check" class="r_check">
            <label for="check_5" class="on_check">
                <img class="vignette" src="<?php echo esc_url($images['img5']); ?>" alt="">
            </label>
            <img class="big_image" src="<?php echo esc_url($images['img5']); ?>" alt="">
        </div>
        <!----------------img06------------------->
        <div>
            <input type="radio" id="check_6" name="check" class="r_check" checked="checked">
            <label for="check_6" class="on_check">
                <img class="vignette" src="<?php echo esc_url($images['img6']); ?>" alt="">
            </label>
            <img class="big_image" src="<?php echo esc_url($images['img6']); ?>" alt=""></div>
    </div>
    <!-- Fin Diapo -->
</div>

<?php get_footer() ?>