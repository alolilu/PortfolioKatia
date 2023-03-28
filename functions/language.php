<?php

$lang = "en";

if(isset($_COOKIE['language']) && $_COOKIE['language'] == "fr"){
    include("traduction/fr.php");
    $lang = "fr";
} else {
    include("traduction/en.php");
    $lang = "en";
}