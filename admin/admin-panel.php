<?php
require '../PHP/actions/databaseCall.php';
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
    <link rel="stylesheet" src="../CSS/base.css">
    <link rel="stylesheet" href="../CSS/reset.css">
    <link rel="stylesheet" src="../CSS/adminPanel.css">
    <style>
        body{
            background: #000;
            color: white;
        }
        h1{
            color: red;
        }
        .panel{
            width: 100%;
            display: flex;
            flex-direction: column;
        }
        .panel-container{
            width: 100%;
            display: flex;
            flex-direction: row;
            justify-content: space-between;

        }
        .panel-container .left{
            background-color: purple;
            width: 30%;
            height: 100vh;
        }
    </style>
    <title>Admin Panel</title>
</head>
<body>
    <div class="panel">
        <header class="panel-header"><h1>Admin Panel</h1></header>

        <div class="panel-container">
            <div class="left">
            <a href="post.php">Post</a>
            </div>

            <div class="right">
                xxcxcxcx
            </div>
        </div>
    </div>
</body>
</html>