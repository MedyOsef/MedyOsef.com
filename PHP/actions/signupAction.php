<?php 
require 'PHP/actions/databaseCall.php';
$errorMsg = "";
// validayion du formulaire
if(isset($_POST['validate'])){
    // Verification des champs
    if(!empty($_POST['username']) AND !empty($_POST['email']) AND !empty($_POST['password']) AND !empty($_POST['rpassword'])){

        //Les donnees de l'utilisateur
        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        //$password = $_POST['password'];
        $rpassword = $_POST['rpassword'];

        // verification de la corespondance des mots de passe
        if($_POST['password'] == $_POST['rpassword']){

            // Creation d'un hash
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            // verifier si l'utilisateur existe deja dans la base de donnees
            $checkIfUserAlreadyExists = $conn->prepare('SELECT username FROM users WHERE username = ? OR email = ?');
            $checkIfUserAlreadyExists->execute(array($username,$email));
            
            if($checkIfUserAlreadyExists->rowCount() == 0){

                //Insertion de l'utilisateur dans bdd
                $insertUser = $conn->prepare('INSERT INTO users(username, email, pwd) VALUES (?, ?, ?)');
                $insertUser->execute(array($username,$email,$password));

                // Recuperer les informations de l'utilisateur
                $getUserInformationsReq = $conn->prepare('SELECT id, username, email FROM users WHERE username = ? AND email = ?');
                $getUserInformationsReq->execute(array($user_name,$user_email));

                $userInformations = $getUserInformationsReq->fetch();

                // Authentication de l'utilisateur et recuperation des donnees dans des variables globales de session
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $userInformations['id'];
                $_SESSION['username'] = $userInformations['username'];
                $_SESSION['email'] = $userInformations['email'];

                // rediriger l'utilisateur vers la page d'accueil
                header('Location: index.php');

            }else{
                $errorMsg = "L'utilisateur existe deja.";
            }
        }else{$errorMsg = "Les mots de passe de correspondents pas\n".$errorMsg;}

    
    }else{$errorMsg = "Veuillez completer tous les champs ...\n".$errorMsg;}
}
?>