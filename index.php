<!DOCTYPE html>
<html lang="fr" date-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-with, inital-scale=1.0">
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
    <link rel="stylesheet" href="CSS/modal-contact-me.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <!--link rel="stylesheet" href="CSS/responsive-article.css"-->
    <!--link rel="stylesheet" href="CSS/responsive-header.css"-->

    <!--link href="https://unpkg.com/tailwindcss@^1.0/dist/base.min.css" rel="stylesheet" /-->

    <title>MedyOsef</title>
</head>

<body>
    <!--Debut du hearder-->
    <?php include("PHP/Inclusion/hearder.php")?>
    <!--fin-->

    <div class="articles">

        <div class="container">

            <div class="article">
                <div class="image">
                    <a href="PHP/article-reading.php">
                        <img src="assets/Images/tuto-1.jpg" alt=" ">
                        <div class="tags">
                            <a href="" class="tag">pentesting</a>
                            <a href="" class="tag">kali</a>
                            <a href="" class="tag">tag</a>
                        </div>
                    </a>
                </div>
                <div class="content">
                    <h2 class="article-title"><a href="PHP/article-reading.php">La productivité</a></h2>
                    <span>03 Fevrier 2020</span>
                    <p>It is a long established fact that a reader will be distracted by the
                        readable content of a page when looking at its layout. The point of.</p>
                </div>
            </div>

            <div class="article">
                <div class="image">
                    <a href="">
                        <img src="assets/Images/tuto-2.jpg" alt=" ">
                        <div class="tags">
                            <a href="" class="tag">Kali Vs ParrotOS</a>
                            <a href="" class="tag">Revers TCP</a>
                            <a href="" class="tag">lili</a>
                            <a href="" class="tag">TryHackMe</a>
                        </div>
                    </a>
                </div>
                <div class="content">
                    <h2 class="article-title"><a href="">Gestion des systeme</a></h2>
                    <span>03 Fevrier 2020</span>
                    <p>It is a long established fact that a reader will be distracted by the
                        readable content of a page when looking at its layout. The point of</p>
                </div>
            </div>

            <div class="article">
                <div class="image">
                    <a href="">
                        <!--img src="https://blog.tryhackme.com/content/images/size/w2000/2019/12/metasploit-basic-commands.jpg" alt="Tesla-model-x"-->
                        <img src="assets/Images/metasploit-image.jpg" alt=" ">
                        <div class="tags">
                            <a href="" class="tag">JavaScript</a>
                            <a href="" class="tag">Daffy</a>
                        </div>
                    </a>
                </div>
                <div class="content">
                    <h2 class="article-title"><a href="">Metasploit: Basics</a></h2>
                    <span>03 Fevrier 2020</span>
                    <p>It is a long established fact that a reader will be distracted by the
                        readable content of a page when looking at its layout. The point of</p>
                </div>
            </div>

            <div class="article">
                <div class="image">
                    <a href="">
                        <img src="assets/Images/tuto-3.jpg" alt=" ">
                        <div class="tags">
                            <a href="" class="tag">jhon the ripper</a>
                            <a href="" class="tag">tag</a>
                            <a href="" class="tag">tag</a>
                        </div>
                    </a>
                </div>
                <div class="content">
                    <h2 class="article-title"><a href="">Bien travailler</a></h2>
                    <span>03 Fevrier 2020</span>
                    <p>It is a long established fact that a reader will be distracted by the readable
                        content of a page when looking at its layout. The point of</p>
                </div>
            </div>
        </div>
    </div>
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

    <!-- Fin -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="JS/app.js"></script>
    <script src="JS/LightDarkTheme.js"></script>
</body>

</html>
