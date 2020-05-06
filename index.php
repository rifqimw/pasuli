<?php
    require_once "vendor/autoload.php";
    
    if(!isset($_SESSION)) {
        session_start();
        $_SESSION["game_stat"] = "healthy";
    }

    switch ($_SESSION["game_stat"]) {
        case "healthy":
            header("Location: phase_1.php");
            exit;
        case "infected":
            header("Location: phase_2.php");
            exit;
        default:
            echo("An error in SESSION has occurred!");
    }

?>