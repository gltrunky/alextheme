<?php get_header() ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
        <h1 class="text-center mb-4 generalArt"><?php the_title() ?></h1>

        <!-- code pour utilisé la meta donnée alexandre_sponso -->
        <?php //if (get_post_meta(get_the_ID(), SponsoMetaBox::META_KEY, true) === '1') :
        ?>
        <!-- <div class="alert alert-info">
                Cet article est sponsorisé
            </div> -->
        <?php //endif 
        ?>
        <!-- fin du code pour utilsé la meta donnée alexandre_sponso -->

        <p>
            <img class="rounded shadow" src="<?php the_post_thumbnail_url(); ?>" alt="" style="width:100%; height:auto;">
        </p>
        <div class="shadow p-3 mb-5 bg-white rounded text-justify">
            <?php the_content() ?>
        </div>

        <?php insertbackbutton($content) ?>


    <?php endwhile ?>

<?php else : ?>
    <h1>Pas d'articles</h1>
<?php endif; ?>

<?php get_footer() ?>