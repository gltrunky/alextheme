<?php get_header(); ?>

<?php if (have_posts()) : ?>
    </div>
    <!-- header de la page Création -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Créations</h1>
            <p>Voici mon portfolio, certain projet que j'ai réalisé seul ou bien en équipe, j'éspere que mes créations vous plairons</p>
            <p><a class="btn btn-outline-success btn-lg" href="#titreContact" role="button">Contactez moi</a></p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php while (have_posts()) : the_post(); ?>
                <div class="col-sm-4 mb-4">
                    <a href="<?php the_permalink() ?>" class="card-link">
                        <div class="card shadow">
                            <?php the_post_thumbnail('card-header', ['class' => 'card-img-top shadow', 'alt' => '', 'style' => 'height: auto;']) ?>
                            <div class="card-body">
                                <h5 class="card-title text-center"><?php the_title() ?></h5>
                            </div>
                    </a>
                </div>
        </div>
    <?php endwhile ?>

    </div>

    <?php alexandre_pagination() ?>

<?php else : ?>
    <h1>Pas de création !</h1>
<?php endif; ?>

<?php get_footer() ?>