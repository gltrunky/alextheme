<?php

/**
 * Template Name: Compétences
 * Template Post Type: page, post
 */
?>

<?php get_header() ?>

</div>
<!-- header de la page index -->
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Compétences</h1>
        <p>Du front-end au back-end durant mon parcour professionnel. J'ai pu apprendre plein de langages. A travers cette page
            je vais essayé de vous montré mon niveau pour chaqu'un des langages, où chaqu'une des technologies que j'ai apprit. </p>
        <p>
            <a class="btn btn-outline-success btn-lg" href="#langue" role="button">Langages</a>
            <a class="btn btn-outline-success btn-lg" href="#framework" role="button">Framework</a>
            <a class="btn btn-outline-success btn-lg" href="#outil" role="button">Outils - Cms</a>
            <a class="btn btn-outline-success btn-lg" href="#diplome" role="button">Diplomes</a>
        </p>
    </div>
</div>

<div class="container">
    <!-- Langages -->
    <h2 id="langue" class="text-center display-5 mb-4">Langages</h2>
    <div class="row">
        <div class="col-sm-4 my-2">
            <div class="card shadow">
                <img src="../wp-content/uploads/2020/10/html5.jpg" class="card-img-top" alt="html5 image">
                <div class="card-body">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 my-2">
            <div class="card shadow">
                <img src="../wp-content/uploads/2020/10/css3.jpg" class="card-img-top" alt="css3 image">
                <div class="card-body">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 my-2">
            <div class="card shadow">
                <img src="../wp-content/uploads/2020/10/js.jpg" class="card-img-top" alt="javascript image">
                <div class="card-body">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 my-2">
            <div class="card shadow">
                <img src="../wp-content/uploads/2020/10/phpmysql.jpg" class="card-img-top" alt="php mysql image">
                <div class="card-body">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 my-2">
            <div class="card shadow">
                <img src="../wp-content/uploads/2020/10/java.jpg" class="card-img-top" alt="java image">
                <div class="card-body">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Framework -->
    <h2 id="framework" class="text-center display-5 mb-4 mt-5">Framework</h2>
    <div class="row">
        <div class="col-sm-4 my-2">
            <div class="card shadow">
                <img src="../wp-content/uploads/2020/10/bootstrap.jpg" class="card-img-top" alt="bootstrap image">
                <div class="card-body">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 my-2">
            <div class="card shadow">
                <img src="../wp-content/uploads/2020/10/symfony.jpg" class="card-img-top" alt="symfony image">
                <div class="card-body">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 my-2">
            <div class="card shadow">
                <img src="../wp-content/uploads/2020/10/nodejs.jpg" class="card-img-top" alt="nodeJs image">
                <div class="card-body">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Outils - Cms -->
    <h2 id="outil" class="text-center display-5 mb-4 mt-5">Outils - Cms</h2>
    <div class="row">
        <div class="col-sm-4 my-2">
            <div class="card shadow">
                <img src="../wp-content/uploads/2020/10/git.jpg" class="card-img-top" alt="git image">
                <div class="card-body">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 my-2">
            <div class="card shadow">
                <img src="../wp-content/uploads/2020/10/wordpress.jpg" class="card-img-top" alt="wordpress image">
                <div class="card-body">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- diplomes -->
    <h2 id="diplome" class="text-center display-5 mb-4 mt-5">Diplomes</h2>
    <?php get_footer() ?>