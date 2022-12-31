<?php 
require 'PHP/actions/databaseCall.php';
$errorMsg = "";
// validayion du formulaire
if(isset($_POST['validate'])){
    // Verification des champs
    if(!empty($_POST['username'])  AND !empty($_POST['password'])){

            //Les donnees de l'utilisateur
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);

            // Verifier si l'utilisateur existe
            $checkIfUserExists = $conn->prepare('SELECT * FROM users WHERE username = ?');
            $checkIfUserExists->execute(array($username));

            if($checkIfUserExists->rowCount() > 0) {

                // Recupere les données de l'utilisateur
                $userInformations = $checkIfUserExists->fetch();
                
                //verifier si le mot de passe est correct
                if(password_verify($password,$userInformations['pwd'])){

                    // Authentication de l'utilisateur et recuperation des donnees dans des variables globales de session
                    $_SESSION['auth'] = true;
                    $_SESSION['id'] = $userInformations['id'];
                    $_SESSION['username'] = $userInformations['username'];
                    $_SESSION['email'] = $userInformations['email'];

                    // rediriger l'utilisateur vers la page d'accueil
                    header('Location: index.php');


                }else{
                    $errorMsg = "Identifiants incorrect ...\n".$errorMsg;
                }

            }else{
                $errorMsg = "Identifiants incorrect ...\n".$errorMsg;
            }

        }else{
            $errorMsg = "Veuillez completer tous les champs ...\n".$errorMsg;
        }
}
?>