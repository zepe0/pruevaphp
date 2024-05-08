<?php

session_start();

$_SESSION["login"] = 0;
$_SESSION["user"] = "admin";
$_SESSION["pass"] = "admin";
$_SESSION["cards"] = array(
    (object) array('titulo' => 'titulo1', 'img' => 'img1.jpg', "likes" => 3, 'des' => "Parque de Atracciones"),
    (object) array('titulo' => 'titulo2', 'img' => 'img2.jpg', "likes" => 8, 'des' => "Imagen de Fake", ),

);
$_SESSION["islogin"] = 1;

print_r($_SESSION);

