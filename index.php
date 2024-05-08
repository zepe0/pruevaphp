<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=1.0">
    <title>Prova</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" placeholder="Usuario" name="User">
        <input type="password" placeholder="Contraseña" name="Pass">
        <input type="checkbox" name="Rec">Recuérdeme
        <button>Enviar</button>
    </form>
    <a href="Register.php">No tienes Cuenta Regístrate</a>
</body>

</html>
<?php
include_once ("bd.php");

$user = false;
$pas = false;

if ($_SESSION["login"] === 1 || isset($_COOKIE["user"]) && isset($_COOKIE["pas"]))
    header("Location:home.php");


if (isset($_REQUEST["User"])) {

    if (isset($_POST["User"]) && $_POST["User"] != "") {
        $_POST["User"] === $_SESSION["user"] ? $user = true : print ("<div><p>Usuario no registrado</p></div>");

    } else {

        print ("<div><p>Inserta un usuario</p></div>");
    }

    if (isset($_POST["Pass"]) && $_POST["Pass"] != "") {
        $_POST["Pass"] === $_SESSION["pass"] ? $pas = true : print ("<div><p>Contraseña Incorrecta</p></div>");

        $options = [
            'cost' => 12,
        ];
        $hashed_password = password_hash($_POST['Pass'], PASSWORD_BCRYPT, $options);

    } else {

        print ("<div><p>Inserta una Contraseña</p></div>");
    }
    if (isset($_POST["Rec"]) && $_POST["Rec"] === "on") {

        $cookie_name_Pass = "pas";
        $cookie_name_User = "user";
        $cookie_value_Pass = $hashed_password;
        $cookie_value_User = $_POST["User"];

        setcookie($cookie_name_User, $cookie_value_User, time() + (86400 * 30), "/"); // 86400 = 1 día
        setcookie($cookie_name_Pass, $cookie_value_Pass, time() + (86400 * 30), "/");

    }
    if ($user === true && $pas === true) {

        $_SESSION["login"] = 1;
        $_SESSION["islogin"] = 0;
        header("Location:home.php");
        print "<p>" . $_SESSION["login"] . " Variable Login</p>";


    }
}


?>