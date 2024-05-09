<?php
session_start();
if (isset($_POST["action"])) {
    if (isset($_POST["User"])) {
        if (strlen($_POST["User"]) < 8) {
            $_SESSION["errorUser"] = "El nombre de usuario debe contener 8 caracteres";

        }
    }
    ;
    if (isset($_POST["User"])) {

    }
    ;
    if (isset($_POST["User"])) {

    }
    ;
    if (isset($_POST["email"])) {

    }
    ;

}
