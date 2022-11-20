<?php
    $dbhost = "localhost:3307";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "modul3";
    $db = mysqli_connect ($dbhost, $dbuser, $dbpass, $dbname);
    function redirect($url, $statuscode=303)
    {
        header('Location : '. $url, true,$statuscode);
        die();
    }
?>
