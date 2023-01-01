<?php 
    $chaine = "XSS, SQL injection, html";
    $array = serialize(array_map('trim', explode(",", $chaine)));

    echo $array.'<br>';

    $array = unserialize($array);
    print_r($array);
?>


