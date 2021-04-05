<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,600;0,700;0,800;0,900;1,600;1,700;1,800;1,900&family=Syne+Mono&display=swap" rel="stylesheet">
    <!--icons fontawesome.com-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <!--Lien fichers css et autre-->
    <!-- <link rel="icon" type="image/png" href="../assets/Logos/logomedy.png"> -->
    <link rel="stylesheet" href="../CSS/reset.css">
    <link rel="stylesheet" href="../CSS/header.css">
    <link rel="stylesheet" href="../CSS/base.css">
    <link rel="stylesheet" href="../CSS/responsive-header.css">
    <link rel="stylesheet" href="../CSS/article-view.css">
    <link rel="stylesheet" href="../CSS/footer.css">
    <link rel="stylesheet" href="../CSS/insert-post.css">
    <title>Insert Post</title>
</head>

<body>
    <div class="header header-article">
        <div class="header-texture"></div>
        <div class="container">
            <div class="header-navbar">
                <div class="header-nav-bar-logo">
                    <a href="../index.php" class="header-nav-bar-logo-title"><span>MedyOsef</span></a>
                    <!--h1 class="header-nav-bar-logo-title">MedyOsef</h1-->
                </div>
                <div class="header-nav-bar-menu">
                    <a href="" class="hearder-navbar-menu-link">Tutoriels</a>
                    <a href="" class="hearder-navbar-menu-link">CTF</a>
                    <a href="" class="hearder-navbar-menu-link">Projets</a>
                </div>
                <div class="header-navbar-toggle">
                    <span class="header-navbar-toggle-icons"></span>
                </div>
            </div>
            <div class="header-slogan">
                <h1 class="header-slogan-title">Inserer un poste</h1>
            </div>
        </div>
    </div>
    <!-- ********** Debut du formulaire de publication ********** -->
    <div class="insert-post-contenaire">
        <form class="form-insert-post" action="" method="post">
            <div class="form-line">
                <div class="form-block">
                    <label class="form-label">Catégorie </label>

                    <input type="radio" name="category" value="ctf"> <label for="male">CTF</label><br>
                    <input type="radio" name="category" value="tutorial"> <label for="tutorial">Tutoriel</label><br>
                    <input type="radio" name="category" value="project"> <label for="project">Projet</label>

                    <!-- <input class="form-checkbox" type="checkbox" name="ctf">
                    <input class="form-checkbox" type="checkbox" name="tutorial">
                    <input class="form-checkbox" type="checkbox" name="project"> -->
                </div>
            </div>

            <div class="form-line">
                <div class="form-block">
                    <label class="form-label">Titre</label>
                    <input class="form-input" type="texte" name="title">
                </div>
            </div>

            <div class="form-line">
                <div class="form-block">
                    <label class="form-label">Tags</label>
                    <input class="form-input" type="texte" name="tags">
                </div>
            </div>

            <div class="form-line">
                <div class="form-block">
                    <label class="form-label">Date</label>
                    <input class="form-date" type="date" name="date">
                </div>
            </div>

            <div class="form-line">
                <div class="form-block">
                    <label class="form-label">Contenu</label><br>
                    <textarea class="form-textarea" name="content" rows="0" cols="50"></textarea>
                </div>
            </div>
            <button class="btn">Publier</button>
        </form>
    </div>
    <!-- Fin du formulaire de publication -->

</body>

</html>