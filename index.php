<!DOCTYPE html>
<html lang="fr" date-theme="dark">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--font familly fonts.google.com-->
    <link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,600;0,700;0,800;0,900;1,600;1,700;1,800;1,900&family=Syne+Mono&display=swap" rel="stylesheet">
    <!--icons fontawesome.com-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <!--icons css.gg-->
    <link href='https://css.gg/css' rel='stylesheet'>
    <!--Lien fichers css et autre-->
    <link rel="icon" type="image/png" href="assets/Logos/logomedy.png">
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="CSS/base.css">
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="CSS/loader.css">
    <!--link rel="stylesheet" href="CSS/responsive-article.css"-->
    <!--link rel="stylesheet" href="CSS/responsive-header.css"-->

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/base.min.css" rel="stylesheet">

    <title>MedyOsef</title>
</head>

<body class="loading">
    <div class="preload">
        <div class="loader">
            <svg viewBox="0 0 80 80">
                <circle id="test" cx="40" cy="40" r="32"></circle>
            </svg>
        </div>

        <div class="loader triangle">
            <svg viewBox="0 0 86 80">
                <polygon points="43 8 79 72 7 72"></polygon>
            </svg>
        </div>

        <div class="loader">
            <svg viewBox="0 0 80 80">
                <rect x="8" y="8" width="64" height="64"></rect>
            </svg>
        </div>
    </div>
    <!--Debut du hearder-->
    <?php include("PHP/Inclusion/hearder.php") ?>
    <!--fin hearder-->

    <!-- <div class="articles"> -->

    <div class="articles-container">

        <a class="article" href="PHP/article-reading.php">
            <div class="image">
                <img src="assets/Images/tuto-1.jpg" alt="Image titre de l'article">
                <ul class="tags">
                    <li class="tag">pentesting</li>
                    <li class="tag">kali</li>
                    <li class="tag">tag</li>
                </ul>
            </div>
            <div class="content">
                <h2 class="article-title">La productivité</h2>
                <p>It is a long established fact that a reader will be distracted by the
                    readable content of a page when looking at its layout. The point of.</p>
                <div class="article-supplementary-information">
                    <span class="article-publishing-date">03 Fevrier 2020</span>
                    <span class="article-reading-time"> 12 minutes</span>
                </div>
            </div>
        </a>

        <a class="article" href="">
            <div class="image">
                <img src="assets/Images/tuto-2.jpg" alt="Image titre de l'article">
                <ul class="tags">
                    <li class="tag">Kali Vs ParrotOS</li>
                    <li class="tag">Revers TCP</li>
                    <li class="tag">lili</li>
                    <li class="tag">TryHackMe</li>
                </ul>
            </div>
            <div class="content">
                <h2 class="article-title">Gestion des systeme</h2>
                <p>It is a long established fact that a reader will be distracted by the
                    readable content of a page when looking at its layout. The point of</p>
                <div class="article-supplementary-information">
                    <span class="article-publishing-date">03 Fevrier 2020</span>
                    <span class="article-reading-time"> 12 minutes</span>
                </div>
            </div>
        </a>

        <a class="article" href="">
            <div class="image">
                <!--img src="https://blog.tryhackme.com/content/images/size/w2000/2019/12/metasploit-basic-commands.jpg" alt="Tesla-model-x"-->
                <img src="assets/Images/metasploit-image.jpg" alt="Image titre de l'article">
                <ul class="tags">
                    <li class="tag">JavaScript</li>
                    <li class="tag">Daffy</li>
                </ul>
            </div>
            <div class="content">
                <h2 class="article-title">Metasploit: Basics</h2>
                <p>It is a long established fact that a reader will be distracted by the
                    readable content of a page when looking at its layout. The point of</p>
                <div class="article-supplementary-information">
                    <span class="article-publishing-date">03 Fevrier 2020</span>
                    <span class="article-reading-time"> 12 minutes</span>
                </div>
            </div>
        </a>

        <a class="article" href="">
            <div class="image">
                <img src="assets/Images/windows-11-wallpaper-1480x925.jpeg" alt="Image titre de l'article">
                <ul class="tags">
                    <li class="tag">jhon the ripper</li>
                    <li class="tag">tag</li>
                    <li class="tag">tag</li>
                </ul>
            </div>
            <div class="content">
                <h2 class="article-title">Comment installer Windows 11</h2>
                <p>It is a long established fact that a reader will be distracted by the readable
                    content of a page when looking at its layout. The point of</p>
                <div class="article-supplementary-information">
                    <span class="article-publishing-date">03 Fevrier 2020</span>
                    <span class="article-reading-time"> 12 minutes</span>
                </div>
            </div>
        </a>

        <a class="article" href="">
            <div class="image">
                <img src="assets/Images/python-pro.jpg" alt="Image titre de l'article">
                <ul class="tags">
                    <li class="tag">jhon the ripper</li>
                    <li class="tag">tag</li>
                    <li class="tag">tag</li>
                </ul>
            </div>
            <div class="content">
                <h2 class="article-title">Bien travailler et vite c'est un teste</h2>
                <p>It is a long established fact that a reader will be distracted by the readable
                    content of a page when looking at its layout. The point of</p>
                <div class="article-supplementary-information">
                    <span class="article-publishing-date">03 Fevrier 2020</span>
                    <span class="article-reading-time"> 12 minutes</span>
                </div>
            </div>
        </a>

    </div>
    <!-- </div> -->
    <div class="center">
        <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#">1</a>
            <a href="#" class="active">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">&raquo;</a>
        </div>
    </div>

    <!-- Début de footer-->
    <?php include("PHP/Inclusion/footer.php"); ?>

    <!-- Fin footer -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="./JS/app.js"></script>
    <script src="./JS/LightDarkTheme.js"></script>
    <script>
        const preloader = document.querySelector('.preload');
        const body = document.querySelector('body')
        window.addEventListener('load', () => {
            preloader.classList.add('fontdu-out');
            preloader.style.zIndex = -10;
            body.className = '';
        })
    </script>
</body>

</html>