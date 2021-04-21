<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,600;0,700;0,800;0,900;1,600;1,700;1,800;1,900&family=Syne+Mono&display=swap" rel="stylesheet">
    <!--icons fontawesome.com-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <!--Lien fichers css et autre-->
    <!-- <link rel="icon" type="image/png" href="../assets/Logos/logomedy.png"> -->
    <script src="https://cdn.tiny.cloud/1/2fq7dtauax2tzjs2axcj0shvm1kwd675899u6ux5p6yvqrzd/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <link rel="stylesheet" href="../CSS/reset.css">
    <link rel="stylesheet" href="../CSS/footer.css">
    <link rel="stylesheet" href="../CSS/insert-post.css">
    <title>Insert Post</title>
</head>

<body>

    <nav>
        <div>
            <a class="return" href=""><i class="fas fa-arrow-left"></i></a>
            <a href="" class="logo">MedyOsef</a>
        </div>
    </nav>
    <div class="insert-post-contenaire">
        <div class="post-editor">
            <input class="title" type="text" name="title" placeholder="Titre">
            <!-- <div class="editor-customizer"></div> -->
            <div class="textarea-contenaire">
                <textarea id="editor" class="text-editor" name="" rows="30"></textarea>
            </div>
        </div>

        <div class="post-settings">
            <div class="action-buttons">
                <a class="action-button see" href="">Aperçu</a>
                <a class="action-button send" href="">Publier</a>
            </div>
            <h3>Paramètres des articles</h3>
            <div class="settings">
                    <input id="tag" type="text" name="tag" placeholder="Libellés">
    
                    <h4 class="date-title">Date de publication</h4>
                    <input id="date-of-the-publication" type="date" name="date-of-the-publication">
                    
                    <h4 class="category-title">Catégorie</h4>
                    <div class="category">
                        <div>
                            <input type="radio" id="category-checkbox" name="radio" value="CTF" checked>
                            <label for="CTF">CTF</label>
                        </div>

                        <div>
                            <input type="radio" id="category-checkbox" name="radio" value="Tutorial" checked>
                            <label for="Tutorial">Tutoriel</label>
                        </div>
                                            
                        <div>
                            <input type="radio" id="category-checkbox" name="radio" value="Project" checked>
                            <label for="Project">Projet</label>
                        </div>
                    </div>
                    <hr>
                        
            </div>
        </div>
    </div>
    <script src="../JS/tinymce.js"></script>
</body>

</html>