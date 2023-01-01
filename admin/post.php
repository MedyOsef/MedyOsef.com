<?php
require '../PHP/actions/postAction.php';
if (!$_SESSION['admin_auth']) {
    header('Location: admin-login.php');
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,600;0,700;0,800;0,900;1,600;1,700;1,800;1,900&family=Syne+Mono&display=swap" rel="stylesheet">
    <!--icons fontawesome.com-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <!--Lien fichers css et autre-->
    <!-- <link rel="icon" type="image/png" href="../assets/Logos/logomedy.png"> -->
    <!-- <script src="https://cdn.tiny.cloud/1/2fq7dtauax2tzjs2axcj0shvm1kwd675899u6ux5p6yvqrzd/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> -->
    <link rel="stylesheet" href="../CSS/reset.css">
    <link rel="stylesheet" href="../CSS/footer.css">
    <link rel="stylesheet" href="../CSS/insert-post.css">
    <link rel="stylesheet" href="../CSS/base.css">
    <link rel="icon" type="image/png" href="../assets/Logos/logomedy.png">
    <head>Insert post</head>
</head>
<body>

    <nav>
        <div>
            <a class="return" href="../index.php"><i class="fas fa-arrow-left"></i></a>
            <a href="" class="logo">MedyOsef</a>
        </div>
        <a class="logout-button" href="../PHP/actions/logoutAction.php">Déconnexion</a>
    </nav>
    <form action="" method="post">
        <div class="insert-post-contenaire">
            <div class="post-editor">
                <div class="input-contenaire">
                    <input class="title" type="text" name="title" placeholder="Titre" required>

                </div>
                <div class="textarea-contenaire">
                    <textarea id="editor" class="text-editor" name="content" rows="30" required></textarea>
                </div>
            </div>

            <div class="post-settings">
                <div class="action-buttons">
                    <a class="action-button see" href="">Aperçu</a>
                    <input class="action-button send" type="submit" value="publish">
                </div>

                <div class="settings">
                    <h3 align="center">Paramètres de l'articles</h3>
                    <input id="tags" type="text" name="tags" placeholder="Libellés" required>

                    <h4 class="date-title">Date de publication</h4>
                    <input id="date-of-the-publication" type="text" name="dateOfThePublication" placeholder="30 Novembre 2022" required>
                    <h4 class="category-title">Catégorie</h4>
                    <div class="category">

                        <div class="category-left">
                            <div class="category-left-children">
                                <input type="radio" id="category-checkbox" name="category" value="ctf" checked>
                                <label for="ctf">CTF</label>
                            </div>

                            <div class="category-left-children">
                                <input type="radio" id="category-checkbox" name="category" value="tutorial">
                                <label for="tutorial">Tutoriel</label>
                            </div>
                        </div>

                        <div class="category-right">
                            <div class="category-right-children">
                                <input type="radio" id="category-checkbox" name="category" value="project">
                                <label for="project">Projet</label>
                            </div>

                            <div class="category-right-children">
                                <input type="radio" id="category-checkbox" name="category" value="info" >
                                <label for="project">Info</label>
                            </div>
                        </div>

                    </div>
                    <hr>

                    <h3>URL</h3>
                    <input id="url" type="text" name="articleUrl" placeholder="url..." required>

                    <h4>Description</h4>
                    <textarea class="description" name="description" required></textarea>
                </div>
                <h4 class="image-article-h4">image</h4>
                <input class="article-img" type="file" name="image" required>

            </div>
        </div>
    </form>
    <!-- <a href="menbres.php">afficher les menbres</a> -->
    <!-- <script src="../JS/tinymce.js"></script> -->


    <!-- CREATE TABLE `medyosef`.`articles` (`title` CHAR(255) NOT NULL , `tags` CHAR(255) NOT NULL , `description` CHAR(255) NOT NULL , `image` CHAR(255) NOT NULL , `category` CHAR(255) NOT NULL , `date` DATE NOT NULL , `contents` MEDIUMTEXT NOT NULL , `id` INT NOT NULL AUTO_INCREMENT , PRIMARY KEY (`id`, `title`)) ENGINE = InnoDB CHARSET=utf8mb3 COLLATE utf8mb3_general_ci; -->
    <footer class="footer-low">
        <p>&copy Copyright MedyOsef 2021</p>
    </footer>
</body>

</html>