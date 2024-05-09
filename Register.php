<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Prova</title>
</head>

<body>
    <?php
    session_start();
    $errorUser;
    $errorPass;
    $errorPassdos;
    $errorEmail;
    $error = false;
    include_once ("header.php");
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (isset($_POST["User"])) {
            if (strlen($_POST["User"]) < 8) {

                $errorUser = "El nombre de usuario debe contener 8 caracteres";
                $error = true;
            } else {
                $errorUser = false;
            }
        }
        ;
        if (isset($_POST["Pass"])) {
            if (strlen($_POST["Pass"]) < 8) {
                $errorPass = "La Contraseña debe contener 8 caracteres mínimo";
                $error = true;
            } else {
                $errorPass = false;
            }

        }
        ;
        if (isset($_POST["Passdos"])) {
            if ($_POST["Passdos"] != $_POST["Pass"]) {
                $errorPassdos = "Las Contraseñas no coinciden";

            }
            if (empty($_POST["Passdos"])) {
                $errorPassdos = "Las Contraseñas no coinciden";
                $error = true;
            } else {
                $errorPassdos = false;
            }

        }
        ;
        if (isset($_POST["email"])) {
            $email = $_POST["email"];

            $regex = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

            if (preg_match($regex, $email)) {
                $error = true;
                $errorEmail = "Las Contraseñas no coinciden";
            } else {
                $errorEmail = false;
            }
        }
        ;
        if ($error === false) {
            header("Location:home.php");
            $_SESSION["login"] = 1;
        }



    } ?>
    <form method="POST" class="register">
        <input type="text" placeholder="Usuario" name="User">
        <?php echo isset($errorUser) ? "<spam class='heart'>" . $errorUser . "</spam>" : ""; ?>
        <input type="password" placeholder="Contraseña" name="Pass">
        <?php echo isset($errorPass) ? "<spam class='heart'>" . $errorPass . "</spam>" : ""; ?>
        <input type="password" placeholder="Repite Contraseña" name="Passdos">
        <?php echo isset($errorPassdos) ? "<spam class='heart'>" . $errorPassdos . "</spam>" : ""; ?>
        <input type="email" placeholder="Email" name="email">
        <?php echo isset($errorEmail) ? "<spam class='heart'>" . $errorEmail . "</spam>" : ""; ?>

        <button name="action">Enviar</button>
        <a href="index.php">Ya tienes Cuenta ➡ </a>
    </form>

    <?php include_once ("footer.php");
    ?>
</body>

</html>