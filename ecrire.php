<!DOCTYPE html>
<html lang="fr">
<head>
    <title>MedyOsef</title>
</head>
<body>
<style>
body {
    color: gold;
    background-color: black;
}
</style>
    <?php
        $my_file = fopen('compteur.txt', 'r+');
        $page_view = fgets($my_file);

        $page_view += 1;
        fseek($my_file, 0);
        fputs('$my_flie', (string)$page_view);
        var_dump($page_view);
        
        fclose($my_file);
        
        echo "<p>Cette page à été vue ' . $page_view . ' fois !</p>";
    ?>
</body>
</html>