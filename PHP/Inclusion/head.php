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

    <!--font familly fonts.google.com-->
    <link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,600;0,700;0,800;0,900;1,600;1,700;1,800;1,900&family=Syne+Mono&display=swap" rel="stylesheet">
    <!--icons fontawesome.com-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <!--Lien fichers css et autre-->
    <link rel="icon" type="image/png" href="../assets/Logos/logomedy.png">
    <link rel="stylesheet" href="../CSS/reset.css">
    <link rel="stylesheet" href="../CSS/admin-login.css">








    <?php
    if ($_SERVER['REQUEST_URI'] == "/signup.php") {
        echo '<title>Signup</title>';
    } else if ($_SERVER['REQUEST_URI'] == "/login.php") {
        echo '<title>Login</title>';
    } else if ($_SERVER['REQUEST_URI'] == "/PHP/insert-post.php") {
        echo '<title>Insert Post</title>';
    } else if ($_SERVER['REQUEST_URI'] == "/PHP/admin-login.php") {
        echo '<title>Administration</title>';
    } else {
        echo '<title>' . $_SERVER['REQUEST_URI'] . '</title>';
    }
    ?>
</head>