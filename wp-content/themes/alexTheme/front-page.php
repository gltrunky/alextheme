<?php get_header() ?>
</div>
<!-- header de la page index -->
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Alexandre MARTIN</h1>
        <p>Bienvenue sur mon blog. Je suis développeur fullstack dans la région occitanie
            Je suis quelqu’un de sérieux et trés curieux. J’aime apprendre, partager mes connaissances et
            suis ouvert à la critique. Passionné par l’informatique et la conception du web.</p>
        <p><a class="btn btn-outline-success btn-lg" href="#titreContact" role="button">Contactez moi</a></p>
    </div>
</div>

<div class="container">

    <!-- section 1 de la page index -->
    <div class="row">

        <div id="grilleIndex" class="col-md-8">
            <div class="col-sm-6 my-2">
                <div class="card shadow">
                    <a href="http://alex/competences/"><img src="wp-content/uploads/2020/09/skills.jpg" class="card-img-top" alt="skills image"></a>
                    <div class="card-body">
                        <h5 class="card-title">Mes compétences</h5>
                        <p class="card-text">Du front au back voici mon niveau.</p>
                        <p class="text-center"><a class="btn btn-outline-success" href="http://alex/competences/" role="button">Compétences</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 my-2">
                <div class="card shadow">
                    <a href="http://alex/creations/"><img src="wp-content/uploads/2020/09/creation.jpg" class="card-img-top" alt="portfolio image"></a>
                    <div class="card-body">
                        <h5 class="card-title">Mes créations</h5>
                        <p class="card-text">Différents projets voici ce que j'ai fait.</p>
                        <p class="text-center"><a class="btn btn-outline-success" href="http://alex/creations/" role="button">Créations</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 my-2">
                <div class="card shadow">
                    <img src="wp-content/uploads/2020/09/news.jpg" class="card-img-top" alt="news image">
                    <div class="card-body">
                        <h5 class="card-title">Actualités</h5>
                        <p class="card-text">Mes conseils, voici les actualités. </p>
                        <p class="text-center"><a class="btn btn-outline-success" href="http://alex/actualites/" role="button">Actualités</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 my-2 resaux">
                <div class="card shadow">
                    <img src="wp-content/uploads/2020/09/social.jpg" class="card-img-top" alt="social image">
                    <div class="card-body">
                        <h5 class="card-title">Contact</h5>
                        <p class="card-text">Mon linkedin et mon repository Git</p>
                        <p class="text-center">
                            <a href="https://www.linkedin.com/in/alexandre-martin-9a30a7181/"><i class="fab fa-linkedin"></i></a>
                            <a class="pl-5" href="https://github.com/gltrunky"><i class="fab fa-github"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 text-center">
            <iframe src="https://discordapp.com/widget?id=193667714923888640&theme=dark" width="95%" height="760" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
        </div>
    </div>
    <h2 class="mt-5 mb-4 text-center display-6" id="titreContact">N'hesitez pas a me contacter</h2>
    <?php while (have_posts()) : the_post(); ?>
        <?php the_content() ?>
    <?php endwhile ?>

    <?php get_footer() ?>