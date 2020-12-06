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
                <div class="col-sm-4">
                    <div class="card">
                        <?php the_post_thumbnail('card-header', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height: auto;']) ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title() ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php the_category() ?></h6>
                            <p class="card-text">
                                <?php the_excerpt() ?>
                            </p>
                            <a href="<?php the_permalink() ?>" class="card-link">Voir plus</a>
                        </div>
                    </div>
                </div>
            <?php endwhile ?>

        </div>

        <?php alexandre_pagination() ?>

    <?php else : ?>
        <h1>Pas de création !</h1>
    <?php endif; ?>

    <?php get_footer() ?>