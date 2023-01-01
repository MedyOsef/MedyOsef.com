<?php
require '../PHP/actions/databaseCall.php';
$errorMsg = "";
$errorImageMsg = "";
// validayion du formulaire
if(isset($_POST['publish'])){
    // Verification des champs
    if(!empty($_POST['title']) AND !empty($_POST['content']) AND !empty($_POST['tags']) AND !empty($_POST['dateOfThePublication']) AND !empty($_POST['category']) AND !empty($_POST['articleUrl']) AND !empty($_POST['description']) AND isset($_FILES['image']) AND $_FILES['image']['error']==0){
        $errorImage = 1;
        //Verifier la taille de l'image
        if ($_FILES['image']['error']<= 4000000){

            // Verificate du l'extension du fichier image
            $imageFormations = pathinfo($_FILES['image']['name']);
            $imageExtension = $imageFormations['extension'];

            $validExtension = array("jpg", "jpeg", "png"); // liste des extensions valide

            // Verifier si l'extension du fichier est valide
            if(in_array($imageExtension, $validExtension)){

                $imageAddress = '../Images/article_img/'.htmlspecialchars($_POST['articleUrl']).$imageExtension;

                move_uploaded_file($_FILES['image']['tmp_name'],  $imageAddress);
                $errorImage = 0;

                //----------------------------------------------------------------------------------//
                //Les donnees de l'article
                $title = htmlspecialchars($_POST['username']);
                $tags = serialize(array_map('trim', explode(",", $_POST['tags']))); //unserialize pour faire linverse
                $date = htmlspecialchars($_POST['dateOfThePublication']);
                $category = htmlspecialchars($_POST['category']);
                $url = htmlspecialchars($_POST['articleUrl']);
                $description = htmlspecialchars($_POST['articleDescription']);
                $imageName = htmlspecialchars($_POST['articleUrl']).$imageExtension;

                //Insertion de l'article dans la bdd
                $insertArticle = $conn->prepare('INSERT INTO articles(title, tags, datedateOfThePublicatio, category, articleUrl, articleDescription, imageName) VALUES (?, ?, ?, ?, ?, ?, ?)');
                $insertArticle->execute(array($title, $tags, $date, $category, $url, $description, $imageName));

                // Recuperer les informations de l'article
                $getArticleInformationsReq = $conn->prepare('SELECT id, title, tags, datedateOfThePublicatio, category, articleUrl, articleDescription, imageName FROM articles WHERE title = ? AND articleUrl = ?');
                $getArticleInformationsReq->execute(array($title,$url));

                $userInformations = $getUserInformationsReq->fetch();

                // rediriger l'utilisateur vers la page d'accueil
                header('Location: index.php');

            }else{$errorImageMsg = "Les seules formats autorisés sont (jpg, jpeg, png)";}//code error extension
           
        }else{$errorImageMsg = "La Taille de votre image ne dois pas depasser 4Mo";}//code error size over
    
    }else{$errorMsg = "Veuillez completer tous les champs ...\n".$errorMsg;}
}
?>