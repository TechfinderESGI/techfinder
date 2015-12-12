<?php include("template/header.tpl.php"); ?>
<div id="content">
    <div class="container">
        <div id="page_title">
            <h1>Bienvenue sur Tech<span class="accent">Finder</span></h1>
            <p>
                Court texte de présentation donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla
                consequat massa quis enim.
            </p>
        </div>

        <section>
            <h2>Flux</h2>

            <article class="flux_article">
                <header>
                    <h3>
                        <a href="#" class="username">
                            <em>@</em>gamer42
                        </a> à commenté l'item truc
                    </h3>
                </header>

                <aside><img src="img/placeholder.png"/></aside>

                <div>
                <p>Lorem ipsum <a href="#" class="hashtag">#dolor</a> sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                    massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                </div>

                <p>
                    <a href="#" class="call-to-action-btn">Lire le post</a>
                </p>

                <footer>
                    <a href="#">Posté il y à 20 minutes</a> -
                    <a href="#">Répondre à gamer42</a>
                </footer>
            </article>

            <article class="flux_article">
                <header>
                    <h3>
                        <a href="#" class="username">
                            <em>@</em>someonelse
                        </a> à publié un comparatif
                    </h3>
                </header>

                <aside><img src="img/placeholder.png"/></aside>

                <div>
                    <p>Lorem ipsum dolor VS sit amet<br />
                        Aenean commodo ligula eget dolor. Aenean
                        massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
                        quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                </div>

                <p>
                    <a href="#" class="call-to-action-btn">Voir le comparatif</a>
                </p>

                <footer>
                    <a href="#">Il y à 20 minutes</a>
                    <a href="#">Répondre</a>
                </footer>
            </article>

            <p>
                <a href="#" class="call-to-action-btn">Parcourir le flux</a>
            </p>
        </section>

        <section id="latest_posts_grid">
            <h2>Derniers objets publiés</h2>

            <div class="row">
                <article class="col">
                    <h3>Post title</h3>
                    <a href="#">
                        <img src="img/placeholder.png"/>
                    </a>
                </article>
                <article class="col">
                    <h3>Post title</h3>
                    <a href="#">
                        <img src="img/placeholder.png"/>
                    </a>
                </article>
                <article class="col">
                    <h3>Post title</h3>
                    <a href="#">
                        <img src="img/placeholder.png"/>
                    </a>
                </article>
            </div>
            <div class="hidden-mobile">
                <div class="row">
                    <article class="col">
                        <h3>Post title</h3>
                        <a href="#">
                            <img src="img/placeholder.png"/>
                        </a>
                    </article>
                    <article class="col">
                        <h3>Post title</h3>
                        <a href="#">
                            <img src="img/placeholder.png"/>
                        </a>
                    </article>
                    <article class="col">
                        <h3>Post title</h3>
                        <a href="#">
                            <img src="img/placeholder.png"/>
                        </a>
                    </article>
                    <article class="col">
                        <h3>Post title</h3>
                        <a href="#">
                            <img src="img/placeholder.png"/>
                        </a>
                    </article>
                    <article class="col">
                        <h3>Post title</h3>
                        <a href="#">
                            <img src="img/placeholder.png"/>
                        </a>
                    </article>
                </div>
            </div>
            <p>
                <a href="#" class="call-to-action-btn">Consulter le catalogue</a>
            </p>
        </section>

        <section>
            <h2>Une recherche spécifique ?</h2>

            <form>
                <p id="search_pro_tips"></p>
                <p>
                    <input type="text" name="q" placeholder="Rechercher dans les posts et les objets"
                           id="search_main">
                </p>
                <p>
                    <input type="submit" value="Trouver" class="call-to-action-btn">
                </p>
            </form>
        </section>

    </div>
</div>
<?php include("template/footer.tpl.php"); ?>
